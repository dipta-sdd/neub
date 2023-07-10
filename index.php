
<?php

$request = $_SERVER['REQUEST_URI'];
$requests= explode('-',$request);
switch ($requests[0]) {
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
        if(count($requests)==1){
            require __DIR__ . '/views/course_approve.php';
        } else {
            require __DIR__ . '/views/course_approve_std.php';
        }
        break;
    default:
        // if( strpos($request ,'/course_approve/student/')==0 ){
        //     echo strpos($request,'/course_approve/student/');
        //     require __DIR__ . '/views/course_approve.php';
        //     break;
        // }else {
            http_response_code(404);
        require __DIR__ . '/views/404.php';
        // }
        
        break;
}

?>

