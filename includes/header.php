<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>Tecno Christmas Gifts</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.snow.min.1.0.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/submit.js"></script>
</head>
<body>
<?php

//include functions file
include('includes/functions.php');

?>

<!--include the facebook sdk-->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '601320383329072',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
