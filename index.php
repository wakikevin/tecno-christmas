<?php
//include header file
include('includes/header.php');

?>
<audio id="bells" preload="auto" autoplay>
  <source src="audio/Sleigh-Bells.mp3"></source>
</audio>
<div id="wrapper">
	<div class="landing-bg">
  	<div class="logo">
    	<img src="<?php echo convertToUri('images/logo-white.png'); ?>" alt="Tecno Mobile" />
    </div>
    <div class="lockup">
    	<img src="<?php echo convertToUri('images/lockup-white.png'); ?>" alt="Lockup" />
    </div>
    <div class="text-wrapper">
    	<div class="title clearfloat">
      	<div class="line align-left"></div>
        <h1>Tecno Christmas Gifts</h1>
        <div class="line align-right"></div>
      </div>
      <h2>Decorate the Tecno Christmas tree &amp; win!</h2>
    </div>
    <a href="about.php" class="btn">Start</a>
  </div>
</div>

<?php
 //include footer
 include('includes/footer.php');
 
 ?>
