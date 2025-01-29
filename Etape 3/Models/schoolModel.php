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
?>