<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Put people in houses</title>

        <link href="../css/style.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="">
    </head>
    <?php
        include "../components/functions.php";

        $conn = makeConnectionWithDatabase();
    ?>
    <?php
        $meegegevenId2 = $_POST["meegegevenId"]; //geeft 1 
        //echo $meegegevenId2;
    ?>

    <?php
        // $gettFirstNameQ = "SELECT firstname FROM students WHERE student_id = $meegegevenId2;";
        // $gettNameQ = "SELECT name FROM students WHERE student_id = $meegegevenId2;";
        // $gettGenderQ = "SELECT gender FROM students WHERE student_id = $meegegevenId2;";
        // $gettDescriptionQ = "SELECT description FROM students WHERE student_id = $meegegevenId2;";

        // $setRavenclawQ = "UPDATE students SET "

        // $gettFirstName = getQuery($conn, $gettFirstNameQ);
        // $gettName = getQuery($conn, $gettNameQ);
        // $gettGender = getQuery($conn, $gettGenderQ);
        // $gettDescription = getQuery($conn, $gettDescriptionQ);

        //$students = getQuery($conn, "SELECT * FROM students;");
        
        $deStudent = getQuery($conn, "SELECT * FROM students WHERE student_id = $meegegevenId2;");
        $aantalStudenten = getQuery($conn, "SELECT Count(student_id) FROM students;");

        foreach($aantalStudenten as $j) {
            foreach($j as $l) {
                $aant = $l;
            }
        }
        //echo $aantalStudenten;
        
        if($meegegevenId2 > $aant) {
            ?>
            <div class="main-box">
                <h2>
                    You rated the last student, thank you for using the website.
                </h2>

                <form action="../../index.php" class="button-Next">
                    <button type="submit" class="box button">
                        Go back to HomePage ->
                    </button>
                </form>
            </div>
            <?php
                die();
        }   ?>
        
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

        
            <br>
            <img src="../img/sortinghat2.png" alt="foto van sortinghat" height="257px" width="250px" class="center">
            
            <form action="houses/raven.php" method="POST" class="button-Next">
                <button type="submit" class="box button" name="meegegevenId" value=<?php echo $meegegevenId2 ?>>
                    Ravenclaw
                </button>
            </form>
            
            <form action="houses/slyth.php" method="POST" class="button-Next">
                <button type="submit" class="box button" name="meegegevenId" value=<?php echo $meegegevenId2 ?>>
                    Slytherin
                </button>
            </form>

            <form action="houses/gryff.php" method="POST" class="button-Next">
                <button type="submit" class="box button" name="meegegevenId" value=<?php echo $meegegevenId2 ?>>
                    Gryffindor
                </button>
            </form>
            
            <form action="houses/huff.php" method="POST" class="button-Next">
                <button type="submit" class="box button" name="meegegevenId" value=<?php echo $meegegevenId2 ?>>
                    Hufflepuff
                </button>
            </form>

        </div>

        <?php
            closeConnection($conn);
        ?>

<!-- ?php
        $array = [];
        $studentNames= getQuery($conn, "SELECT firstname FROM students;");

        foreach ($studentNames as $studentName) {
            array_push($array, $studentName);
        }


        $arrAlles = [];
        foreach ($students as $c) {
            array_push($arrAlles, $c);
        }
        var_dump($arrAlles);

        //var_dump($array); //de var dump werkt
        $array2 = [];

        foreach ($array as $a) {
            //var_dump($a);
            foreach($a as $b) {
                //echo $b;
                array_push($array2, $b);
            }
        }
        -------------------------------------------------------------
        foreach ($array2 as $name) {
            echo $name . " ";
        }

        //var_dump($gettFirstName[0]);
                foreach ($gettFirstName as $boba) {
                    //echo $boba; //Geeft array
                    foreach ($boba as $bob) {
                        echo $bob;
                    }
                }

               
                echo (voorAlle($gettFirstName)); //geeft nog steeds array
            ?>
        ------------------------------------------------------------
        <h2>
                Keuze uit:
            </h2>
            <ul>
            ?php
                    foreach ($students as $student) {
                ?>
                    <li>
                        ?php
                            echo $student["student_id"] . " - " . $student["firstname"] . " - " . $student["name"] . " - " . $student["gender"] . " - " . $student["description"];
                        ?>
                    </li>
                ?php
                    }

                    //closeConnection($conn);
                ?>
            </ul>

    ?> 
-->

    </body>
</html>








