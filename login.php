<!DOCTYPE html>
<html>
    <title>Login|PP basic storage</title>
    <head>
        <header><h1>Login to start socializing today!</h1></header>
        <link rel="stylesheet" type="text/css" href="CSS/styles.css" >
    </head>
    <body>
        <div class="front">
            <form action="Actions/login.php" method="POST">                
                <!-- get person info -->
                <label>Email:</label>
                <input type="text" name="email" placeholder="example@email.com" required><br>
                <label for="pass">Password:</label>
                <input type="password" id="pass" name="password" required> <br>
                
                <!-- done -->
                <input type="submit" value="Submit" name="submit">
            </form><br>
            <?php
                echo 'signing in lol';

                //check password and email match records
            ?>
        </div>
    </body>
</html>

<?php 
    // session_start();
    // include "main.html";
    // session_destroy();
?>