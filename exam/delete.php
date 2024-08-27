<?php
include('connect.php');
mysqli_query($conn,"use nexttech_portal_22rp02599");

if(isset($_GET['id'])){
$iddel=$_GET['id'];

$sql=mysqli_query($conn,"DELETE FROM employees WHERE ID='$iddel'");

if($sql){
    header("location: view.php");
}
else{

    echo"failed to delete employee";
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    

</body>
</html>