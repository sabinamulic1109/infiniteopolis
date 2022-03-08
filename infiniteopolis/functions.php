<?php

function check_login($con) //funkcija za prijavu
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1"; //iz tabele korisnici trazi se id tog korisnika

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data; //vraca podatke o korisniku
		}
	}

	//preusmjeravanje na prijavu
	header("Location: login.php");
	die;

}

function random_num($length) //funkcija random broj za unos
{

	$text = "";
	if($length < 5) //koliko je manje od 5
	{
		$length = 5; //duzina je 5
	}

	$len = rand(4,$length); //broh izmedju 4 i duzine

	for ($i=0; $i < $len; $i++) { 
		
		$text .= rand(0,9); 
	}

	return $text; //vraca text 
}