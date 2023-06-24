
<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
    case '/login' :
        require __DIR__ . '/views/login.php';
        break;
    case '/signup' :
        require __DIR__ . '/views/signup.php';
        break;
    case '/result' :
        require __DIR__ . '/views/result.php';
        break;
    case '/course_offer' :
        require __DIR__ . '/views/course_offer.php';
        break;
    case '/course_reg' :
        require __DIR__ . '/views/course_reg.php';
        break;
    case '/course_approve' :
        require __DIR__ . '/views/course_approve.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

?>

