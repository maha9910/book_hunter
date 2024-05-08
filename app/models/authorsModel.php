<?php

namespace App\Models\AuthorsModel;

use \PDO;

function findAllPopulars(PDO $connexion): array
{
    $sql = "SELECT a.*, COUNT(b.author_id) AS book_count 
    FROM authors a
    INNER JOIN books b ON a.id = b.author_id 
    GROUP BY a.id
    ORDER BY book_count DESC 
    LIMIT 3;";

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
