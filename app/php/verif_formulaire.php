<?php
  $host = "mysql"; 
  $user = "root";  // "admin" pour Linux
  $bdd = "docker_database"; // le nom de votre base de données
  $passwd = "123456";  
  $co = mysqli_connect($host , $user , $passwd, $bdd) or die("erreur de connexion");
  
   
  $prenom=$_POST["prenom"];
  $nom=$_POST["nom"];
  $email=$_POST["email"];
  $mdp=$_POST["mdp"];

 

  if(!preg_match("#^[0-9][0-9][a-zA-Z]{6}$#",$mdp)){
    echo 'Erreur : le mot de passe est non valide (2 chiffres suivant 6 caractères)';
  }
  elseif(!preg_match("#^[a-zA-Z0-9]+@[a-z]+(\.)+[a-z]{2,3}#",$email)){
    echo 'Erreur : email non valide';
  }
  elseif(empty($prenom) && empty($nom) && empty($email) && empty($mdp)){
    echo 'Un des champs est vide';
  }
  else{
    $hash = password_hash($mdp, PASSWORD_DEFAULT);

    $sql = "INSERT INTO utilisateur (prenom,nom,email,passwrd) VALUES('$prenom','$nom','$email','$hash')";
    $co->query($sql);
    header('Location: formulaire.html');
    
  }
