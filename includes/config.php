<?php

//define global constants
define('SHARE_LIMIT',2000);
define('POINTS_PER_SHARE',10);
define('HOURLY_SHARE',1);
define('DAILY_SHARE',10);

//define server parameters
if($_SERVER['HTTP_HOST'] == '127.0.0.1' || $_SERVER['HTTP_HOST'] == 'localhost'){
	
	
	define("BASE_URL", "http://127.0.0.1/tecnochristmas");
	define('DATABASE_SERVER','localhost');
	define('DATABASE_USER','root');
	define('DATABASE_PASSWORD','');
	define('DATABASE_NAME','tecno_christmas');
	define('DBPREFIX','christmas_');
	
	define('CONNECTION_STRING', 'mysql:host=localhost;dbname=tecno_christmas');
}else{
	
	
	
}

//define email parameters
if($_SERVER['HTTP_HOST'] == '127.0.0.1' || $_SERVER['HTTP_HOST'] == 'localhost'){
	define('EMAIL_SERVER','smtp.gmail.com');
	define('EMAIL_SERVER_PORT','587');
	define('SMTP_USER_ACCOUNT','dev.gsoft@gmail.com');
	define('SMTP_USER_PASSWORD','qualityseal2');
	define('EMAIL_SEND_DEBUG_MODE','0');
	define('SMTP_AUTH', true);
	define('EMAIL_FROM_ADDRESS', 'kevin.kyalo@squaddigital.com');
	define('EMAIL_FROM_NAME', 'Tecno Mobile');
	define('EMAIL_REPLY_TO_ADDRESS', 'kevin.kyalo@squaddigital.com');
	define('EMAIL_REPLY_TO_NAME', 'Tecno Mobile');
	define('EMAIL_SUBJECT', 'Tecno Mobile Christmas');
	define('EMAIL_ALTERNATE_BODY_MESSAGE', 'If you are aunable to see this email, contact the administrator.');
}else{
	define('EMAIL_SERVER','localhost');
	define('EMAIL_FROM_ADDRESS', 'kevin.kyalo@squaddigital.com');
	define('EMAIL_FROM_NAME', 'Tecno Mobile');
	define('EMAIL_REPLY_TO_ADDRESS', 'kevin.kyalo@squaddigital.com');
	define('EMAIL_REPLY_TO_NAME', 'Tecno Mobile');
	define('EMAIL_SUBJECT', 'Tecno Mobile Christmas');
	define('EMAIL_ALTERNATE_BODY_MESSAGE', 'If you are aunable to see this email, contact the administrator.');
}

//facebook constants
define("FACEBOOK_URL", "http://squadlab.com/tecnochristmas");
define("FACEBOOK_CAPTION", "Decorate the Tecno Christmas tree & win!");
define("FACEBOOK_DESC", "I have just reduced the price of the Infinix Zero by N{sharevalue}. The more shares the lower the price.Pre-order yours today!");
define("FACEBOOK_PICTURE", BASE_URL."/images/logo-blue.png"); 

?>