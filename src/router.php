<?php 
//-----------------------------------------Functions to define method behavior---------------------------------//
function get($uri){
    
    $array = explode('?',$uri);
    $uri = $array[0];

    $headers = apache_request_headers();
    switch ($uri) {
        case '/':
        index();
        break; 
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
        case '/login':
        login();
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
    
    //$r = getQualcosa();
    $r = "ekkle";
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/qualcosa.php';
        visualizza($r);
    }else{
        echo $r;
    }

}

function postQualcosa(){
    var_dump($_POST);
    
    //Qui faccio qualcosa con il coso del post
    //Per esempio
    if (isset($_POST)) {
        //fai la sanitizzazione dei campi
        //poi chiami la funzione del model (object.php)
        aggiungiQuestionario($_POST);
    }
}


function login(){
    //Controlli sulla post
    doLogin($_POST);

}

function index(){
    echo "pagina principale";
}


?>