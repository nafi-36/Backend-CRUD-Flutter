<?php

	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Credentials: true");
	header("Content-type:application/json;charset=utf-8"); 
	header("Access-Control-Allow-Methods: GET");

	include 'conn.php';
	$id=$_POST['id'];
	$connect->query("DELETE FROM tb_item WHERE id=".$id);

?>