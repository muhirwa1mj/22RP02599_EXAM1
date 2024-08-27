<?php

include('connect.php');
mysqli_query($conn,"use nexttech_portal_22rp02599");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>

<style>
   
</style>
<body>

<?php
if(isset($_POST['submit'])){

    $error_names='';
    $error_email='';
    $error_phone='';
    $error_postion='';
    $error_address='';
    $error_date='';

    if(empty($_POST['names'])){
        $error_names='please fill this area';  

    }

    else{

        $names=$_POST['names'];
        if(!preg_match("/^[a-zAZ ]+$/",$names)){
            $error_names='names must be alphanumerics only';  

        }
    }
    if(empty($_POST['email'])){
        $error_email='please fill this area';  

    }

    else{

        $email=$_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error_email='invalid email';  

        }
    }
    if(empty($_POST['phone'])){
        $error_phone='please fill this area';  

    }

    else{

        $phone=$_POST['phone'];
        if(!preg_match("/^\+250[0-9]{9}$/",$phone)){
            $error_phone='invalid phone number';  

        }
    }
    if(empty($_POST['position'])){
        $error_position='please fill this area';  

    }

    else{

        $position=$_POST['position'];
        if(!preg_match("/^[a-zAZ ]+$/",$position)){
            $error_position='names must be alphanumerics only';  

        }
    }
    if(empty($_POST['address'])){
        $error_address='please fill this area';  

    }

    else{

        $address=$_POST['address'];
       
       if(!preg_match("/^[a-zAZ0-9 ]+$/",$address)){
            $error_address='names must be alphanumerics only';  

        }
    }
    if(empty($_POST['date'])){
        $error_date='please fill this area';  

    }

    else{

        $date = $_POST['date'];
        }

        if(empty($error_names) && empty($error_email) && empty($error_phone) && empty($error_position) && empty($error_address) && empty($error_date)){
        $sql=mysqli_query($conn,"INSERT INTO employees (employee_name,email, phone,position,adress,created_at) VALUES ('$names', '$email', '$phone', '$position', '$address', '$date')");
        if($sql){

     
    
    ?>
        
        <script>
            alert("well inserted");
            window.location.href="view.php";
            
        </script>
        
        <?php
    
}else{

        echo"failed to insert employees";
        header("Location:insert.php");
    }

}else{
        echo $error_names. "<br>";
        echo $error_email. "<br>";
        echo $error_phone. "<br>";
        echo $error_position. "<br>";
        echo $error_address. "<br>";
        echo $error_date. "<br>";
    }

    //$names=$_POST['names'];
    //$email=$_POST['email'] ;
    //$phone=$_POST['phone'] ;
    //$position=$_POST['position'] ;
    //$address=$_POST['address'] ;
    //$date=$_POST['date'] ;

    

        
}

?>

<h3>EMPLOYEE CONTROL PAGE</h3>

    <form action="" method="POST">
    
employee_name:<input type="text" name="names" placeholder="enter your names"><br><br>
employee_eamil:<input type="text" name="email" placeholder="enter your email"><br><br>
employee_phone:<input type="text" name="phone" placeholder="enter your mobile number"><br><br>
employee_position:<input type="text" name="position" placeholder="enter your position"><br><br>
employee_address:<input type="text" name="address" placeholder="enter your adress"><br><br>
employee_name:<input type="date" name="date" placeholder="enter dates"><br><br>

<button type="submit" name="submit">insert</button>

</form>

</body>
</html>