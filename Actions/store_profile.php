<?php   
    $connection = mysqli_connect('localhost', 'root', '', 'matchup_db');
    if(!$connection){
        printf("Connect to db failed: %s\n", mysqli_connect_error()); //based off: https://stackoverflow.com/questions/37367992/php-inserting-values-from-the-form-into-mysql
    }

    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $gender = $_POST['gender'];
    $category = $_POST['category'];

    $sql = "INSERT INTO profile(`email`,`password`,`first name`, `last name`, `gender`, `interested category`)
    VALUES ('$email','$password','$first_name','$last_name','$gender','$category')";

    if (mysqli_query($connection, $sql)) {
        echo "Login added!";
        include "../login.php";
    } else {
        echo "Error: ".$sql."". mysqli_error($connection);
    }
    
    mysqli_close($connection);
    

    // INSERT INTO `profile`(`id`, `first name`, `last name`, `gender`, `interested category`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
?>