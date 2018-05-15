<?php 
//-----------------------------------------Functions to define method behavior---------------------------------//
function get($uri){
    $headers = apache_request_headers();
    switch ($uri) {
        case '/qualcosa':
        getQualcosa();
        break;
        
        default:
        notFound();
        break;
    }
}

function post($uri){
    $headers = apache_request_headers();
    switch ($uri) {
        case '/qualcosa':
        postQualcosa();
        break;
        
        default:
        notFound();
        break;
    }
}

function notFound(){
    http_response_code(404);
    echo "404 Classico Not Found";
}

function badRequest(){
    http_response_code(400);
    echo "Method not implemented";
}

//-----------------------------------------Functions to get the work done---------------------------------//

function getQualcosa(){
    require __DIR__ . '/../view/qualcosa.php';
}

function postQualcosa(){
    var_dump($_POST);
    //Qui faccio qualcosa con il coso del post
    echo "<br/>ho fatto la post\n";
}


?>