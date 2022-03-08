<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="stil.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Obavijesti</title><!--stranica sa obavijestima koja je dostupna obicnim korisnicima-->
</head>
<body style="background-image: url('139.jpg'); ">

   <div class="container mt-5"><!--korisnik ima detaljniji pregled obavijesti-->

        <?php foreach($query as $q){?>
            <div class="p-5 border border-bottom rounded-lg text-black text-center" style="background:linear-gradient(90deg, #FFFFFB, #5B5F97); ">
                <h1><?php echo $q['title'];?></h1>

                <div class="d-flex mt-2 justify-content-center align-items-center">
                 
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                     
                    </form>
                </div>

            </div>
            <p style="text-align: justify; line-height: 2.3" class="mt-5 pl-3" ><mark style="font-size: 2rem; text-transform: none;"><?php echo $q['content'];?></mark></p>
        <?php } ?>    

         <a href="vijesti.php" class="btn btn-light my-3" style="font-size:2rem;">Ostale vijesti</a>
        <a href="http://localhost/infiniteopolis/index.php#home" class="btn btn-light my-3"  style="font-size:2rem;">Nazad na početnu</a>

   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>