<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add-Person</title>

        <link href="../css/style.css" rel="stylesheet" type="text/css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="">
    </head>
    <body>
        <!-- ADD A PERSON -->
        <div id="Add-Person">
                <div class="main-box">
                    <h2 class="heading box heading center-text">
                        Create account.
                    </h2>
                    <div class="gegevens-box">
                        <form action="successfull.php" method="POST">
                            <label for="input-firstName">
                                <h3>First Name</h3>
                            </label>
                            <input type="text" id="input-firstName" name="firstName" required placeholder="Voornaam" oninvalid="alert('U moet een voornaam ingeven.')">
                            <br>
                            <br>
                            <label for="input-name">
                                <h3>Name</h3>
                            </label>
                            <input type="text" id="input-name" name="name" required placeholder="Naam" oninvalid="alert('U moet een naam ingeven.')">
                            <br>
                            <br>
                            <label for="input-gender">
                                <h3>Gender</h3>
                            </label>
                            <select id="input-gender" name="gender" required oninvalid="alert('U moet 1 van de gegeven genders ingeven.')">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="X">X</option>
                            </select>
                            <!-- <label for="input-gender">
                                <h3>Gender</h3>
                            </label>
                            <input type="text" id="input-gender" name="gender" required placeholder="Male/Female/X" oninvalid="alert('U moet 1 van de gegeven genders ingeven.')"> -->
                            <br>
                            <br>
                            <label for="input-description">
                                <h3>Tell something about yourself:</h3>
                            </label>
                            <input type="text" id="input-description" name="description" required placeholder="Dit moet je weten over mij!" oninvalid="alert('Vul aub de beschrijving in. Als je niet weet wat invullen, zeg dat je naar school gaat ofzo.')">
                            <br>

                            
                            <!-- <input type="radio" id="input-male" name="btn" checked require>
                            <label for="input-male">
                                Male
                            </label>
                            <br>
                            <input type="radio" id="input-female" name="btn" require>
                            <label for="input-female">
                                Female
                            </label>
                            <br>
                            <input type="radio" id="input-x" name="btn" require>
                            <label for="input-x">
                                X
                            </label>
                            <br> -->

                            <button type="submit" class="box button">
                                Add user
                            </button>
                        </form>
                    </div>





                

                    
                    <!-- <div>
                        <h2 class="box button" id="Create-Account-Button">
                            Create Account
                        </h2>
                    </div> -->
                    




                </div>
            </div>
            
    </body>
</html>


