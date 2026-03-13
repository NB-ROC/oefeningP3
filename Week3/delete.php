<?php

$personeelnummer = $_POST["personeelnummer"];


//variabel met een SQL query
$sql = ""; //vul hier de delete query

//preparestatement
$stmt = $conn->prepare($sql);

//binden van variabel
$stmt->bindParam(":personeelnummer", $personeelnummer );

//execute on db
$stmt->execute();
