<?php

require_once('function.php');

start_session();


$mode = 'i';
$mainContentView = 'index.php';
if (isset($_GET['mode'])) {
    $mode = $_GET['mode'];
    switch($mode) {
        case 'p':
            show_p();
            break;
        case 's':
            show_s();
            break;
        case 'b':
            show_b();
            break;
        case 'li':
            show_li();
            break;
        case 'la':
            show_la();
            break;
		case 'k':
            show_k();
			include('navigation.php');
            break;
        case 'l';
            end_session();
            show_l();
        default:
            show_p();
    }
} else {
    show_p();
}

?>