<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/admin/include/connect.php";

$mdp = "motdepasse";
$hashpsw = password_hash($mdp, PASSWORD_DEFAULT);

$stmt = $db->prepare("INSERT INTO table_admin (admin_mail, admin_password) VALUES (:email, :pwd)");
$stmt->bindValue(":email", "lucasjaskowiak@yahoo.fr");
$stmt->bindValue(":pwd", $hashpsw);
$stmt->execute();



