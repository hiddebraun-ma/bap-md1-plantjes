<?php
require 'functions.php';
require 'model.php';
require 'controllers.php';


/**
 * Deze code werkend maken is de laatste stap in de opdracht, volg eerste alle andere stappen
 */


if ( ! isset( $_GET['page'] ) ) {
	header( 'Status: 404' );
	echo '404 Page Not Found';
	exit;
}

switch ( $_GET['page'] ) {
	case 'homepage':
		homepage();
		break;
	case 'alle-plantjes':
		alle_plantjes();
		break;
}