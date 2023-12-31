<?php
// Fonction insertion user avec le hashage de Mdp 
    function add_user($hashed_password){
        global $PDO;
        $req = "INSERT INTO utilisateur(nomuser, prenomuser, mdp) VALUES (:nom, :prenom, :mdp)";
        $stmt = $PDO->prepare($req);
        $stmt->bindParam(':nom', $_POST['nom']);
        $stmt->bindParam(':prenom', $_POST['prenom']);
        $stmt->bindParam(':mdp', $hashed_password);
        $stmt->execute();
    }
    //Fonction selet user pour la connexion 
    function check_user(){
        global $PDO;
        $req = "SELECT mdp FROM utilisateur WHERE nomuser=:nom AND prenomuser=:prenom";
        $stmt = $PDO->prepare($req);
        $stmt->bindParam(':nom', $_POST['nom']);
        $stmt->bindParam(':prenom', $_POST['prenom']);
        $stmt->execute();
        $data = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }
?>