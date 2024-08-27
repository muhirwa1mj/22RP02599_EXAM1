<?php

include('connect.php');
mysqli_query($conn,"use nexttech_portal_22rp02599");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view_emlpoyees</title>
</head>
<body>

<table>

<tr>
    <th>ID</th><th>employee_name</th><th>employee_email</th><th>employee_phone</th><th>employee_position</th><th>employee_address</th><th>employee_date</th><th>action</th>
</tr>

<?php

$sql=mysqli_query($conn,"SELECT * FROM employees");

while($row=mysqli_fetch_array($sql)){

?>
<tr>
<td><?php echo $row['ID'] ?></td>
<td><?php echo $row['employee_name'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['phone'] ?></td>
<td><?php echo $row['position'] ?></td>
<td><?php echo $row['adress'] ?></td>
<td><?php echo $row['created_at'] ?></td>


<td>
    <a href="delete.php?id=<?php echo $row['ID']?>">delete</a>
    <a href="update.php?id=<?php echo $row['ID']?>">update</a>
<td>
</tr>
<?php


}

?>


</table>
    
</body>
</html>