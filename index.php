<?php 

require_once("app/global.php");

$t 			  = new Template;
$t->title     = "Emaús Tablada";
$t->colour_a  = "#212c69";
$t->colour_b  = "#ffeb3b";

$html = $t->render();
echo $html;
exit();