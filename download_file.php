<?php
	/**- custom php script for downloading files to fix Safari HTML5 refusal; written by FL -**/
	/**- get filename passed via .php? append; this will be link from download -**/
	$filename = $_REQUEST['filename'];
	
	header("Content-Length: " . filesize($filename));
	header('Content-Type: application/octet-stream');
	
	$fullfile = substr($filename, strrpos($filename, '/')+1);
	header('Content-Disposition: attachment; filename="'.$fullfile.'"');
	
	readfile($filename);
?>