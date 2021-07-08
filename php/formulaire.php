<?php 
try{
    $bdd = new PDO("mysql:host=localhost;dbname=realholiday","root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e){
    die ("Erreur" .$e->getMessage());
}

if(isset($_POST['enregistrer'])){
  if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['message'])){
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['message']))
{
// On enregistre les données fournies par l'utilisateur
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    $success = ' <div class="alert alert-success alert-dismissible fade show" role="alert" >
                    <p>Vos donées ont bien éte enregistrer</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    $error = '<div class="alert alert-danger alert-dismissible fade show" role="alert" ">
                    <p>Veuillez remplir le formulaire s\'il vous plait</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';


  // on prepare une requete pour envoyer les informations dans la base de donnees
    $req = $bdd->prepare('INSERT INTO membre(id_membre, nom, prenom, email, message) VALUES(NULL, :nom, :prenom, :email, :message)');
    
    if($nom AND $prenom AND $email AND $message = true){
                
      // on execute la requete
      $req->execute(array(
          'nom' => $nom,
          'prenom' => $prenom,
          'email' => $email,
          'message' => $message
      ));
  
      //on affiche ce message si les donnees ont ete envoyer
          echo $success;  
          }
          // sinon on affiche le message
          else{echo $error;}

}
  
  }
}
?>


    