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
  	<img src="<?php echo convertToUri('images/banners/banner-0.jpg'); ?>" alt="Banner empty tree" />
  </div>
  <!-- banner end -->
  
  <!-- points-wrapper -->
  <div id="points-wrapper">
  	<ul class="clearfloat">
    	<li class="target">
      	<div class="content">
      		<span class="title">Target</span>
          <span class="points">2,000 Pts</span>
        </div>
      </li>
      <li class="current-pts">
      	<div class="content">
          <span class="title">Current pts</span>
          <span class="points">2,000 Pts</span>	
        </div>
      </li>
      <li class="share">
      	<div class="content">
        	<a href="#" class="btn">Share</a>
        </div>
      </li>
    </ul>
  </div>
  <!-- points-wrapper end -->
  <!-- main-content -->
  <div id="main-content">
    
    <!-- gift-wrapper -->
    <div id="gift-wrapper">
    	<div class="gift-details">
      	<h2>The Phantom Z Mini</h2>
        <p>Today’s gift is the amazing Phantom Z Mini. Usher in the New Year with the season’s most wanted smart phone.</p>
      </div>
      <div class="gift-pic">
      	<img src="<?php echo convertToUri('images/gifts/phantom-z-mini.png'); ?>" alt="Phantom Z Mini" />
      </div>
    </div>
    <!-- gift-wrapper end -->  
  </div>
  <!-- main-content end -->
  <!-- footer -->
  <div id="footer">
  	<a href="terms.php" class="terms">Terms and conditions</a>
  </div>
  <!-- footer end -->
</div>

<div id="overlay">
	<div class="popup thanks">
  	<div class="content">
    	<a href="#" class="close">
      	<img src="<?php echo convertToUri('images/close.png'); ?>" alt="Close" />
      </a>
    	<div class="lockup">
        <img src="<?php echo convertToUri('images/lockup-blue.png'); ?>" alt="Lockup" />
      </div>
      <h2>Thank you for participating</h2>
      <p>A unique code has been sent to your email address. Use it to feel in the form when the deal has been unlcoked to redeem your prize</p>
			<a href="#" class="btn small done">Share Again</a>
    </div>
  </div>
  
  <div class="popup sorry">
  	<div class="content">
    	<a href="#" class="close">
      	<img src="<?php echo convertToUri('images/close.png'); ?>" alt="Close" />
      </a>
    	<div class="lockup">
        <img src="<?php echo convertToUri('images/lockup-blue.png'); ?>" alt="Lockup" />
      </div>
      <h2>Sorry try again tomorrow</h2>
      <p>You have reached the limit of shares for today. Only <strong>10</strong> are allowed per day.</p>
			<a href="#" class="btn small done">Done</a>
    </div>
  </div>
  
</div>

<?php
 //include footer
 include('includes/footer.php');
 
 ?>