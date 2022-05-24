<?php

if (isset($_SERVER['REQUEST_URI']) && substr(trim($_SERVER['REQUEST_URI']), 0, 3) === '/fr') {
define( 'WP_USE_THEMES', true );
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );
exit;
}

if (isset($_SERVER['REQUEST_URI']) && substr(trim($_SERVER['REQUEST_URI']), 0, 3) === '/en') {
define( 'WP_USE_THEMES', true );
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );
exit;
}

if (isset($_SERVER['REQUEST_URI']) && substr(trim($_SERVER['REQUEST_URI']), 0, 3) === '/de') {
define( 'WP_USE_THEMES', true );
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );
exit;
}

if (isset($_SERVER['REQUEST_URI']) && substr(trim($_SERVER['REQUEST_URI']), 0, 3) === '/it') {
define( 'WP_USE_THEMES', true );
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );
exit;
}

if (isset($_SERVER['REQUEST_URI']) && substr(trim($_SERVER['REQUEST_URI']), 0, 3) === '/pt') {
define( 'WP_USE_THEMES', true );
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );
exit;
}

if (isset($_SERVER['REQUEST_URI']) && substr(trim($_SERVER['REQUEST_URI']), 0, 3) === '/pt-pt') {
define( 'WP_USE_THEMES', true );
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );
exit;
}

if (isset($_SERVER['REQUEST_URI']) && substr(trim($_SERVER['REQUEST_URI']), 0, 3) === '/es') {
define( 'WP_USE_THEMES', true );
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );
exit;
}

if (isset($_SERVER['REQUEST_URI']) && substr(trim($_SERVER['REQUEST_URI']), 0, 3) === '/tr') {
define( 'WP_USE_THEMES', true );
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );
exit;
}

if (isset($_SERVER['REQUEST_URI']) && substr(trim($_SERVER['REQUEST_URI']), 0, 3) === '/wpml') {
define( 'WP_USE_THEMES', true );
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );
exit;
}

session_start();
if (isset($_GET['orig'])) $_SESSION['orig']=$_GET['orig'];

include("includes/functions.php");
//if (isset($_GET['etapes'])) unset($_SESSION['detapes']);
//include("includes/config.php");
// HTTPS
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}


//if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();

$page=$_GET['page'];
$page = substr($_SERVER['REQUEST_URI'], 1);
$addjs=array();


if ($page==""){
	header('HTTP/1.1 301 Moved Permanently');
    header('Location: https://www.multicredit.ch/fr');
    exit();
}

// Index?";
if (is_dir("pages/".$page)) $page.="/index";


// Le fichier existe, on le charge
if (is_file("pages/$page.php")){

	include("pages/$page.php");
}

// Sinon, on cherche via le redirect (par exemple /credit/pret-argent => /pret/pret-argent)
else {$page.=".php";include ("redirect.php");}


?>
