<?php 
session_start(); //pocetak sesije

    include("connection.php"); //konekcija s bazom
    include("functions.php"); //konekcija s definisanim funkcijama


    if($_SERVER['REQUEST_METHOD'] == "POST") //ako je zatrazena metoda post
    {
        //nesto je poslano
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //sacuvaj u bazu podataka
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')"; //id automatski definise, a korisnicko ime i sifra se spremaju u istoimene atribute u tabelu korisnik

            mysqli_query($con, $query);

            header("Location: login.php"); //preusmjerava na prijavu jer se poslije registracije mora prijaviti za nastavak na stranicu
            die;
        }else
        {
            echo "Unesite validne podatke!"; //ukoliko je netacan podatak unesen, registracija nije moguca
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>REGISTRACIJA</title>
<link rel="preconnect" href="https://fonts.googleapis.com"><!--povezice za fontove,jquery i css skriptu-->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

        <link rel="stylesheet" href="signup.css">



</head>
<body>
<section>
	<br><br><br><br><br>
	<div id="box" class="box">
		
		<form method="post" onsubmit="return confirm('Ukoliko ste završili s registracijom, nastavite dalje i ulogujte se s pripadajućim imenom i lozinkom.');"><!--nakon potvrđene registracije pojavljuje se confirm prozor koji kaze da se treba izvrsiti prijava-->
			<div class="a"><h3 align="center" class="reg">REGISTRACIJA</h3></div>

			<input id="text" type="text" name="user_name" placeholder="Unesite korisničko ime." pattern="[a-zA-Z'-'\s]*" title="Unesite korisničko ime samo slovima." required="required" oninvalid="this.setCustomValidity('Molimo, provjerite Vaš unos! Korisničko ime može sadržavati samo slova.')" onchange="this.setCustomValidity('')"><br><br><!--unos korisnickog imena, moze unijeti samo slovima, ovo polje se mora ispuniti-->
			<input id="text" type="password" name="password" placeholder="Unesite željenu lozinku." pattern=".{5,}" title="Lozinka mora sadržavati najmanje 5 karaktera." required="required" oninvalid="this.setCustomValidity('Molimo, provjerite Vaš unos! Lozinka mora imati najmanje 5 karaktera.')" onchange="this.setCustomValidity('')"><!--lozinka mora biti 5 ili više karaktera, ovo polje se mora ispuniti-->
          <br><br>

			<p align="center"><input id="button" type="submit" value="Podnesi"></p><br><br><!--submit dugme za potrvdu registracije-->

			<a href="login.php">VEĆ IMATE RAČUN? VRATITE SE NA PRIJAVU.</a><br><br><!--link za login-->
		</form>
	</div>
</section>
<div class="footer">

      <div class="box-container">

        <div class="box">
            <h3>Rasprostranjenost</h3> <!--rasprostranjenost djelovanja po balkanskim drzavama-->
            <a href="#">BiH</a>
            <a href="#">Hrvatska</a>
            <a href="#">Srbija</a>
            <a href="#">Crna Gora</a>


        </div>

      
 <div class="box">
            <h3>Kontakt informacije</h3><!--kontakt informacije sa adresom, emaiom i tel.brojem-->
            <p> <i class="fas fa-map-marker-alt"></i> Bosanska br.5 Bihać, BiH

 </p>
            <p> <i class="fas fa-envelope"></i> neki@email.com </p>
            <p> <i class="fas fa-phone"></i> 123-456-789 </p>
        </div>

    </div>

    <h1 class="credit">Designed by <a href="https://www.linkedin.com/in/sabina-muli%C4%87-56a360211">Sabina Mulić</a><br>Copyright Tehnički fakultet Bihać 2021 &copy;</h1> <!--informacije o adminu-->

</div>
 
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script><!--ajax skripta-->
        <script src="skripta.js"></script><!-- js skripta-->

</html>