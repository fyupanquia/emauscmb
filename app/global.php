<?php

 session_start();
 //error_reporting(E_ERROR);
 error_reporting(E_ALL ^ E_NOTICE);
 date_default_timezone_set('America/Lima');

 const CSS_FOLDER 		= "/css/";
 const JS_FOLDER  		= "/js/";
 const IMG_FOLDER 		= "/img/";

require_once( $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php" );

 spl_autoload_register(function($class){
    require_once($_SERVER['DOCUMENT_ROOT']."/app/controllers/".$class.".php");
});
