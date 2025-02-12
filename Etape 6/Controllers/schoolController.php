<?php

require_once "Models/schoolModel.php";

$uri = $_SERVER["REQUEST_URI"];

if($uri === "/mesEcoles"){
    $schools = selectMyschools($pdo);
    $title = "Mes écoles";
    $template = "Views/pageAccueil.php";
    require_once("Viewq/base.php");
}
elseif ($uri === "/createSchool"){

}

elseif ($uri === "/createSchool"){
    if (isset($_POST['btnEnvoi'])) {
        createSchool($pdo);
        $schoolId= $pdo->lastInsertId();
        for ($i = 0; $i < count($_POST["option"]); $i++){
            ajouterOptionEcole($pdo, $schoolId, $optionScolaireId);
        }
        header("location:/mesEcoles");
    }
    $option = selectAllOptions($pdo);
    $title = "Ajout d'une école";
    $template = "Views/Schools/editOrCreateSchool.php";
    require_once("Views/base.php");
}
?>