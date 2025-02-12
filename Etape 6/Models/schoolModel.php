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

?>