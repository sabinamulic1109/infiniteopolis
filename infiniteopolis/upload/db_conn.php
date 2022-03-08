<?php  

$sname = "localhost";//Ime hosta,baze i konekcija s bazom
$uname = "root";
$password = "";

$db_name = "inf_baza";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Prekinuta konekcija!";
	exit();
}