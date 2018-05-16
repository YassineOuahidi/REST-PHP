<?php 
//-----------------------------------------Functions to define method behavior---------------------------------//
function get($uri){
    $headers = apache_request_headers();
    switch ($uri) {
        case '/':
        index();
        break
        case '/qualcosa':
        getQualcosa($headers);
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

function getQualcosa($headers){
    //risultato della query
    // require /model/object.php
    
    $r = getQualcosa();
    if($headers["Accept"].contains("html")){
        require __DIR__ . '/../view/qualcosa.php';
        visualizza($r);
    }else{
        echo $r;
    }

}

function postQualcosa(){
    var_dump($_POST);
    //Qui faccio qualcosa con il coso del post
    echo "<br/>ho fatto la post\n";
}


?>