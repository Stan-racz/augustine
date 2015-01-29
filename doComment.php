<?php

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
    //execution de la requet si condition ok
    if($cpt==3){
        $req="INSERT INTO commentaire (pseudo, texte, date_comm, note, ip) VALUES ('$nom_user', '$com','$_SERVER['REQUEST_TIME']', '$note_com', '$_SERVER['REMOTE_ADDR']', :id);";
