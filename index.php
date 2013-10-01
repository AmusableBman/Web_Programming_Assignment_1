<!-- 
Name: Brandon Hewlett
Site: Portfolio - Brandon Hewlett
File: index.php. Home page. First thing user sees. Project slider, social media. 
-->
<?php 
require_once 'header.html';
?>
<!--Call the correct javascript function -->
<script type="text/javascript">
    homeActive();
</script>

<!--Welcome message -->
<div id="welcomeBox">
  <h1 id="welcome">
    Hello, fellow coders!
  </h1>
  
  <p id="welcomestatement">
    Welcome, one and all, to the site of Brandon Hewlett. I love what I do, I'm good at it, and I live for the 12-hour coding binge. My mission is simply to become a better developer of any and all types of code.
  </p>
</div>

<!-- 
Slider from http://codepen.io/AMKohn/pen/EKJHf
-->
<!--It technically posts all the images on the webpage at the same time, but the CSS controls which image shows, based on the radio buttons
Modified to remove next and previous arrows -->
<div id="slidergroup">
	<p id="sliderheader">Projects!</p>
	<ul class="slides">
		<input type="radio" name="radio-btn" id="img-1" checked />
		<li class="slide-container">
			<div class="slide">
				<img src="http://farm9.staticflickr.com/8072/8346734966_f9cd7d0941_z.jpg" />
			</div>
		</li>

		<input type="radio" name="radio-btn" id="img-2" />
		<li class="slide-container">
			<div class="slide">
			  <img src="http://farm9.staticflickr.com/8504/8365873811_d32571df3d_z.jpg" />
			</div>
		</li>

		<input type="radio" name="radio-btn" id="img-3" />
		<li class="slide-container">
			<div class="slide">
			  <img src="http://farm9.staticflickr.com/8068/8250438572_d1a5917072_z.jpg" />
			</div>
		</li>

		<input type="radio" name="radio-btn" id="img-4" />
		<li class="slide-container">
			<div class="slide">
			  <img src="http://farm9.staticflickr.com/8061/8237246833_54d8fa37f0_z.jpg" />
			</div>
		</li>

		<input type="radio" name="radio-btn" id="img-5" />
		<li class="slide-container">
			<div class="slide">
			  <img src="http://farm9.staticflickr.com/8055/8098750623_66292a35c0_z.jpg" />
			</div>
		</li>

		<input type="radio" name="radio-btn" id="img-6" />
		<li class="slide-container">
			<div class="slide">
			  <img src="http://farm9.staticflickr.com/8195/8098750703_797e102da2_z.jpg" />
			</div>
		</li>

		<li class="nav-dots">
		  <label for="img-1" class="nav-dot" id="img-dot-1"></label>
		  <label for="img-2" class="nav-dot" id="img-dot-2"></label>
		  <label for="img-3" class="nav-dot" id="img-dot-3"></label>
		  <label for="img-4" class="nav-dot" id="img-dot-4"></label>
		  <label for="img-5" class="nav-dot" id="img-dot-5"></label>
		  <label for="img-6" class="nav-dot" id="img-dot-6"></label>
		</li>
	</ul>
</div>

<!--Keep Connected Panel -->
<div id="keepconnected">
	<p>Keep Connected</p>
	<a href="https://www.facebook.com/brandon.hewlett.79">Facebook</a>
	<a href="https://twitter.com/AmusableBman">Twitter</a>
	<a href="https://github.com/AmusableBman">GitHub</a>
</div>
<?php 
//Get the footer
require_once 'footer.html';
?>
