<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .container { max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome to the Online Voting System</h2>
        
        <?php if (isset($_SESSION['user_id'])): ?>
            <p>You are logged in as <strong><?php echo $_SESSION['username']; ?></strong></p>
            <h3>Vote for Your Candidate</h3>
            <form method="POST" action="vote.php">
                <label><input type="radio" name="candidate" value="Candidate 1" required> PDK</label><br>
                <label><input type="radio" name="candidate" value="Candidate 2" required> PVV<label><br>
                <label><input type="radio" name="candidate" value="Candidate 3" required> LDK</label><br>
                <button type="submit">Submit Vote</button>
            </form>
            <br>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <p>Please <a href="login.php">login</a> to vote.</p>
        <?php endif; ?>
    </div>
</body>
</html>