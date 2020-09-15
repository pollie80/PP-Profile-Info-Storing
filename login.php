<!DOCTYPE html>
<html>
    <title>Login|PP basic storage</title>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/styles.css" >
        <header><h1>Log in to start socializing today!</h1></header>
    </head>
    <body>
        <div class="front">
            <form action="sign_in.php" method="POST">                
                <!-- get person info -->
                <label>Email:</label>
                <input type="text" name="email" placeholder="example@email.com" required><br>
                <label for="pass">Password:</label>
                <input type="password" id="pass" name="password" required> <br>
                
                <!-- done -->
                <input type="submit" value="Submit" name="submit">
            </form><br>
        </div>
    </body>
</html>