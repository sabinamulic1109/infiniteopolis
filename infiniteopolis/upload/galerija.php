<?php 
include "action.php" //uključuje se action.php
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GALERIJA INFINITEOPOLIS</title>

    <!-- magnific-popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- css skripta -->
    <link rel="stylesheet" href="style.css">


</head>

<body>

<div class="gallery">

    <ul class="controls"> <!--filteri za prikaz slika, svaka slika pomocu svog id-a pripada jednoj sekciji od ponuđenih-->
        <li class="buttons active" data-filter="all">SVE SLIKE</li>
        <li class="buttons" data-filter="radionice">RADIONICE</li>
        <li class="buttons" data-filter="certifikati">CERTIFIKATI</li>
        <li class="buttons" data-filter="seminari">SEMINARI</li>
        <li class="buttons" data-filter="druzenja">DRUŽENJA</li>
        <li class="buttons" data-filter="qs">NOVO</li>
        <li class="buttons" onclick="history.back()" title="Nazad na početnu stranicu."> <<< </li>

    </ul>

    <div class="image-container">

        <a href="slike/radionica1.jpg" class="image radionice">
            <img src="slike/radionica1.jpg" alt="Radionica: Anksioznost">
        </a>
        <a href="slike/radionica2.jpg" class="image radionice">
            <img src="slike/radionica2.jpg" alt="Radionica: COVID-19 traume">
        </a>
        <a href="slike/radionica3.png" class="image radionice">
            <img src="slike/radionica3.png" alt="Radionica: Mobing na poslu">
        </a>

        <a href="slike/certifikat1.jpg" class="image certifikati">
            <img src="slike/certifikat1.jpg" alt="Certifikat 1">
        </a>
        <a href="slike/certifikat2.jpg" class="image certifikati">
            <img src="slike/certifikat2.jpg" alt="Certifikat 2">
        </a>

        <a href="slike/seminar1.jpg" class="image seminari">
            <img src="slike/seminar1.jpg" alt="">
        </a>
        <a href="slike/seminar2.jpg" class="image seminari">
            <img src="slike/seminar2.jpg" alt="Seminar u Minhenu">
        </a>
        <a href="slike/seminar3.jpg" class="image seminari">
            <img src="slike/seminar3.jpg" alt="Seminar u Sarajevu">
        </a>
        <a href="slike/seminar4.jpg" class="image seminari">
            <img src="slike/seminar4.jpg" alt="">
        </a>
        <a href="slike/seminar5.jpg" class="image seminari">
            <img src="slike/seminar5.jpg" alt="Seminar u Beogradu">
        </a>

        <a href="slike/druzenje1.jpg" class="image druzenja">
         <img src="slike/druzenje1.jpg" alt="Druženje u lokalnom kafiću">
        </a>
        <a class="image druzenja" href="slike/druzenje2.jpg">
         <img src="slike/druzenje2.jpg" alt="Upoznavanje članova">
        </a>
        <a class="image druzenja" href="slike/druzenje3.jpg">
         <img src="slike/druzenje3.jpg" alt="Sportske aktivnosti">
        </a>

  <?php
$sname = "localhost"; //konekcija s bazom
$uname = "root";
$password = "";

$db_name = "inf_baza";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
$sql="select * from tbl_images";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
   echo'<a class="image qs" href="data:image;base64,'.base64_encode($row["name"]) .'">'; //mjesto nove slike 
echo '<img src="data:image;base64,'.base64_encode($row["name"]) .'"/>';
   echo'</a>';

}
?>
</a>
</div>  </div>

<div class="footer"><!--zaglavlje s navigacionim barom, informacijama o website-u i adminu-->

    <div class="box-container">

        <div class="box">
            <h3>povratak</h3>
            <a href="http://localhost/infiniteopolis/index.php#home">Početna stranica</a>
            <a href="http://localhost/infiniteopolis/index.php#onama">O nama</a>
            <a href="http://localhost/infiniteopolis/index.php#kursevi">Kursevi</a>
             <a href="http://localhost/infiniteopolis/index.php#tutorijali">Tutorijali</a>
            <a href="http://localhost/infiniteopolis/index.php#osoblje">Osoblje</a>
            <a href="http://localhost/infiniteopolis/kontakt/kontakt.html">Kontakt</a>
        </div>

        <div class="box">
            <h3>Kontakt informacije</h3>
            <p> <i class="fas fa-map-marker-alt"></i> Bosanska br.5 Bihać, BiH

 </p>
            <p> <i class="fas fa-envelope"></i> neki@email.com </p>
            <p> <i class="fas fa-phone"></i> 123-456-789 </p>
        </div>

    </div>

    <h1 class="credit">Designed by <a href="https://www.linkedin.com/in/sabina-muli%C4%87-56a360211">Sabina Mulić</a><br>Copyright Tehnički fakultet Bihać 2021 &copy;</h1><!--infomracije o vlasniku website-a-->

</div>


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script src="skripta.js"></script><!-- js skripta-->
    
</body>
</html>