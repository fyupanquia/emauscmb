<?php
/**
* 
*/
class File
{

	function __construct()
	{
	}
	static function link(){
		return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
	}
	static function render($path,$data){
		ob_start();   	 
	    if(is_array($data) ){
	        extract($data, EXTR_OVERWRITE);
	    }
	    include_once $_SERVER['DOCUMENT_ROOT']."/resources/".$path;
	    $contenido = ob_get_contents();
	    ob_get_clean();
	    return $contenido;
	}
	static function loadLabels($label,$files){
		$z = '';
		switch ($label) {
			case 'meta':
				foreach ($files as $key => $file){
					if(!is_numeric($key)){
							$z .=  '<!-- '. $key .' -->
									<meta name="'.$key.'" content="'.$file.'">';
					}else
						$z .=  '<meta name="'.$key.'" content="'.$file.'">';
				}
				break;
			case 'js':
				foreach ($files as $key => $file){

					if(!is_numeric($key)){
							$z .=  '<!-- '. $key .' -->
									<script type="text/javascript" src="'.JS_FOLDER.$file.'"></script>';
					}else
						$z .=  '<script type="text/javascript" src="'.JS_FOLDER.$file.'"></script>';

				}
				break;
			case 'css':
				foreach ($files as $key => $file){

					if(!is_numeric($key)){

							$z .=  '<!-- '. $key .' -->
									<link rel="stylesheet" href="'.CSS_FOLDER.$file.'">';
						
					}else
						$z .= '<link rel="stylesheet" href="'.CSS_FOLDER.$file.'">';
				}
				break;
			default:
				$z = '';
			break;
		}
		return $z;
	}
}