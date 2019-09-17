<?php

//Check if user actually typed something into the textboxes AND pressed submit
if (isset($_POST["submit"]) &&
!empty($_POST["userName"]) &&
!empty($_POST["password"])) 
{
    handleLogin();
}  

function handleLogin()
{
    //create helper variables
    $inputUsername = $_POST["userName"];
    $inputPassword = $_POST["password"];

    //we have a match and login - display success msg
    if (validateUserDB($inputUsername, $inputPassword) == true) {
        echo "<br/>Welcome to the secret area.";
        header("Location: secret.php");
    }
    //failed login attempt
    else {
        echo "<br/><br/>Wrong username or password. Try again...";
    }

}

function validateUserDB($inputUsername, $inputPassword)
{
    //simple DB connect
    $conn = new mysqli("localhost", "root", "", "userdb");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($user = $result->fetch_assoc()) {
            if ($user["username"] == $inputUsername &&
                $user["password"] == $inputPassword) {
                return true; //we have a match :)
            }
        }
    }

    return false;
}

?>
