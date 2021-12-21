<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sorting-Hat-Cédric</title>

        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="">
    </head>
    <body>
        <div>
            <div class="main-box">
                <h1 class="heading box-heading">
                    Sorting Hat
                </h1>

                <br>

                <!-- om erop te kunnen klikken moet je de classes in de href steken => niet gecentreerd-->

                <h2 id="Add-Person-Button" class="box button" >
                    <a href="assets/php/addPersonPage.php" >Add a person.</a>
                </h2>

                <br>
                
                <form action="assets/php/PutInHouse.php" method="POST" class="flex">
                    <button type="submit" class="box button" name="meegegevenId" value="1">
                        <h2>Put people in a house!</h2>
                    </form>
                </form>

                <!-- <h2 class="box button" id="Put-In-House-Button">
                    <a href="assets/php/PutInHouse.php" >Put people in a house!</a>
                </h2> -->

            </div>
        </div>

        




    </body>

    <!-- <script src="assets/js/script.js">
    </script> -->
</html>