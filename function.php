<?php

function start_session(){ //alusta_sessioon() in the example
    session_start();
}

function end_session(){ //lopeta_sessioon() in the example
    $_SESSION = array();
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time()-42000, '/');
    }
    session_destroy();
    $_SESSION['logged_in'] = false;
    show_i();
}

function show_i() {
    include('index.php');
  
}


function show_li() {
	include('lihtarvutamine.php');
    include('liht.php');
  
}

function show_la() {
    include('lahuste.php');
  
}

function show_s() {
	
    include('sooda.php');
  
}

function show_b() {
	
    include('bio.php');
  
}

function show_k() {
	
	include('kontakt.php');
}



function show_p() {

   
    //$input_user = '';
    //$input_password = '';

    if (!empty($_POST)) {

        if ($_POST['user'] == 'kasutaja' && $_POST['password'] == 'parool') {
            $_SESSION['logged_in'] = true;
            $_SESSION['show_login_message'] = true;
            header('Location: ?mode=p');
            exit(0);
        

    } else {
        
        include('index.php');
        
    }
} else {
	
include('pea.php');} }

?>
