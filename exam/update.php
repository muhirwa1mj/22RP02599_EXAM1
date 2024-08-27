
<?php

include('connect.php');
mysqli_query($conn,"use nexttech_portal_22rp02599");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update_employee</title>
</head>
<body>
<?php

if(isset($_POST['submit'])){

    $names=$_POST['names'];
    $email=$_POST['email'] ;
    $phone=$_POST['phone'] ;
    $position=$_POST['position'] ;
    $address=$_POST['address'] ;
    $date=$_POST['date'] ;
            
    $sql=mysqli_query($conn,"UPDATE employees SET employee_name='$names',email='$email',phone='$phone',position='$position',adress='$address',created_at ='$date' WHERE id='$iddel'");

if($sql){

?>

<script>

    alert("employee well updated");
window.location.href="view.php";
</script>
<?php

}
else{

    echo"failed to update employee";
}

}

?>


<form action="" method="POST">
    
    employee_name:<input type="text" name="names" placeholder="enter your names"><br><br>
    employee_eamil:<input type="text" name="email" placeholder="enter your email"><br><br>
    employee_phone:<input type="text" name="phone" placeholder="enter your mobile number"><br><br>
    employee_position:<input type="text" name="position" placeholder="enter your position"><br><br>
    employee_address:<input type="text" name="address" placeholder="enter your adress"><br><br>
    employee_name:<input type="date" name="date" placeholder="enter dates"><br><br>
    
    <button type="submit" name="submit">update</button>
    
    </form>
    


</body>
</html>