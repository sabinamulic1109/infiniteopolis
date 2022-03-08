
<?php

    // ne prikazuj greske servera
    ini_set("display_errors", "off");

    // incijalizacija konekcije bazom podataka
    $conn = mysqli_connect("localhost", "root", "", "inf_baza");

    // odbij ako nema konekcije s bazom
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Nemoguce je povezati se s bazom.<h3>";
    }

    //uzimanje podataka za prikaz na webisite-u
    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn, $sql);

    //kreiranje nove obavijesti
    if(isset($_REQUEST['new_post'])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "INSERT INTO data(title, content) VALUES('$title', '$content')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: index.php?info=added");
        exit();
    }

    //dobijanje obavijesti preko id-a
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    //brisanje obavijesti
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM data WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: index.php");
        exit();
    }

    //promjena obavijesti
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE data SET title = '$title', content = '$content' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: index.php");
        exit();
    }

?>
