<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/admin/include/function.php";

$manager = new Manager();
$recordset = $manager->selectAll();

foreach ($recordset as $row) {
  $product = new Product($row);
  var_dump($product);
}
