<?php
    echo '<h1>signing in lol</h1>';
    include("css_link.php");

    $connection = mysqli_connect('localhost', 'root', '', 'matchup_db');
    if(!$connection){
        printf("Connect to db failed: %s\n", mysqli_connect_error());
    }

    //get input
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql="SELECT * FROM `profile` WHERE `email`='$email'";
    $result = mysqli_query($connection, $sql);
    // $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])){
        // session_register("username");
        // session_register("password"); 

        // header("index.html");

        echo '<p class="front">Login Successful</p>';
        echo '<img class="front" src="https://media1.tenor.com/images/a8157e3cf5ce2700632190db9409ea2b/tenor.gif?itemid=5179821">';
        return true;
    }
    else {
        echo '<p class="front">Wrong Username or Password. Please <a href="../login.php">try again.</a></p>';
        return false;
    }

?>