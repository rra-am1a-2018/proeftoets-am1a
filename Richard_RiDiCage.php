<?php
    /*
    echo '
        git clone https://github.com/rra-am1a-2018/proeftoets-am1a.git
        Maak een nieuw bestand voornaam_gebruikersnaam.php
        Accepteren van de uitnodiging
        Maak in dit bestand een tabel aan.
        1. voornaam
        2. tussenvoegsel
        3. achternaam
        4. hobby
        5. avatar

        kijk welke user jij bent
        git config user.name

        zie alleen jouw eigen commits
        git log --online --author="Richard"

        git checkout -b tijdreis_richard

        git branch

        git push -u orgin tijdreis_richard
    ';
    */
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        body{
            background: rgb(20,20,20);
        }

    </style>
  </head>
  <body>
    <div class="container">
        <h1>Richard</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Voornaam</th>
                    <th scope="col">Tussenvoegsel</th>
                    <th scope="col">Achternaam</th>
                    <th scope="col">Hobby</th>
                    <th scope="col">Avatar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">Richard</th>
                    <td>van de</td>
                    <td>Kooij</td>
                    <td>Muziek maken</td>
                    <td><img src="https://ridis.nl/img/logo/RidisXL.svg" width="25px" /></td>
                </tr>
                <!--
                    <tr>
                        <th scope="row">310426</th>
                        <td>Richard</td>
                        <td>RiDiCage</td>
                        <td><img src="https://ridis.nl/img/logo/RidisXL.svg" width="40px" height="40px" /></td>
                        <td><a href="./Richard_RiDiCage.php">Richard_RiDiCage.php</a></td>
                        <th>∞</th>
                    </tr>
                -->
            </tbody>
        </table>
        <a class="btn btn-secondary" href="./index.php" role="button">Go back to Index</a>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
