<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link href="../../css/style.css" rel="stylesheet" type="text/css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="">
    </head>
    <body>
        <?php
            $meegegevenId2 = $_POST["meegegevenId"];
            //echo $meegegevenId2;
            include "../../components/functions.php";

            $conn = makeConnectionWithDatabase();

            insertQuery($conn, "CALL PutInRavenclaw($meegegevenId2);");

            $deStudent = getQuery($conn, "SELECT * FROM students WHERE student_id = $meegegevenId2;");

            $percentQ = insertQuery($conn, "CALL Percent($meegegevenId2,  @ravenclawos, @slytherinos, @gryffindoros, @hufflepuffos);");
            $selectQ = getQuery($conn, "SELECT @ravenclawos, @slytherinos, @gryffindoros, @hufflepuffos;");

            //header("Location: ../house.php");
        ?>
        <br>
        <div class="main-box">
        <div class="gegevens-box">
                <h2 class="underline">
                    Student:
                </h2>
                <?php
                    foreach($deStudent as $m) {
                    $voornaam = $m["firstname"];
                    $naam = $m["name"];
                    $geslacht = $m["gender"];
                    $beschrijving = $m["description"];
                    }
                ?>
                <h3>
                    <?php
                        echo "Firstname: " . $voornaam;
                    ?>
                </h3>
                <br>
                <h3>
                    <?php
                        echo "Lastname: " . $naam;
                    ?>
                </h3>
                <br>
                <h3>
                    <?php
                        echo "Gender: " . $geslacht;
                    ?>
                </h3>
                <br>
                <h3>
                    <?php
                        echo "Description: " . $beschrijving; 
                    ?>
                </h3>
                
                <br>
            
            </div>

            
            <?php
                foreach($selectQ as $y) {
                $raven = $y["@ravenclawos"];
                $slyth = $y["@slytherinos"];
                $gryff = $y["@gryffindoros"];
                $huff = $y["@hufflepuffos"];
                }
            ?>
            <div class="gegevens-box-raven">
                <h2 class="underline">
                    Ratings:
                </h2>
                <h3>
                    <?php
                        echo "Ravenclaw: " . $raven . " %";
                    ?>
                    <br>
                    <?php
                        echo "Slytherin: " . $slyth . " %";
                    ?>
                    <br>
                    <?php
                        echo "Gryffindor: " . $gryff . " %";
                    ?>
                    <br>
                    <?php
                        echo "Hufflepuff    : " . $huff . " %"; 
                    ?>
                </h3>
            </div>
            
            <?php
                $meegegevenId2++;
            ?>

            <form action="../PutInHouse.php" method="POST" class="button-Next center">
                <button type="submit" class="box button" name="meegegevenId" value=<?php echo $meegegevenId2 ?>>
                    Next Person
                </button>
            </form>

        </div>


    </body>
</html>

