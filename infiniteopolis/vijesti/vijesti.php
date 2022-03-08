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


</head>
<body style="background-image: url(139.jpg);">
    <section> <h1 class="heading"><b>Vijesti</b></h1>    

    <div class="container mt-5">

        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
              
            <?php }?>
        <?php } ?>

    

        <!-- prikaz obavijesti iz baze podataka -->
        <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-black bg-white mt-5" style="width: 250px; height: 200px; border-color: mediumpurple;">
                        <div class="card-body">
                            <h5 class="card-title" style="text-transform: uppercase;"><?php echo $q['title'];?></h5>
                            <p class="card-text" style="text-transform: none; font-size: 1.2rem"><?php echo substr($q['content'], 0, 130);?>...</p>
                            <a href="pregledaj.php?id=<?php echo $q['id']?>" class="btn btn-light">Prikaži više <span class="text-danger"></span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
            
        <a href="http://localhost/infiniteopolis/index.php#home" class="btn btn-light my-3">Nazad na početnu</a>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</section>

</body>
</html>


