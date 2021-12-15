<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="">
</head>
<body>
    <h1 class="main-box center-text">
        Success!!!
    </h1>
</body>
</html>
<?php
    // get parameters
    $firstname = $_GET["firstName"];
    $name = $_GET["name"];
    $gender = $_GET["gender"];
    $description = $_GET["description"];
    $ravenclaw = 0;
    $slytherin = 0;
    $gryffindor = 0;
    $hufflepuff = 0;

    // get connection DB
    include "../components/functions.php";

    // connection maken
    $conn = makeConnectionWithDatabase();

    $procedureAddUser = "CALL AddUser ('$firstname', '$name', '$gender', '$description', 0, 0, 0, 0);
    ";
    insertQuery($conn, $procedureAddUser);

    //((werkt niet)) => insertQuery($conn, "INSERT INTO students (firstname, name, gender, description, ravenclaw, slytherin, gryffindor, hufflepuff) VALUES ('$firstname', '$name', '$gender', '$description', '$ravenclaw', '$slytherin', '$gryffindor', '$hufflepuff'");



    header("Location: http://localhost"); // redirect


    ?>
    <?php
    closeConnection($conn);

    /* CHECKEN OF HIJ AL BESTAAT, WERKT NIET
    
    $getSql = "SELECT * FROM students WHERE firstname LIKE '$firstname' AND despription LIKE '$description'";
    $people = getQuery($conn, $getSql);

    if (sizeof($people) > 0) {
        echo "Sorry maatje hij bestaat al";
    } else {
        insertQuery($conn, "INSERT INTO students (firstname, name, gender, description, ravenclaw, slytherin, gryffindor, hufflepuff) VALUES ('$firstname', '$name', '$gender', '$description', '$ravenclaw', '$slytherin', '$gryffindor', '$hufflepuff'");

        header("Location: http://localhost:8888"); // redirect

    }
*/



/*

    // check if song is existing
    $getSql = "select * from songs where artist like '$artist' and songname like '$songname'";
    $songs = getQuery($conn, $getSql);

    // insert query
    if (sizeof($songs) > 0) {
        echo "Sorry maatje hij bestaat al";
    } else {
        insertQuery($conn, "INSERT INTO songs (artist, songname) VALUES ('$artist', '$songname');");

        header("Location: http://localhost:8888"); // redirect
    }

    // connection closed
    $conn->close();

    */