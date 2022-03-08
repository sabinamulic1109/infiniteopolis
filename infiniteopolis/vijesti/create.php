<?php

    include "logic.php"; //ukljucuje logic.php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="stil.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Dodavanje obavijesti</title>
</head>
<body style="background-image: url('139.jpg'); "><!--slika pozadine-->

   <div class="container mt-5" >
        <form method="POST">
          <p align="center">   <!--pasus centralno poravnanje-->
           <input type="text" placeholder="Naslov" class="form-control my-3 bg-white text-black text-center" name="title" style="text-transform: uppercase; border-color: mediumpurple; height: 40px; width: 800px; font-size: 2rem;"><!--unos naslova-->
          <textarea name="content" class="form-control my-3 bg-white text-black" cols="30" rows="10" style="text-transform:none; border-color: mediumpurple; height:400px; width: 800px; font-size: 2rem;"></textarea><!--unos teksta objave-->
            <button style="width: 600px; height: 40px; font-size: 2rem;" class="btn btn-primary btn-light btn-block" name="new_post">Objavi obavijest</button><br><!--submit dugme, sprema se u bazu-->
            <button type="reset" style="width: 200px; height: 40px; font-size: 2rem;" class="btn btn-primary btn-light btn-block" name="new_post">Poništi</button></p><!--reset dugme ponistava sve unesene vrijednosti-->
        </form>
   </div>

    <!-- linkovi za bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>