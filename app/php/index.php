<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>DockerProject</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>


  <?php
  $host = "mysql"; 
  $user = "root";  // "admin" pour Linux
  $bdd = "docker_database"; // le nom de votre base de données
  $passwd = "123456";  
  $co = mysqli_connect($host, $user, $passwd, $bdd) or die("erreur de connexion");

  $sql = mysqli_query($co, "SELECT prenom,nom,email FROM utilisateur");
  ?>
  <table class="table table-dark">
    <tr>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col">Mail</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($sql)) {
      echo "<tr>
        <td>" . $row["prenom"] . "</td>
        <td>" . $row["nom"] . "</td>
        <td>" . $row["email"] . "</td>
        </tr>";
    }
    ?>

  </table>
  <div class="b1">
    <a href="formulaire.html"> <button type="button" class="btn btn-primary btn-lg">Formulaire</button> </a>
  </div>
</body>

</html>