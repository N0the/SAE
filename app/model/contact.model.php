<?php

function insertNewContact (string $surname, string $name, string $mail, string $message, PDO $biere): bool
{
    $sql = "INSERT INTO biere (surname, name, mail, message) VALUES (:surnameContact, :nameContact, :mailContact, :messageContact)";
    $stmt = $biere->prepare($sql);
    $stmt->bindParam('surnameContact', $surname);
    $stmt->bindParam('nameContact', $name);
    $stmt->bindParam('mailContact', $mail);
    $stmt->bindParam('messageContact', $message);
    $stmt->execute();
    return $stmt->execute();
}