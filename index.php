<? php 
    session_start();

echo '<!DOCTYPE html>
<html>
    <title>PP basic storage</title>
    <head>
        <header>';
            include 'footer.php';

        echo '</header>
        <link rel="stylesheet" type="text/css" href="CSS/styles.css" >
    </head>
    <body>
        <div id="form">
            <form action="/PHP/get_profile.php" method="GET">
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
                <label for="fname">First name:</label>
                    <input type="text" id="fname" name="fname" placeholder="First name"><br>
                <label for="lname">Last name:</label>
                    <input type="text" id="lname" name="lname" placeholder="Last name"><br><br>
                <form>
                <label>Pick a gender:</label><br>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label><br>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label>
                    </form>
                <label for="pass">Password (7 characters minimum):</label>
                    <input type="password" id="pass" name="password" minlength="7" required> <br>
                
                <input type="submit" value="Submit">
              </form> 
        </div>
    </body>
</html>';
?>