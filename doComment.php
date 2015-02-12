<?php
    require_once('inc/bdd_conf.php');
    require_once('inc/fonctions.php');

    //récupération des données du commentaire
    $cpt=0;
    if(isset($_POST['com_user'])){
        $nom_user=$_POST['com_user'];
        $cpt++;
    }
    if(isset($_POST['com_note'])){
        $note_com=$_POST['com_note'];
        $cpt++;
    }
    if(isset($_POST['com'])){
        $com=$_POST['com'];
        $cpt++;
    }
    //execution de la requete si condition ok
    if($cpt==3){
        $id=$pdo->lastInsertId();
        $actu=getLastActualite();
        $req=$pdo->prepare("INSERT INTO `commentaire`(`id`, `pseudo`, `texte`, `note`, `ip`, `idActu`) VALUES (:id, :nom, :com, :note, :ip, :idactu)");
        $req->bindParam(':id', $id);
        $req->bindParam(':nom', $nom_user);
        $req->bindParam(':com', $com);
        $req->bindParam(':note', $note_com);
        $req->bindParam(':ip', $_SERVER['REMOTE_ADDR']);
        $req->bindParam(':idactu', $actu['id']);
        $req->execute();
        //Affichage de l'alerte commentaire bien enregistré
        print('<body onLoad="alert(\'Commentaire bien enregistre\')">');
        //Redirection vers la page d'actualité
        print('<meta http-equiv="refresh" content="0;URL=actualite.php">');
    }
?>
