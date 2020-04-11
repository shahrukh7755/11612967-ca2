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
            $password = "";
            $dbname="khan";

            // Create connection
            $conn = new mysqli($servername, $username, $password,$dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $username = $_POST["username"];
            $pass=$_POST["pass"];


            $sql = "SELECT username, email, pass FROM students where username='$username' AND pass='$pass'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "Thanks you , <br> 
                    Mr: " . $row["username"]. " <br>  email: " . $row["email"]. "<br>";
                }
            } else {
                echo "Not User Found";
            }

            $conn->close();

            ?> 
        </div>
</div>
    
</body>
</html>