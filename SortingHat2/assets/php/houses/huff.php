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

            insertQuery($conn, "CALL PutInHufflepuff($meegegevenId2);");

            $deStudent = getQuery($conn, "SELECT * FROM students WHERE student_id = $meegegevenId2;");

            $percentQ = insertQuery($conn, "CALL Percent($meegegevenId2,  @ravenclawos, @slytherinos, @gryffindoros, @hufflepuffos);");
            $selectQ = getQuery($conn, "SELECT @ravenclawos, @slytherinos, @gryffindoros, @hufflepuffos;");

            //header("Location: ../house.php");
        ?>
        <br>
        <div class="main-box">
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
                Ratings:
            </h2>
            <ul>
                <?php
                    foreach($selectQ as $y) {
                    $raven = $y["@ravenclawos"];
                    $slyth = $y["@slytherinos"];
                    $gryff = $y["@gryffindoros"];
                    $huff = $y["@hufflepuffos"];

                ?>
                <li>
                    <?php
                        echo "Ravenclaw: " . $raven . " %";
                    ?>
                </li>
                <li>
                    <?php
                        echo "Slytherin: " . $slyth . " %";
                    ?>
                </li>
                <li>
                    <?php
                        echo "Gryffindor: " . $gryff . " %";
                    ?>
                </li>
                <li>
                    <?php
                        echo "Hufflepuff: " . $huff . " %"; 
                    ?>
                </li>
                <?php
                    }
                ?>
            </ul>
            <?php
                $meegegevenId2++;
            ?>

            <form action="../PutInHouse.php" method="POST" class="button-Next">
                <button type="submit" class="box button" name="meegegevenId" value=<?php echo $meegegevenId2 ?>>
                    Next Person
                </button>
            </form>

        </div>


    </body>
</html>

