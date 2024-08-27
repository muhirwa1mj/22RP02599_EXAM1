<?php

include('connect.php');
mysqli_query($conn,"use nexttech_portal_22rp02599");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

<?php
if(isset($_POST['submit'])){

    $username=$_POST['names'];
    $password=$_POST['password'];

    $sql=mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'");
    $row=mysqli_num_rows($sql);
    if(empty($username)||empty($password)){

        echo"both username and password are required";
    }
    else{
        if($row>0){
            $_SESSION['names'];
            header("location:insert.php");
        }
        else{
            echo"login failed";
        }
    }
}

?>
    
<fieldset>

<legend>user_login</legend>

<form action="" method="POST">

username:<input type="text" name="names" placeholder="enter names"><br><br>
password:<input type="password" name="password" placeholder="enter password"><br><br>
remember_me <input type="radio" name="me">
<button type="submit" name="submit">login</button>

</fieldset>

</form>
</body>
</html>