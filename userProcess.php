<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name = htmlspecialchars($_POST["name"]);
        $lastName = htmlspecialchars($_POST["lname"]);


        echo "Hello {$name} {$lastName}, welcome to my page." . "<br>";

        header("location: ./index.php");

    }
    else{
        header("location: ./index.php");
    }