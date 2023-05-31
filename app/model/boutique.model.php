<?php

function getBiere(PDO $db): array
{
    $sql ="SELECT * FROM biere";

    $query = $db->query($sql);
    return $results = $query->fetchAll();
}

function getTextBiere(PDO $db, string $valeur): array {
    $sql ="SELECT description_biere as descr, nom, prix FROM biere
    WHERE id_biere = :valeur";
    $stmt = $db->prepare($sql);
    $stmt->bindParam('valeur', $valeur, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
}