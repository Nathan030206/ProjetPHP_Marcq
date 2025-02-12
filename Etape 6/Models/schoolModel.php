<?php 
function  selectAllSchools($pdo){
    try {
        $query = 'select * from school';
        $selectSchool = $pdo->prepare($query);
        $selectSchool->execute();
        $schools = $selectSchool->fetchAll();
        return $schools;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function deleteOptionsSchoolFromUser($dbh) {
    try {
        $query = 'delete from option_ecole where schoolId in (select schoolId from school where utilisateurId = ; utilisateurId)';
        $deleteAllSchoolsFromId = $dbh->prepare($query);
        $deleteAllSchoolsFromId->execute([
            'utilisateruId' => $_SESSION["user"]->id
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function deleteAllSchoolsFromUser($pdo){
    try
    {
        $query =  'delete from school where utilisateurId = :utilisateurId';
        $deleteAllSchoolsFromId = $pdo->prepare($query);
        $deleteAllSchoolsFromId->execute([
            'utilisateurId' => $_SESSION["user"]->id
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function DeleteUser($pdo)
{ 
    try{
        $query = 'delete from utilisateurs where id = :id';
        $delUser = $pdo->prepare($query);
        $delUser->execute([
            'id' => $_SESSION["user"]->id
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }

}

function selectMySchools($pdo)
{
    try {
        $query = 'select * from school where utilisateurId = :utilisateurId';
        $selectSchool = $pdo->prepare($query);
        $selectSchool->executte([
            'utilisateurId' =>  $_SESSION["user"]->id
        ]);
        $schools = $selectSchool->fetchAll();
        return $schools;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectAllOptions($pdo)
{
    try{
        $query ='SELECT * FROM optionscolaire';
        $selectOptions = $pdo->prepare($query);
        $selectOptions->fetchAll();
        $options = $selectOptions->fetchAll();
        return $options;
    } catch (PDOException $e)
    {
        $message = $e->getMessage();
        die($message);
    }
}

function createSchool($pdo)
{
    try 
    {
        $query = 'insert into school (schoolNom, schoolAdresse, schoolVille, schoolCodePostal, schoolNumero, schoolImage, utilisateurId)
        values (:schoolNom, :schoolAdresse, :schoolVille, :schoolCodePostal, :schoolNumero, :schoolImage, :utilisateurId)';
        $addSchool = $pdo->prepare($query);
        $addSchool->execute([
            'schoolNom' => $_POST["nom"],
            'schoolAdresse' =>$_POST["adresse"],
            'schoolVille' =>$_POST["ville"],
            'schoolCodePostal' =>$_POST["code_postal"],
            'schoolNumero' =>$_POST["numero_telephone"],
            'schoolImage' =>$_POST["image"],
            'utilisateurId' => $_SESSION["user"]->id
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function ajouterOptionEcole($pdo,$schoolId,$optionId)
{
    try {
        $query='insert into option_ecole (schoolId, optionScolaireId) values (:schoolId, :optionScolaireId)';
        $deleteAllSchoolsFromId = $pdo->prepare($query);
        $deleteAllSchoolsFromId->execute ([
            'schoolId' => $schoolId,
            'optionScolaireId' => $optionId
        ]);
    } catch (\PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

?>