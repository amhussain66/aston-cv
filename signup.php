<?php

require_once('connectdb.php');

if(isset($_POST["register-user"])){

  $username=isset($_POST['username'])?$_POST['username']:false;
  $password=isset($_POST['password'])?password_hash($_POST['password'],PASSWORD_DEFAULT):false;

    try{

        $query= "INSERT INTO users (username, password) VALUES(?,?)";
        $stmt= mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt,$query)){
            header("Location: signup.php");
            exit();
        }
        mysqli_stmt_bind_param($stmt,"ss", $username, $password);
        mysqli_stmt_execute($stmt);

        header("Location: login.php");

    } catch (PDOException $ex) {
        
        echo 'Sorry, an error has occurred. Please try again.';
        echo 'Error details:' . $exgetMessage();

    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Cookie&family=Ruda:wght@500&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="banner"> 
                <nav class="navbar">
                    <div class="logo">
                        <h1>Aston CV</h1>
                    </div> 
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="signup.php">Register</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </nav>
            </div>

            <section class="card"> 
                <div class="middle">
                    <form method="post" action="login.php" class="form">
                            <h1 class="login-h1">Sign Up!</h1>
                            <div class="text">
                                <label>Create a username</label>
                                <input type="text" name="username" required>
                                <br>
                                <br>
                                <label>Create password</label>
                                <input type="password" name="password" required>
                                <br>
                                <br>            
                            </div>
                            <button type="submit" name= "register-user" id= "registerb" >Register Now</button>
                        
                            <p> Already a user? <a href="login.php"> Login </a>
                        </br>
                    </form>

                </div>
            </section>
        </div>


        <style type= "text/css">

            /* Main  ------------------------------------------------------------------------ */
            * {
                margin: 0%;
                padding: 0%;
                font-family: "Ruda", sans-serif;

            }

            h1 {
                text-transform: uppercase;
                font-weight: bold;
            }

            body {
                background-color: rgb(236, 238, 237);
                margin: 0px auto;
                font-size: 15px;
                line-height: 1.5;
                color: rgb(129, 96, 72);
                display: flex;
                flex-direction: column;
            }
            p {
            text-align: center;
            }

            /* Logo   ------------------------------------------------------------------------*/
            .logo {
                font-family: "Ruda", sans-serif;
            }

            /* Nav Style   ------------------------------------------------------------------------*/
            .banner {
                width: 100%;
                background-color: rgb(215, 210, 197);

            }

            .navbar {
                font-size: 16px;
                width: 85%;
                margin: auto;
                padding: 30px 0;
                display: flex;
                align-items: center;
                justify-content: space-between;
                font-weight: bold;

            }

            .navbar ul li {
                list-style: none;
                display: inline-block;
                margin: 0 20px;
                position: relative;
            }

            .navbar ul li a {
                color: rgb(175, 147, 117);
                text-decoration: none;

            }
            /* Log In / Register  ------------------------------------------------------------------------ */
            .card {
                color: rgb(115, 146, 112);
                width: 100%;
                height: auto;
                margin-bottom: 80px;
                margin-top: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .login-h1 {
                margin-bottom: 20px;
            }

            .form {
                text-align: left;
                padding: 0px 30px 0px 30px;
                margin-top: 80px;
            }


            .text input {
                width: 100%;
                height: 30px;
                border: 2px solid rgb(101, 122, 96);
                border-radius: 5px;
            }

            #loginb,
            #registerb {

                width: 65%;
                display: inline-block;
                padding: 9px 20px;
                color: rgb(129, 96, 72);
                background-color: rgb(207, 215, 204);
                outline: none;
                border: none;
                border-radius: 20px;
                font-size: 16px;
                text-transform: uppercase;
                letter-spacing: 0.1rem;
                margin-top: 30px;
                margin-bottom: 30px;
            }


            #loginb:hover {
                background-color: rgb(101, 122, 96);
                color: rgb(245, 245, 245);
                cursor: pointer;
            }

            #registerb:hover {
                background-color: rgb(101, 122, 96);
                color: rgb(245, 245, 245);
                cursor: pointer;
            }


        </style>


    </body>
  
</html>