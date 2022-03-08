<?php 
session_start();

    include("connection.php"); //konekcija s bazom
    include("functions.php"); //definisane funkcije 

    $user_data = check_login($con); //ukoliko je ulogovan obicni korisnik njemu se otvara ova stranica

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>INFINITEOPOLIS</title> <!-- linkovi za koristenje jquery-a, css skripte, internet fontova-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

        <link rel="stylesheet" href="stil.css">

</head>
<body>
<header>
    <div id="menu" class="fas fa-bars"></div>
    <a href="#"><img  class="dimenzije" src="slike/138.jpg">

        <nav class="navbar"><!--navigacioni bar sa linkovima na sve sekcije i stranice-->
            <ul>
                <li><a href="#home">Početna stranica</li>
                <li><a href="#onama">O nama</li>
                <li><a href="#kursevi">Kursevi</li>
                <li><a href="vijesti/vijesti.php">Oglasna ploča</a></li>
                <li><a href="#tutorijali">Tutorijali</li>
                <li><a href="#osoblje">Stručno osoblje</li>
                <li><a href="upload/galerija.php">Galerija</li>
                <li><a href="kontakt/kontakt.html">Kontakt</li></ul></nav>
<a href="logout.php"><div id="login"class="fas fa-sign-out-alt" title="Odjava."  onclick ="return confirm('Da li ste sigurni da želite odjaviti sa stranice?');"></div></a><!--confirm prozor na pokusaj odjave-->
    
</header>


       <section class="home" id="home">
    
        <a href="#onama"><button class="btn">DOBRODOŠLI, <?php echo $user_data['user_name']; //username korisnika se uzima iz baze i ispisuje na pocetnu stranicu?>!</button></a>..................................................................................................................................................................................................

       <span><h1><i>“You must be the change you wish to see in the world.”</i></h1></span>..................................................................................................................................................................................................
        
    </section>

    <section class="about" id="onama">
        <div class="image">
            <img src="slike/onama.jpg" alt="INFINITEOPOLIS">
        </div>
        <div class="content"> <!-- kratki opis o tome cime se bavi website-->
        <h3><br>ŠTO PRUŽAMO</h3><br>
        <p class="t">Cilj našeg rada jeste poboljšanje mentalnog zdravlja i fokusiranje na unutarnje, a ne samo fizičke potrebe pojedinca. Na našoj stranici možete naći odgovore na sva pitanja koja niste možda imali hrabrosti postaviti nekom u svojoj okolini. Putem INFINITEOPOLIS website-a moći ćete kontaktirati neke od najboljih i najkvalificiranijih psihologa na našim prostorima. Pronaći ćete zanimljive kurseve u kojima ćete naučiti mnogo o temama koje vas zanimaju i tutorijale koji vas podučavaju korisnim vještinama kada se nađete u nezgodnim situacijama.</p>
        <p align="center">Računajte na beskrajnu podršku!</p>
        <p align="center"><i><b> VAŠ INFINITEOPOLIS TIM</b></i></p>
       <p align="center"> <a href="#kursevi"><button class="btn">SAZNAJTE VIŠE!</button></a></p></div><!--dugme koje vodi na sljedecu sekciju - kursevi-->


        
    </section>


<section class="course" id="kursevi">

<h1 class="heading">Ponuda kurseva</h1>    

<div class="box-container">

    <div class="box">
        <a href="slike/kurs1.pdf" download="kurs1.pdf"><img src="slike/kurs1.jpg" alt=""></a><!--svaki kurs ima download sekciju sa pdfom koji sadrzi detaljnije informacije o kursu-->
       <a href="slike/uplatnica.pdf" download="uplatnica.pdf">  <h3 class="price">€30</h3></a>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i><!--zvijezdice koje su kao ocjena kursa od 1 do 5-->
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="slike/kurs1.pdf" download="kurs1.pdf" class="title">platforma quality rights</a>
            <p>Mentalno zdravlje, ljudska prva i oporavak - pokretanje platforme "Quality Rights" Svjetske zdravstvene organizacije (SZO) za Bosnu i Hercegovinu. Pridružite se danas i budite dio promjene u društvu!
            </p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 45 min </h3>
                <h3> <i class="far fa-calendar-alt"></i> 05.-13.aug </h3>
                <h3> <i class="fas fa-book"></i> 25 lekcija </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <a href="slike/kurs2.pdf" download="kurs2.pdf"><img src="slike/kurs2.jpg" alt=""></a>
       <a href="slike/pozivnica.pdf" download="pozivnica.pdf">  <h3 class="price">FREE</h3></a>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="slike/kurs2.pdf" download="kurs2.pdf" class="title">
Jungovska psihologija</a>
            <p>Sticanje osnovnih znanja iz oblasti analitičke psihologije i psihoterapije, te kreativnih načina izražavanja. Omogućeno praktično iskustvo kroz razne iskustvene grupe.</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 90 min </h3><!--vrijeme trajanja kursa po jednom casu-->
                <h3> <i class="far fa-calendar-alt"></i> 01.- 02.sept</h3><!-- vrijeme trajanja kursa po datumu-->
                <h3> <i class="fas fa-book"></i> 15 lekcija </h3><!-- vrijeme trajanja kursa po broju lekcija-->
            </div>
        </div>
    </div>

    <div class="box">
       <a href="slike/kurs3.pdf" download="kurs3.pdf"> <img src="slike/kurs3.jpg" alt=""></a>
         <a href="slike/uplatnica.pdf" download="uplatnica.pdf"><h3 class="price">€50</h3></a><!--cijenja kursa, kada se klikne na nju skine se pozivnica-->
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="slike/kurs3.pdf" download="kurs3.pdf" class="title">Važnost mentalnog zdravlja
</a>
            <p>Osobe sa mentalnim poteškoćama u BiH i dalje su izložene predrasudama i stigmatizaciji zbog neznanja i nerazumijevanja okoline. Pomozite promijeniti trenutnu situaciju.</p><!--svaki kurs ima kratki opis o sebi-->
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 sata </h3>
                <h3> <i class="far fa-calendar-alt"></i> 21.-30.aug </h3>
                <h3> <i class="fas fa-book"></i> 17 lekcija </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <a href="slike/kurs4.pdf" download="slike/kurs4.pdf"><img src="slike/kurs4.jpg" alt=""></a>
       <a href="slike/pozivnica.pdf" download="pozivnica.pdf">  <h3 class="price">FREE</h3></a><!--free element ima opciju downloada pozivnice-->
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="slike/kurs4.pdf" download="kurs4.pdf" class="title">anksioznost kod mladih</a>
            <p>Socijalna anksioznost, praćena paničnim napadima prisutna je kod skoro svake mlade osobe u 21. vijeku. Kurs je podoban za sve koji žele znati više o temi anksioznosti.</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 1 sat </h3>
                <h3> <i class="far fa-calendar-alt"></i> 11.nov-01.dec</h3>
                <h3> <i class="fas fa-book"></i> 30 lekcija </h3>
            </div>
        </div>
    </div>

    <div class="box">
       <a href="slike/kurs5.pdf" download="kurs5.pdf"> <img src="slike/kurs5.jpg" alt=""></a>
       <a href="slike/pozivnica.pdf" download="pozivnica.pdf"> <h3 class="price">FREE</h3></a>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="slike/kurs5.pdf" download="kurs5.pdf" class="title">psihomotorika</a>
            <p>Psihomotorika tjelesne motorne aktivnosti pobuđene i kontrolirane psih. procesima. Psihomotorne sposobnosti su povezane s tjelesnim pokretima i motoričkim djelovanjem. </p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 sata </h3>
                <h3> <i class="far fa-calendar-alt"></i> 16.-18.okt</h3>
                <h3> <i class="fas fa-book"></i> 12 lekcija </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <a href="slike/kurs6.pdf" download="kurs6.pdf"><img src="slike/kurs6.jpg" alt=""></a>
        <a href="slike/uplatnica.pdf" download="uplatnica.pdf"> <h3 class="price">€25</h3></a>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <a href="slike/kurs6.pdf" download="kurs6.pdf" class="title">Roditeljstvo i rani razvoj</a>
            <p>Iskustva iz odnosa sa roditeljima imaju izuzetan značaj za dalji kognitivni, emocionalni i socijalni razvoj djeteta. Ovaj odnos jedan je od glavnih faktora za uspjeh.</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 90 min </h3>
                <h3> <i class="far fa-calendar-alt"></i> 10.-15.sept</h3>
                <h3> <i class="fas fa-book"></i> 16 lekcija </h3>
            </div>
        </div>
    </div>

</div>

</section>

    

<section id="tutorijali"><h1 class="heading">tutorijali</h1>
    <div class="tuts">
        <div class="videos">
            <video src="slike/galerija/disanje.mp4" ></video><!--videi su raspoređeni u zasebnu galeriju tako da se klikom na video-->
            <video src="slike/galerija/savjeti.mp4" ></video><!--on prikazuje, ali ima kontrole za play stop i volume-->
            <video src="slike/galerija/13trikova.mp4"></video>
            <video src="slike/galerija/razgovor.mp4" ></video>

        </div>
        <div class="main-video">
            <video src="slike/galerija/disanje.mp4" controls></video></div><!--ovo je glavni video koji je po defaultu prikazan-->
            
        </div>
</section>

<section id="osoblje">

<h1 class="heading">profesionalci u našem timu</h1><!--sekcija koja sadrzi slike, informacije i kontakt osoblja-->

<table><!--pocetak tabele-->
    <tr>
        <td class="informacije"><h1 class="ime">Ema Emison, <h2>PhD/PsyD</h2></h1><!--u prvoj koloni su poredana imena i titule-->
           
            </td>
        <td class="informacije"><h3 class="k">EKSPERIMENTALNA PSIHOLOGINJA, PROUČAVA REAKCIJE ČOVJEKA, U KONTROLIRANIM UVJETIMA, NA NAMJERNO INDUCIRANE PODRAŽAJE, BILO FIZIČKE, ILI SOCIJALNE, TE PSIHOMETRIJA – BAVI SE METODOLOGIJOM I STATISTIČKOM OSNOVOM MJERENJA PSIHIČKIH OSOBINA POJEDINCA I GRUPE, TE IZRADOM I VALIDACIJOM PSIHOLOGIJSKIH TESTOVA I UPITNIKA.<br></h3><b>
            <p class="no">
            Univerzitet u Maastrichtu, Odjel psihologije i neuropsihijatrije<br>
            E-mail: <a href="kontakt/kontakt.html" class="no">psiholog1@inf.com</a><br>
        Tel: +3876457903725</p></b>
    </td>
    <td><img src="slike/psiholozi/1.jpg" class="imgx"></td>
    </tr>
     <tr>
        <td class="informacije"><h1 class="ime">Roger Feelan, <h2>PhD/PsyD</h2></h1></td> <!--u drugoj koloni su navedene specifikacije psihologa-->
        <td class="informacije"><h3 class="k">SOCIJALNI PSIHOLOG, PROUČAVA PONAŠANJE LJUDI U GRUPAMA, ALI I ODNOS POJEDINCA I GRUPE. KLINIČKA PSIHOLOGIJA - BAVI SE DIJAGNOSTIKOM I TERAPIJOM PATOLOŠKIH OBLIKA PONAŠANJA I PSIHOLOGIJA RADA, GDJE PROUČAVA ODNOS POJEDINCA PREMA RADU, TE NASTOJI PRONAĆI NAČINE ŠTO BOLJEG PRILAGOĐAVANJA RADA ČOVJEKU.<br></h3><b>
            <p class="no">
            Chicago Univerzitet, Odjel socijalne i razvojne psihologije<br>
            E-mail: <a href="kontakt/kontakt.html" class="no">psiholog2@inf.com</a><br>
        Tel: +3876457903725</p></b>
        </td>
        <td><img src="slike/psiholozi/2.jpg" class="imgx"></td><!--u zadnjoj koloni su slike-->
    </tr>
     <tr><td class="informacije"><h1 class="ime">John Doe, <h2>PhD/PsyD</h2></h1></td>
        <td class="informacije"><h3 class="k">SPORTSKI PSIHOLOG, OPISUJE SOCIJALNE I EMOCIONALNE UVJETE S KOJIMA SE SUSREĆU SPORTAŠI (NAJČEŠĆE PROFESIONALNI) PRILIKOM OBAVLJANJA SVOJIH AKTIVNOSTI, TE POMAŽE U OPTIMIZACIJI ISTIH. ORGANIZACIJSKA PSIHOLOGIJA – ISTRAŽUJE PROCESE POVEZANE S PSIHIČKIM ŽIVOTOM U ORGANIZACIJAMA, TE PSIHOLOGIJA KOMUNIKACIJE – ISTRAŽIVANJE UTJECAJA VERBALNE, PARAVERBALNE I NEVERBALNE KOMUNIKACIJE NA PONAŠANJE POJEDINCA I GRUPE.<br></h3>
            <b>
            <p class="no">
            North Texas Univerzitet, Centar psihologije sporta<br>
            E-mail: <a href="kontakt/kontakt.html" class="no">psiholog3@inf.com</a><br>
        Tel: +3876457903725</p></b>
        </td>
        <td><img class="imgx" src="slike/psiholozi/3.jpg"></td>
    </tr>
     <tr><td class="informacije"><h1 class="ime">Amy Wines, <h2>PhD/PsyD</h2></h1></td>
        <td class="informacije"><h3 class="k">DJEČIJA PSIHOLOGINJA, RADI U POLJU RAZVOJNE PSIHOLOGIJE, OPISUJE UTJECAJ ODRASTANJA (FIZIČKOG I EMOCIONALNOG) I STARENJA NA PONAŠANJE. DJEČJA PSIHOLOGIJA – GRANA RAZVOJNE I KLINIČKE PSIHOLOGIJE USMJERENA NA RAZDOBLJE OD ROĐENJA DO KRAJA ADOLESCENCIJE, UZ DODATNI NAGLASAK NA DIJAGNOSTIKU I TRETMAN POTEŠKOĆA U RAZVOJU, TE PSIHOLOGIJA ODGOJA I OBRAZOVANJA – BAVI SE ŠKOLSKOM PROBLEMATIKOM I UTJECAJEM ODGOJNO-OBRAZOVNOG PROCESA NA PONAŠANJE UČENIKA.<br></h3>
             <b>
            <p class="no">
            California Univerzitet, LA, klinika za mentalno zdravlje djece<br>
            E-mail: <a href="kontakt/kontakt.html" class="no">psiholog4@inf.com</a><br><!--napisani email je brzi link za kontakt formu-->
        Tel: +3876457903725</p></b>
        </td>
        <td><img  class="imgx" src="slike/psiholozi/4.jpg"></td>
    </tr>
<tr><td></td>
    <td></td>
    <td>
<a href="kontakt/kontakt.html"><button class="btn" >kontaktirajte ih!</button></a></td></tr></table><!--dugme za kontak formu i kraj tabele-->

</section>
<div class="footer"><!--podnozje-->

    <div class="box-container">

        <div class="box">
            <h3>rasprostranjenost</h3><!--infomracije o rasprostranjenosti djelovanja-->
            <a href="#">BiH</a>
            <a href="#">Hrvatska</a>
            <a href="#">Srbija</a>
            <a href="#">Crna Gora</a>
        </div>

        <div class="box">
            <h3>Meni</h3>
            <a href="#home">Početak stranice</a><!--brzi linkovi za sekcije ili stranice-->
            <a href="#onama">O nama</a>
            <a href="#kursevi">Kursevi</a>
            <a href="#tutorijali">Tutorijali</a>
            <a href="upload/galerija.php">Galerija</a>
            <a href="kontakt/kontakt.html">Kontakt</a>

        </div>

        <div class="box">
            <h3>Kontakt informacije</h3> <!--kontakt informacije: adresa, email i broj telefona-->
            <p> <i class="fas fa-map-marker-alt"></i> Bosanska br.5 Bihać, BiH

 </p>
            <p> <i class="fas fa-envelope"></i> neki@email.com </p>
            <p> <i class="fas fa-phone"></i> 123-456-789 </p>
        </div>

    </div>

    <h1 class="credit">Designed by <a href="https://www.linkedin.com/in/sabina-muli%C4%87-56a360211">Sabina Mulić</a><br>Copyright Tehnički fakultet Bihać 2021 &copy;</h1><!--informacije o vlasniku stranice-->

</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script><!--ajax skripta-->
        <script src="skripta.js"></script><!--js skripta-->
</html>