<?php
include("dbcon.php");


$sql = "select * from pet";

//echo $sql;

$result = mysqli_query($conn, $sql);

echo "<TABLE border='1'>";
while($row = mysqli_fetch_assoc($result)) {
    $petname = $row['NAME'];
    $age = $row['age'];
    $breed = $row['breed'];
    echo "<TR><TD>$petname</TD><TD>$age</TD><TD>$breed</TD></TR>";
}
echo "</TABLE>";



?>