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
        <h1>Enter the system</h1>
        <h6><br>It is necessery to login in your account in order to signup for a course</br></h6>
        <div class="portal">
            <div>
                    <h1>Are you new ? Register</h1>
                    <form method="post" action="signup.php">
                    <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="pass">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
            <div>
            <form method="post" action="login.php">
                    <h1>Ready a student ? Login</h1>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="username" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>

        </div>
</div>
    
</body>
</html>
