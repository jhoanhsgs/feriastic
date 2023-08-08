<?php

$sql_card = "SELECT * FROM tbl_card INNER JOIN tbl_imagenes on tbl_card.fk_imagen=tbl_imagenes.id";
$query_card = $pdo->prepare($sql_card);
$query_card->execute();
$card_datos = $query_card->fetchAll(PDO::FETCH_ASSOC);