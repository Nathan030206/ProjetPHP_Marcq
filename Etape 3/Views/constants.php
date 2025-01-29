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
        <h1>Liste des écoles répertoriées</h1>
        
        <div class="flexible wrap space-around">
            <div class="border card">
                <h2 class="center">ITN</h2>
                <div>
                    <div class="flexible blocImageEcole"><img src="Images/itnIm.jpeg" alt="itn" /></div>
                    <div class="center">
                        <p><span>Rue de la pépinière 101</span> - <span>Namur</span></p>
                        <h3>081729011</h3>
                        <a href="voirEcole.php" class="btn btn-page">Voir l'école</a>
                    </div>
                </div>
            </div>
            <div class="border card">
                <h2 class="center">Collège Saint Servais</h2>
                <div>
                    <div class="flexible blocImageEcole"><img src="Images/collegeSSIm.jpeg" alt="image lorem picsum" /></div>
                    <div class="center">
                        <p><span>Chau de Waterloo 52</span> - <span>Namur</span></p>
                        <h3>0499689850</h3>
                        <a href="voirEcole.php" class="btn btn-page">Voir l'école</a>
                    </div>
                </div>
            </div>
            <div class="border card">
                <h2 class="center">Institut Saint Albert</h2>
                <div>
                    <div class="flexible blocImageEcole"><img src="Images/stAlbertIm.jpeg" alt="image lorem picsum" /></div>
                    <div class="center">
                        <p><span>Av Ferdinand Charlot 35</span> - <span>Jodoigne</span></p>
                        <h3>010811250</h3>
                        <a href="voirEcole.php" class="btn btn-page">Voir l'école</a>
                    </div>
                </div>
            </div>
            <div class="border card">
                <h2 class="center">Ecole de l'enfant Jésus</h2>
                <div>
                    <div class="flexible blocImageEcole"><img src="Images/enfantJesusIm.png" alt="image lorem picsum" /></div>
                    <div class="center">
                        <p><span>Rue de Sotriamont 1</span> - <span>Nivelles</span></p>
                        <h3>067893800</h3>
                        <a href="voirEcole.php" class="btn btn-page">Voir l'école</a>
                    </div>
                </div>
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