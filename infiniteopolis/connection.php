<?php

$dbhost = "localhost"; //ime hosta
$dbuser = "root"; 
$dbpass = ""; //nema šifre
$dbname = "inf_baza"; //ime baze 

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)) //konekcija s bazom
{

	die("Nemoguće povezati se s bazom!"); //ukoliko nije pronađeno, nemoguće je povezati se s bazom
}
