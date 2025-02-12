<?php if ($uri === "/mesEcoles") : ?>
    <h1>Vos écoles</h1>
<?php else : ?>
    <h1>Liste des écoles répertoriées</h1>
<?php endif ?>
<?php if (isset($_SESSION["user"])) : ?>
    <a href="createSchool">Ajouter une école</a>
<?php endif ?>
<h1>Liste des écoles répertoriées</h1>

<div class="flexible wrap space-around">
    <?php foreach ($schools as $school) : ?>
    <div class="border card">
        <h2 class="center"><?= $school->schoolNom ?></h2>
        <div>
            <div>
                <img src="<?= $school->schoolImage ?>" alt="photo de l'école">
            </div>
            <div class="center">
                <p><span><?=$school->schoolAdresse ?> - </span> <span><?= $school->schoolCodePostal . " " . $school->schoolVille ?></span></p>
                <h3><?=$school->schoolNumero ?></h3>
                <a href="voirEcole.php" class="btn btn-page">Voir l'école</a>
                <?php if ($uri === "/mesEcoles") : ?>
                    <p><a href="deleteEcole?schoolId=<?= $school->schoolId ?>">Supprimer l'école</a></p>
                    <p><a href="updateEcole?schoolId=<?= $school->schoolId ?>"></a>Modifier l'école</p>
                <?php endif ?>
            </div>
        </div>
    </div>
    <?php endforeach  ?>
</div>
