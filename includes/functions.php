<?php
//include config file
include('config.php');

//include database class
include('ORM.class.php');

//include mailer class
include('phpmailer/class.phpmailer.php');

//function to convert images to data uris
function convertToUri($image){


	// Read image path, convert to base64 encoding
	$imageData = base64_encode(file_get_contents($image));
	
	// Format the image SRC:  data:{mime};base64,{data};
	if(function_exists('mime_content_type')):
		$mime = mime_content_type($image);
	else:
		$mime = '';
	endif;
		
	$src = 'data: '.$mime.';base64,'.$imageData;


return $src;
	
}

function initializeDB(){
	
	ORM::configure(array(
    'connection_string' => CONNECTION_STRING,
    'username' => DATABASE_USER,
    'password' => DATABASE_PASSWORD
	));

}

function sendEmail(){
	

}

?>