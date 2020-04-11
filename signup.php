<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css"/>
    <title>Khan's Project</title>
</head>
<body>
<div class="container">
        <div class="portal">

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname="khan";

            // Create connection
            $conn = new mysqli($servername, $username, $password,$dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $username = $_POST["username"];
            $email= $_POST["email"];
            $pass=$_POST["pass"];

            $sql = "INSERT INTO students (username, email, pass)
            VALUES ('$username', '$email', '$pass')";

            if ($conn->query($sql) === TRUE) {
                echo "<h5 class='sucess'>You have signup successfully</h5>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }




        

            $conn->close();

            ?> 
        </div>
</div>
    
</body>
</html>