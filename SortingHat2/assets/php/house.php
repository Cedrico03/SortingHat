<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>House</title>
        <link href="../css/style.css" rel="stylesheet" type="text/css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="">
    </head>

    <?php
            // get connection DB
            include "../components/functions.php";
            
            //include "voorHouse.php";

            // connection maken
            $conn = makeConnectionWithDatabase();
            $meegegevenId2 = $_POST["meegegevenId"];

            $deStudent = getQuery($conn, "SELECT * FROM students WHERE student_id = $meegegevenId2;");


        ?>
    <body>
        <div class="main-box">
            <h1 class="heading box-heading">
                Put students in a house...
            </h1>
            <br>
            <h2>
                Student:
            </h2>
            <ul>
                <?php
                    foreach($deStudent as $m) {
                    $voornaam = $m["firstname"];
                    $naam = $m["name"];
                    $geslacht = $m["gender"];
                    $beschrijving = $m["description"];

                ?>
                <li>
                    <?php
                        echo "Firstname: " . $voornaam;
                    ?>
                </li>
                <li>
                    <?php
                        echo "Lastname: " . $naam;
                    ?>
                </li>
                <li>
                    <?php
                        echo "Gender: " . $geslacht;
                    ?>
                </li>
                <li>
                    <?php
                        echo "Description: " . $beschrijving; 
                    ?>
                </li>
                <?php
                    }
                ?>
            </ul>

            <h2>
                Student:
            </h2>
            <ul>
                <?php
                    foreach($deStudent as $n) {
                    $ravenclawScore = $n["firstname"];
                    $slytherinScore = $n["name"];
                    $gryffindorScore = $n["gender"];
                    $hufflepuffScore = $n["description"];

                ?>
                <li>
                    <?php
                        echo "Firstname: " . $voornaam;
                    ?>
                </li>
                <li>
                    <?php
                        echo "Lastname: " . $naam;
                    ?>
                </li>
                <li>
                    <?php
                        echo "Gender: " . $geslacht;
                    ?>
                </li>
                <li>
                    <?php
                        echo "Description: " . $beschrijving; 
                    ?>
                </li>
                <?php
                    }
                ?>
            </ul>

        
            <br>
            <img src="../img/sortinghat2.png" alt="foto van sortinghat" height="257px" width="250px" class="center">
            
            <form action="house.php" method="POST" class="button-Next">
                <button type="submit" class="box button">
                    Next Student
                </button>
            </form>
            

        </div>

    </body>
</html>

<?php
    closeConnection($conn);

?>



<?php

    






    //header("Location: http://localhost"); // redirect



    // get parameters (fout)
    // $firstname = $_GET["firstName"];
    // $name = $_GET["name"];
    // $gender = $_GET["gender"];
    // $description = $_GET["description"];
    // $ravenclaw = 0;
    // $slytherin = 0;
    // $gryffindor = 0;
    // $hufflepuff = 0;
?>

