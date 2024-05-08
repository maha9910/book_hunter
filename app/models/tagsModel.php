<?php

namespace App\Models\TagsModel;

use \PDO;

function findAllByBookId(PDO $connection): array
{
    $sql = "SELECT t.*
            FROM tags t
            INNER JOIN books_has_tags bht ON t.id = bht.tag_id
            INNER JOIN books b ON bht.book_isbn = b.isbn
            ORDER BY b.notation DESC
            LIMIT 2";

    return $connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
