<?php
//include header file
include('includes/header.php');

?>
<div id="wrapper">
	<!-- header -->
	<div id="header">
  	<a id="logo" href="about.php">
    	<img src="<?php echo convertToUri('images/logo-blue.png'); ?>" alt="Tecno Mobile" />
    </a>
  </div>
  <!-- header end -->
  <!-- banner -->
  <div id="banner">
  	<img src="<?php echo convertToUri('images/home-banner.jpg' ); ?>" alt="Banner" />
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
  </div>
  <!-- banner end -->
  <!-- main-content -->
  <div id="main-content">
    <h2>About The Tecno Christmas Gifts</h2>
    <p>Christmas is here, and we’re giving you the chance to win fantastic prizes. All you have to do is help us decorate our Christmas tree by sharing it with your friends and family. Once the tree is decorated we will unlock the gift of the day. Be the first to grab it and it’s yours!</p>
    
    <div id="steps-wrapper">
    	<h2 class="participate">How to Participate</h2>
      <ul class="steps clearfloat">
      	<li class="clearfloat">
        	<div class="screenshot">
          	<img src="<?php echo convertToUri('images/step1.png'); ?>" alt="Step 1" />
          </div>
          <div class="details">
            <h3>Step 1</h3>
            <p>Decorate our Christmas tree by sharing it with your friends</p>
          </div>
        </li>
        <li class="clearfloat">
        	<div class="screenshot">
          	<img src="<?php echo convertToUri('images/step2.png'); ?>" alt="Step 2" />
          </div>
          <div class="details">
            <h3>Step 2</h3>
            <p>The more you share, the more decorations start to appear</p>
          </div>
        </li>
        <li class="clearfloat">
        	<div class="screenshot">
          	<img src="<?php echo convertToUri('images/step3.png'); ?>" alt="Step 3" />
          </div>
          <div class="details">
            <h3>Step 3</h3>
            <p>Once the gift of the day is unlocked, be the first one to grab it and win!</p>
          </div>
        </li>
      </ul>
      <a href="gift-of-the-day.php" class="btn">Start</a>
    </div>
  </div>
  <!-- main-content end -->
  <!-- footer -->
  <div id="footer">
  	<a href="terms.php" class="terms">Terms and Conditions</a>
  </div>
  <!-- footer end -->
</div>
 <?php
 //include footer
 include('includes/footer.php');
 
 ?>