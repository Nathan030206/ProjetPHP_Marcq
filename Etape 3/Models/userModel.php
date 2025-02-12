
<?php

function createUser($pdo)
{
    try {
        $query = 'insert into utilisateurs(nomUser, prenomUser, loginUser, passWordUser, emailUser, role) values (:nomUser, :prenomUser, :loginUser, :passWordUser, :emailUser, :role)';
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'nomUser' => $_POST["nom"],
            'prenomUser' => $_POST["prenom"],
            'loginUser' => $_POST["login"],
            'passWordUser' => $_POST["mot_de_passe"],
            'emailUser' => $_POST["email"],
            'role' => 'user'
            
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);   }
}

function connectUser($pdo)
{
    try {
        $query = 'select * from utilisateurs where loginUser = :loginUser and passWordUser = :passWordUser';
        $connectUser = $pdo->prepare($query);
        $connectUser->execute([
            'loginUser' => $_POST["login"],
            'passWordUser' => $_POST["mot_de_passe"]
        ]);
        $user = $connectUser->fetch();
        if (!$user){
            return false;
        }
        else{
            $_SESSION["user"] = $user;
            return true;
        }
    }catch (PDOException $e) {
        $message = $e ->getMessage();
        die($message);
    }
}

?>