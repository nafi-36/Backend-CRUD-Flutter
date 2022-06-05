<?php

	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Credentials: true");
	header("Content-type:application/json;charset=utf-8"); 
	header("Access-Control-Allow-Methods: GET");

	include 'conn.php';
	
	$itemcode = $_POST['itemcode'];
	$itemname = $_POST['itemname'];
	$price = $_POST['price'];
	$stock= $_POST['stock'];
	$itemimage = $_POST['itemimage'];
	
	$connect->query("INSERT INTO tb_item (item_code,item_name,price,stock,item_image) VALUES ('".$itemcode."','".$itemname."','".$price."','".$stock."','".$itemimage."')")

?>