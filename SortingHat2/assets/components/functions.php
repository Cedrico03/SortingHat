<?php

    function createSong($artist, $song) {
        $listItem = "<li>" . $artist . " - " . $song . "</li>";

        return $listItem; //geeft de waarde terug waar het wordt opgeroepen
    }

    function makeConnectionWithDatabase() {
        $hostname = "localhost"; // locatie van de sql server
        $dbUser = "cedric"; // username om in te loggen
        $dbPassword = "cedric"; // password om in te loggen
        $dbName = "database-sortinghat";
        $port = 3306; // 3306 - default

        $conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName, $port);

        // Checken of ik connectie heb met de DB
        if ($conn == false) {
            echo "ik kan de database niet bereiken";
            die();
        }

        // connectie terug geven
        return $conn;
    }

    function getQuery($conn, $query) {
        return mysqli_query($conn, $query)->fetch_all(MYSQLI_ASSOC);
    }

    function insertQuery($conn, $query) {
        mysqli_query($conn, $query);
    }

    function closeConnection($conn) {
        $conn->close();
    }                
?>