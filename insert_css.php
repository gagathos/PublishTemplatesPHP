<?php 

$files = scandir('.');
//var_dump($files);

$css = file_get_contents("global.css");

foreach($files as $file){
	if (strpos($file, ".html") != false ){ 
		$contents = file_get_contents($file);
		file_put_contents('./Published/public_'.$file, str_replace("<<CSS>>", $css, $contents));
		print $file."\n";
		
	}
	
}

?>