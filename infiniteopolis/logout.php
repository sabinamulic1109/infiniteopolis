<?php

session_start(); //pocetak sesije

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']); //odjavi korisnika

}

header("Location: login.php"); //preusmjeravanje na prijavu
die; 