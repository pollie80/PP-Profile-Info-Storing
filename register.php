<!DOCTYPE html>
<html>
    <title>PP basic storage</title>
    <head>
        <header><h1>Register and start socializing today</h1></header>
        <link rel="stylesheet" type="text/css" href="CSS/styles.css" >
    </head>
    <body>
        <div class="front">
            <form action="Actions/store_profile.php" method="POST">
                <!-- get category of profile -->
                <label for="category">Choose a social category:</label>
                
                <select name="category" id="category">
                    <option value="Tennis">Tennis</option>
                    <option value="Cricket">Cricket</option>
                    <option value="Hockey">Hockey</option>
                    <option value="Social">Social</option>
                </select>
                <br><br>
                
                <!-- get person info -->
                <label>First name:</label>
                <input type="text" name="fname" placeholder="First name"><br>
                <label for="lname">Last name:</label>
                <input type="text" name="lname" placeholder="Last name"><br><br>
                <div>
                    <label>Pick a gender:</label><br>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label><br>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label>
                </div>
                <label for="pass">Password (7 characters minimum):</label>
                <input type="password" id="pass" name="password" minlength="7" required> <br>
                
                <!-- done -->
                <input type="submit" value="Submit" name="submit">
            </form><br>

        </div>
    </body>
</html>

<?php 
    // session_start();
    // include "main.html";
    // session_destroy();
?>