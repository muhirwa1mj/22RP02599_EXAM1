<?php

$servername="localhost";
$username="root";
$DBname="nexttech_portal_22rp02599";
$password="";

$conn=mysqli_connect($servername,$username,$DBname,$password);

if($conn){

    echo "Connecting toDB";
}
else{
    echo "failed to connect";
}



?>