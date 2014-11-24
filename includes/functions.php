<?php

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

?>