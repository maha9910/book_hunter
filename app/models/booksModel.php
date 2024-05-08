<?php

namespace App\Models\BooksModel;

use \PDO;

function findAllPopulars(PDO $connexion): array
{
    $sql = "SELECT b.*, a.firstname, a.lastname, COUNT(b.isbn) AS isbn_count
            FROM books b
            INNER JOIN authors a ON b.author_id = a.id
            GROUP BY b.isbn
            ORDER BY b.notation DESC
            LIMIT 3;";

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
