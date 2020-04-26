<?php
    include_once("init.php");
    $id = $_GET['id'];
    $sql = "SELECT `adresa`, `vendbanimi_qytet` FROM `mainTable` WHERE `id` = :id";
    $statement = $connect->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute(); 
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    header("Location: https://www.google.com/maps/search/" . $row['adresa'] . ', ' . $row['vendbanimi_qytet']);

?>