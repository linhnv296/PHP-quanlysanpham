<?php
include_once "../class/Product.php";
$idtr = $_GET['id'];

$we = new Product();
$we->delete($idtr);
header('Location: ../index.php');