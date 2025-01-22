<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/base.css">
    <link rel="stylesheet" href="Css/animation.css">
    <link rel="stylesheet" href="Css/flex.css">
    <link rel="stylesheet" href="Css/form.css">
    <title>BB</title>
</head>
<body>
    <header>
        <ul class="flexible space-evenly">
            <!-- grand écran -->
            <li class="menu"><a href="index.php">Home</a></li>
            <li  class="menu"><a href="inscriptionOrEditProfil.php">Inscription</a></li>
            <li  class="menu"><a href="connexion.php">Connexion</a></li>
            <!-- petit écran -->
            <li class="imageMenu"><a href="index.php"><ion-icon size="large" name="home-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="inscriptionOrEditProfil.php"><ion-icon size="large" name="person-outline"></ion-icon></a></li>
            <li class="imageMenu"> <a href="connexion.php"><ion-icon size="large" name="enter-outline"></ion-icon></a></li>
        </ul>
    </header>
    <main>
        <h1>Voir l'école => Nom de l'école</h1>
            <img class="imageMilieu" src="Images/itnIm.jpeg" alt="Image de l'école">
        <div class="flexible wrap space-around">
            <div class="card border">
                <h2>Informations générales</h2>
                <p>Rue de la pépinière 101</p>
                <p><span>5000</span> - <span>NAMUR</span></p>               
            </div>
            <div class="card border"> 
                <h2>Téléphone</h2>
                <p>081/729011</p>
            </div>
            <div class="card border">
                <h2>Options de l'école</h2>
                <table>
                    <tr>
                        <td>Transition Technique</td>
                    </tr>
                    <tr>
                        <td>Qualification technique</td>
                    </tr>
                    <tr>
                        <td>Enseignement Professionnel</td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
    <footer>
        <div class="flexible space-between align-item-center">
            <div>
                <img class="imageIcon" src="Images/icon1.jpg" alt="image twitter">
                <img class="imageIcon" src="Images/icon2.jpg" alt="image facebook">
                <img class="imageIcon" src="Images/icon3.jpg" alt="image google">
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>