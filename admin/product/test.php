<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/admin/include/function.php";

$manager = new Manager();
$product = new Product($manager->selectById(42));

echo $product->getName();
var_dump($manager->selectAll());
