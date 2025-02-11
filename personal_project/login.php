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
                <label><input type="radio" name="candidate" value="Candidate 1" required> Candidate 1</label><br>
                <label><input type="radio" name="candidate" value="Candidate 2" required> Candidate 2</label><br>
                <label><input type="radio" name="candidate" value="Candidate 3" required> Candidate 3</label><br>
                <label><input type="radio" name="candidate" value="Candidate 4" required> Candidate 4</label><br>
                <button type="submit">Submit Vote</button>
            </form>
            <br>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <h3>Login</h3>
            <form method="POST" action="login.php">
                <label for="username">Username:</label>
                <input type="text" name="username" required><br>
                
                <label for="password">Password:</label>
                <input type="password" name="password" required><br>
                
                <button type="submit">Login</button>
            </form>
            <br>
            <h3>Register</h3>
            <form method="POST" action="register.php">
                <label for="new_username">Username:</label>
                <input type="text" name="new_username" required><br>
                
                <label for="new_password">Password:</label>
                <input type="password" name="new_password" required><br>
                
                <button type="submit">Register</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>