<?php
include("../connect.php"); 
$voornaam = $_POST["voornaam"];
$personeelnummer = $_POST["personeelnummer"];

//variabel met een SQL query
$sql = "UPDATE personeel SET voornaam=:voornaam WHERE personeelnummer = :personeelnummer;";

//preparestatement
$stmt = $conn->prepare($sql);

//binden van variabel
$stmt->bindParam(":voornaam", $voornaam );
$stmt->bindParam(":personeelnummer", $personeelnummer );

//execute on db
$stmt->execute();
