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

            <div class= "bcontainer">
                <a href="cvs.php">
                <button type= "button" id="cv"> View All CVs</button></a>
            </div>

            
        </div>

        <?php
    
        session_start();
        
        
        require_once ('connectdb.php');  
        try {
            $query="SELECT name,email,keyprogramming FROM  cvs ";
                $rows =  $db->query($query);
                   
            if ( $rows && $rows->rowCount()> 0) {
             ?>	
        <table cellspacing="5"  cellpadding="5" id="mytable" >
          <tr><th align='left'><b>Name</b></th>   <th align='left'>
              <b>Email</b> 
            </th> <th align='left'>
                <b>Key Programming Language</b>
            </th ></tr>
            
            <?php           
                while  ($row =  $rows->fetch())	{
                    echo  "<tr><td align='left'>" . $row['name'] . "</td>";
                    echo  "<td align='left'>" . $row['email'] . "</td>";
                    echo "<td align='left'>". $row['keyprogramming'] . "</td></tr>\n";
                }
                echo  '</table>';
            }
            else {
                echo  "<p>No  cv in the list.</p>\n";
            }
        }
        catch (PDOexception $ex){
            echo "Sorry, a database error occurred! <br>";
            echo "Error details: <em>". $ex->getMessage()."</em>";
        }
    
    ?>

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

            /* CVS  ------------------------------------------------------------------------  */

            table,
            th,
            td {
                border-style: solid;
                padding: 10px 10px;
            }

            #myTable {
                margin-top: 100px;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }

        </style>







    </body>
    
    
</html>