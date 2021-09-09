<?php
  $host = "localhost"; // ou 127.0.0.1
  $user = "root";  // "admin" pour Linux
  $bdd = "BD_inscription"; // le nom de votre base de données
  $passwd = "";  // "admin" pour Linux
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
    $sql = "INSERT INTO user(prenom,nom,email,passwrd) VALUES('$prenom','$nom','$email','$mdp')";
    $co->query($sql);
    header('Location: formulaire.html');
  }
?>