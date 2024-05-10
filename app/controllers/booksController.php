<?php

namespace App\Controller\BooksController;

use \PDO;

function indexAction(PDO $connexion)
{
    include_once '../app/models/booksModel.php';
    $books = \App\Models\BooksModel\findAllPopulars($connexion);

    include_once '../app/models/tagsModel.php';
    $tags = \App\Models\TagsModel\findAllByBookId($connexion);

    global $content, $title;
    $title = "Catalogue";
    ob_start();
    include '../app/views/pages/books/_index.php';
    $content = ob_get_clean();
}
