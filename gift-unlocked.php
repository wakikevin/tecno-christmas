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
  	<img src="<?php echo convertToUri('images/banners/banner-100.jpg'); ?>" alt="Banner full tree" />
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
        	<div class="btn disabled">Share</div>
        </div>
      </li>
    </ul>
  </div>
  <!-- points-wrapper end -->
  <!-- main-content -->
  <div id="main-content">
    <div id="offer-form">
    	<div class="lockup">
        <img src="<?php echo convertToUri('images/lockup-blue.png'); ?>" alt="Lockup" />
      </div>
    	<h2>Today's gift has been unlocked!</h2>
      <p>Be among the first to submit your unique code for your chance to win.</p>
      <form action="#" method="post" >
      	<div class="contacts clearfloat">
        	<div class="form-input align-left">
          	<div class="error-wrapper">
            	<span class="help-block"></span>
            </div>
          	<input type="text" value="Name:" onFocus="this.value='';" onBlur="if(!this.value)this.value='Name:';" name="name" id="name" class="textbox" />
          </div>
          <div class="form-input align-right">
          	<div class="error-wrapper">
            	<span class="help-block"></span>
            </div>
          	<input type="text" value="Email:" onFocus="this.value='';" onBlur="if(!this.value)this.value='Email:';" name="email" id="email" 
            	class="textbox" />
          </div>
          <div class="form-input align-left">
          	<div class="error-wrapper">
            	<span class="help-block"></span>
            </div>
          	<input type="text" value="Mobile No:" onFocus="this.value='';" onBlur="if(!this.value)this.value='Mobile No:';" name="mobile" id="mobile" 
            	class="textbox" />
          </div>
          <div class="form-input align-right">
          	<div class="error-wrapper">
            	<span class="help-block"></span>
            </div>
          	<input type="text" value="Location:" onFocus="this.value='';" onBlur="if(!this.value)this.value='Location:';" name="location" id="location" 
            class="textbox" />
          </div>
        </div>
        <input type="submit" class="btn submit" value="Submit" />
      </form>
    </div>
  </div>
  <!-- main-content end -->
  <!-- footer -->
  <div id="footer">
  	<a href="terms.php" class="terms">Terms and conditions</a>
  </div>
  <!-- footer end -->
</div>

<div id="overlay">
	<div class="popup congrats">
  	<div class="content">
    	<a href="#" class="close">
      	<img src="<?php echo convertToUri('images/close.png'); ?>" alt="Close" />
      </a>
    	<div class="lockup">
        <img src="<?php echo convertToUri('images/lockup-blue.png'); ?>" alt="Lockup" />
      </div>
      <h2>Congratulations!</h2>
      <p>You are the <strong>8th</strong> person to submit the form. A coupon has been sent to your email for you to redeem your prize.</p>
			<a href="#" class="btn small done">Done</a>
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
      <p>You are the <strong>11th</strong> person to submit the form.</p>
			<a href="#" class="btn small done">Done</a>
    </div>
  </div>
</div>

<?php
 //include footer
 include('includes/footer.php');
 
 ?>
