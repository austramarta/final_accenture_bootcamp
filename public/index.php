<?php



require_once '../app/functions.php';


$page = $_GET['page'] ?? 'home'; //ja page eksistēs, atgriezīs page, ja nē, tad home

switch ($page) {
    case 'home':
        echo (new HomeController)->index();
        break;

    case 'posts':
        echo (new PostsController)->index();
        break;

    case 'post':
        echo (new PostsController)->viewPost();
        break;

    case 'about-us':
        echo (new InfoController)->aboutUs();
        break;

    case 'login':
        echo (new UsersController)->login();
        break;

    case 'registration':
        echo (new UsersController)->register();
        break;

    case 'users':
        echo (new UsersController)->index();
        break;

    case 'super-secret':
        echo (new SuperSecretController)->index();
        break;

    case 'log-out':
        echo (new UsersController)->logOut();
        break;

    default:
        echo (new ErrorsController)->error();
}
