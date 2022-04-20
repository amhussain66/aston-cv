<?php


require_once('connectdb.php');


if(isset($_POST["save-cv"])){


  $name=isset($_POST['name']);
  $email= isset($_POST['email']);
  $keyprogramming= isset($_POST['kpl']);
  $profile= isset($_POST['profile']);
  $education= isset($_POST['ed']);
  

    try{

        $query= "INSERT INTO cvs (name, email,keyprogramming,profile,education) VALUES('$name', '$email' , '$keyprogramming', '$profile', '$education')";
        $result= mysqli_query($con, $query);

        if($result){

        header("Location: updatecv.php");

        }else{
            echo "Could not save";
        }

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
        <link rel="stylesheet" href="style.css">
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
                        <li><a href="index.php">Logout</a></li>
                    </ul>
                </nav>
            </div>

            <section class="CV"> 
                <div class="center">
                    <h1>Create CV</h1>
                    <form method="post" action="updatecv.php">
                        <div class="text">
                            <label>Name</label>
                            <input id= "text" type="text" name="name" required>
                        <br>
                            <label>Email</label>
                            <input id= "text" type="text" name="email" required>
                        <br>
                            <label>Key Programming Language </label>
                            <input id= "text" type="text" name="kpl" required>
                        <br>
                            <label>Profiles</label>
                        </br>
                            <textarea id= "textarea" type="text" name="profile" required></textarea>
                        <br>
                            <label>Education</label>
                            <input id= "edu" type="text" name="education" required>
                        <br>
                        <br>                
                            <button type="submit" name= "save-cv" id= "save-button" >Save</button>
                                
                        </div>
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
    
                /* UPDATECVS  ------------------------------------------------------------------------  */
    
                .cv {
                    padding: 20px 50px;
                    margin-bottom: 80px;
                    margin-top: 50px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
    
    
                .inputs {
                    padding: 20px;
                    background-color: rgb(173, 189, 169);
                    border-radius: 20px;
                }
    
                input, #textarea, #edu {
                background-color: rgb(215, 210, 197);
                border: 2px solid rgb(101, 122, 96);
                border-radius: 5px;
                margin-bottom: 10px;
                }
    
                label{
                    font-size: 16px;
                    padding: 5px;
                    letter-spacing: 0.1rem;
                }
                .create-h1{
                    margin-bottom: 10px;
                    /* font-size: 26px; */
                }
    
                #save-button {
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
                    margin-top: 10px;
                    margin-bottom: 30px;
                }
    
                #save-button:hover {
                    background-color: rgb(101, 122, 96);
                    color: rgb(245, 245, 245);
                    cursor: pointer;
                }
    
    
                #textarea {
                    width: 100%;
                    height: 60px;
                    border: 2px solid rgb(101, 122, 96);
                    border-radius: 5px;
    
                }
    
                #edu {
                    height: 80px;
                }
    
    
            </style>














    </body>


</html>