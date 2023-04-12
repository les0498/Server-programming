<?php
$category   = $_POST["category"];

$con = mysqli_connect("localhost", "root", "", "sample1");
$sql = "select * from members where category='$categroy'";
$result = mysqli_query($con, $sql);

$num_match = mysqli_num_rows($result);


?>
