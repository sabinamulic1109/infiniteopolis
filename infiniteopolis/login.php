<?php 

session_start(); //pocetak sesije

    include("connection.php"); //konekcija s bazom
    include("functions.php"); //konekcija s funkcijama


    if($_SERVER['REQUEST_METHOD'] == "POST") //ukoliko server zatrazi post metodu
    {
        //nesto je poslano
        $user_name = $_POST['user_name']; //definisanje varijabli tj username je uneseno korisnicko ime
        $password = $_POST['password']; //unesena sifra je sifra

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) 
        {

            //citanje iz baze
            $query = "select * from users where user_name = '$user_name' limit 1"; //iz tabele korisnika gdje je user_name=user_name
            $result = mysqli_query($con, $query);  //Rezultat je varijabla koja uspostavlja konekciju baze i query-a koji sadrzi podatke iz baze

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)  //ukoliko je sifra korisnika tacna provjerava se tip korisnika
                    {
                        if($user_data['usertype']=="user") //ako je tip korisnika user 
                        {

                        $_SESSION['user_id'] = $user_data['user_id']; //preusmjerava se na index.php 
                        header("Location: index.php");
                        }

                        else if($user_data['usertype']=="admin"){ //ukoliko je tip korisnika admin

                            $_SESSION['user_id'] = $user_data['user_id']; //preusmjerava se na indexadmin.php koja ima dodatne funkcije za razliku od obicne
                        header("Location: indexadmin.php");
                        }
                    }
                }
            }
            
echo '<script>alert("Netačno korisničko ime ili lozinka! Molimo pokušajte ponovno.")</script>';     //ukoliko je korisnicko ime ili lozinka netacna javlja se alert poruka o tome
}else
        {
echo '<script>alert("Netačno korisničko ime ili lozinka! Molimo pokušajte ponovno.")</script>';     

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>INFINITEOPOLIS</title>

<link rel="preconnect" href="https://fonts.googleapis.com"><!--linkovi za skripte dizajna-->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

        <link rel="stylesheet" href="stil.css">

</head>
<body >
<header>
 
 <H1><marquee>PRIJAVITE SE ZA NASTAVAK NA STRANICU!</marquee></H1> <!--plutajuci tekst u lijevom gornjem uglu-->
 <div id="login"class="fas fa-user-circle" ></div>
    
</header>

<div class="login-form"><!--forma za login-->
    <form method="post" >
        <h3>PRIJAVA</h3>
        <input type="text" name="user_name" placeholder="Korisničko ime" class="box" required="required" oninvalid="this.setCustomValidity('Molimo, ispunite ovo polje!')" onchange="this.setCustomValidity('')"><!--ovaj se input mora popuniti korisnickim imenom, u suprotnom prijava nije moguca i javlja se poruka da se ispuni-->
        <input type="password" name="password" class="box" placeholder="Unesite lozinku" required="required" oninvalid="this.setCustomValidity('Molimo, unesite lozinku!')" onchange="this.setCustomValidity('')"><!--ovaj se input mora popuniti lozinkom, u suprotnom prijava nije moguca i javlja se poruka da se ispuni-->
        <p class="dodatak">Nemate račun?<!--link za registraciju--> <a href="signup.php">REGISTRIRAJTE SE!</a></p>
        <a href="index.html"><input type="submit" class="btn" value="PRIJAVA" name="Login"></a><!--submit dugme kojim se potrđuje odnosno salje zahtjev za prijavu-->
        <i class="fas fa-times"></i>

    </form></div>

    <section style="background-image: url('slike/1381.png'); /*slika pozadine, bez ponavljanja i veličine cover-a*/
  background-repeat: no-repeat;
  background-size: cover;"

 >
        
    </section>

    
<div class="footer"><!--podnozje-->

    <div class="box-container">

        <div class="box"> <!--rasprostranjenost djelovanja na balkanskim zemljama-->
            <h3>Rasprostranjenost</h3>
            <a href="#">BiH</a>
            <a href="#">Hrvatska</a>
            <a href="#">Srbija</a>
            <a href="#">Crna Gora</a>


        </div>

      
 <div class="box">
            <h3>Kontakt informacije</h3> <!--informacije o adresi, emailu i tel.broju-->
            <p> <i class="fas fa-map-marker-alt"></i> Bosanska br.5 Bihać, BiH

 </p>
            <p> <i class="fas fa-envelope"></i> neki@email.com </p>
            <p> <i class="fas fa-phone"></i> 123-456-789 </p>
        </div>

    </div>

    <h1 class="credit">Designed by <a href="https://www.linkedin.com/in/sabina-muli%C4%87-56a360211">Sabina Mulić</a><br>Copyright Tehnički fakultet Bihać 2021 &copy;</h1><!--infomracije o vlasniku website-a-->

</div>
 

</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script><!--ajax skripta-->
        <script src="skripta.js"></script><!--js skripta-->

    </html>