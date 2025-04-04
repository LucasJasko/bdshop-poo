<?php
class Manager
{

  private $db;

  public function __construct()
  {
    $this->db = new PDO("mysql:host=localhost;dbname=bdshop;charset=utf8", "root", "");
  }

  public function selectById(int $id)
  {
    $stmt = $this->db->prepare("SELECT * FROM table_product WHERE product_id = :id");
    $stmt->execute([":id" => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectAll()
  {
    $stmt = $this->db->prepare("SELECT * FROM table_product");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectFIlter(array $filterArray)
  {
    // L'objectif de cette méthode sera de gérer toutes les demandes possible de traitement sur la requête SQL
  }
}
