<?php
// On connecte notre fichier à notre base de données local ---------------------------------------------------------
require_once $_SERVER["DOCUMENT_ROOT"] . "/connect.php";

// PDO("où est la BDD,comment elle se connecte,quel langage","mot de passe")


// On donne la requête à laquelle on associe une vérification des informations avant envoie ------------------------

$stmt = $db->prepare("SELECT * FROM table_product");
// Ici on insère les valeurs utilisateur à récupérer à la palce de 42 par exemple.
$stmt->execute();
// On peut mentionner en paramètre de execute directement les valeurs à associer: ex: [":id" => 42]
// On peut aussi donner les infos en tableau, mais il faut respecter l'ordre d'affichage dans le premier paramètre de l'instanciation de PDO (et mentionner ? à la place de :id)

$recordset = $stmt->fetchAll();

$pwd = "lucasSecure99";

// CETTE PARTIE N'EST A EXECUTER QU'UNE SEULE FOIS
// $hash = password_hash($pwd, PASSWORD_DEFAULT);
// echo $hash;
// $stmt = $db->prepare("INSERT INTO table_admin ('admin_mail', 'admin_password') VALUES ('lucasjaskowiak@yahoo.fr', '$hash')");
// $stmt->execute()
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil client</title>
</head>

<body>
  <ul>
    <?php foreach ($recordset as $row) { ?>
      <li>
        <?= $row["product_name"] ?>
      </li>
    <?php } ?>
  </ul>

</body>