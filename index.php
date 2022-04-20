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

            <section class="cvs ">
                <h2>Click the button below to view all Cvs:</h2> 
                
                <div class= "bcontainer">
                    <a href="cvs.php">
                    <button type= "button" id="cv"> View All CVs</button></a>
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

            /* index  ------------------------------------------------------------------------  */
            .cvs{
                padding: 40px;
                text-align: center;
                height: 200px;
                margin: 100px 40px;
            }
            

            #cv {
                width: 50%;
                display: inline-block;
                padding: 20px 40px;
                color: rgb(129, 96, 72);
                background-color: rgb(207, 215, 204);
                outline: none;
                border: none;
                border-radius: 20px;
                font-size: 26px;
                text-transform: uppercase;
                letter-spacing: 0.1rem;
                margin-top: 50px;
                margin-bottom: 50px;
            }

            #cv:hover {
                background-color: rgb(101, 122, 96);
                color: rgb(245, 245, 245);
                cursor: pointer;
            }

            h2{
                font-size: 32px;
            }

        </style>






    </body>

</html>