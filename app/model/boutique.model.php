<?php

function getBiere(PDO $db): array
{
    $sql ="SELECT * FROM biere";

    $query = $db->query($sql);
    return $results = $query->fetchAll();
}