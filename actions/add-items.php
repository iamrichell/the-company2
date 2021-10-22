<?php
include "../classes/item.php";

$iname = $_POST["iname"];
$stock = $_POST["stock"];
$price = $_POST["price"];
$pic = $_FILES['photo']['name'];

$tmp_name = $_FILES['photo']['tmp_name'];

// $target_dir = "assets/images/";
// $$target_file = $target_dir .basename($pic)$temp;

$item = new Item;
// $item->itemAdd($iname,$stock,$price,$pic,$tmp_file);
$item->itemAdd($iname,$stock,$price,$pic,$tmp_name);
?>