<?php
	include_once("init.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM mainTable WHERE id=:id";

	$users = $connect->prepare($sql);

	$users->bindParam(":id", $id);

	$users->execute();

	header("Location: index.php");
?>