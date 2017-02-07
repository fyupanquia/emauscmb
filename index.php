<?php 
session_start();

 const CSS_FOLDER 		= "/css/";
 const JS_FOLDER  		= "/js/";
 const IMG_FOLDER 		= "/img/";




spl_autoload_register(function($class){
    require_once("app/controllers/".$class.".php");
});


$t = new Template;
$t->colour_a  = "#212c69";
$t->colour_b = "#ffeb3b";

$html = $t->render();
echo $html;
exit();