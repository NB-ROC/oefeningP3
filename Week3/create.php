<?php

$voornaam = $_POST["voornaam"];


//variabel met een SQL query
$sql = "INSERT INTO `personeel`( `voornaam`, `achternaam`, `pasfoto`) VALUES (':voornaam','','')";

//preparestatement
$stmt = $conn->prepare($sql);

//binden van variabel
$stmt->bindParam(":voornaam", $voornaam );

//execute on db
$stmt->execute();
