<?php

function getBiere(PDO $db): array
{
    $sql ="SELECT id_biere AS nom FROM biere";

    $query = $db->query($sql);
    return $results = $query->fetchAll();
}