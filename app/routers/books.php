<?php

use \App\Controller\BooksController;

include_once '../app/controllers/booksController.php';

switch ($_GET['books']):
    case 'index':
        BooksController\indexAction($connexion);

endswitch;
