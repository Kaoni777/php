<?php
// 1. Write a file using: 'fopen', 'fwrite', 'fclose'
function writeTofile($message): void{
    $file = fopen(filename: "example.txt", mode: "a");
}

//Check if the file was succesfuly opened
if($file == true) {
    // Write the message to the file
    fwrite(stream:  $file, data: $message.PHP_EOL);

    //Close the file
    fclose(stream: $file);

    echo "Message writteen to file successfully!<br>";
} else {
    echo "Failed to open the file for writting.<br>";
}


//2. Read from a file using 'fopen', 'fread', 'foef', 'fclose'

function readFromFile(): void{
    $file = fopen(filename: "example.txt", mode: 'r');

    //Chech if the file was opended succesfully
    if($file){
        echo "Contect of the example.txt";

        //Read the file until the end (oef)
        while(!feof(stream: $file)){
            $line = fgets(stream: $file);
            echo htmlspecialchars(string: ($line)."<br>");
        }
        fclose(stream: $file);
    } else{
        echo "Failed to open the file for reading!!";
    }
}

//3. Write a single line to the file using file_put_contents

?>