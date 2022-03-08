<?php
$sname = "localhost"; //povezivanje s bazom
$uname = "root";
$password = "";

$db_name = "inf_baza";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
$sql="select * from tbl_images";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
   
echo '<img src="data:image;base64,'.base64_encode($row["name"]) .'"/>';

}
?>