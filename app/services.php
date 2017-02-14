<?php 

require_once("global.php");

$arr    = [];

if( isset( $_REQUEST["method"] ) && isset($_REQUEST["service"]) ){
	$method  = $_REQUEST["method"];
	$service = ucfirst($_REQUEST["service"]);

	try {

		if( file_exists("controllers/".$service.".php") ){

			spl_autoload_register(function($service){
			    include("controllers/".$service.".php");
			});

			$obj 		= new $service();
			$iscallable = array($obj,$method);

			if(is_callable($iscallable)){
				$arr = $obj->$method();
			}else{
				$arr = ["message"=>"Undefined Method"];
			}

		}else{
			$arr = ["message"=>"Undefined Service"];
		}

	} catch (Exception $e) {
		$arr = ["message"=>"Undefined Service"];
	}
}


echo json_encode($arr);
exit();