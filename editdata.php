<?php

	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Credentials: true");
	header("Content-type:application/json;charset=utf-8"); 
	header("Access-Control-Allow-Methods: GET");

	include 'conn.php';
	
	$id = $_POST['id'];
	$itemcode = $_POST['itemcode'];
	$itemname = $_POST['itemname'];
	$price = $_POST['price'];
	$stock= $_POST['stock'];
	$itemimage = $_POST['itemimage'];
	
	$connect->query("UPDATE tb_item SET item_code='".$itemcode."', item_name='".$itemname."', price='".$price."', stock='".$stock."', item_image='".$itemimage."' WHERE id=". $id);

?>