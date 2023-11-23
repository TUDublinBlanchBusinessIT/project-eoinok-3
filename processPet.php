<?php
include("dbcon.php");

$petName = $_POST['pn'];
$age = $_POST['age'];
$breed = $_POST['breed'];

//echo "$petName $age $breed";

$sql = "INSERT INTO pet(NAME, age, breed) VALUES ('$petName', $age, '$breed')";

//echo $sql;

if(mysqli_query($conn,$sql)){
    echo "a new record inserted";
}
else {
    echo "error!";
}


?>