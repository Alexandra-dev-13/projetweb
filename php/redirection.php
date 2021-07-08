<?php
require_once ('php/formulaire.php');
if($nom AND $prenom AND $email AND $contact AND $message = true){
                
    // on execute la requete
    $req->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'contact' => $contact,
        'message' => $message
    ));

    //on affiche ce message si les donnees ont ete envoyer
        echo $success;  
        }
        // sinon on affiche le message
        else{echo $error;}
        header('Location:php/redirection.php');

?>