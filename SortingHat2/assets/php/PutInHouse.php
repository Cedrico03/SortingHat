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
        $aantalStudenten = getQuery($conn, "SELECT Count(student_id) FROM students;");
 
       
    ?>

    <body>
        <div class="main-box">
            <h1 class="heading box-heading">
                Put students in a house...
            </h1>
            <br>
            <h2 id="name">

            </h2>
            <br>
            <img src="../img/sortinghat2.png" alt="foto van sortinghat" height="257px" width="250px" class="center">
            


        

        </div>

        <?php
            closeConnection($conn);
        ?>
    </body>
</html>








