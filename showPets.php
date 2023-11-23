<?php
include("dbcon.php");


$sql = "select * from pet";

//echo $sql;

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    $petname = $row['NAME'];
    $age = $row['age'];
    $breed = $row['breed'];
    echo "$petname $age $breed<BR>";
}



?>