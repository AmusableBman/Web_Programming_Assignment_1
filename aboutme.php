<!-- 
Name: Brandon Hewlett
Site: Portfolio - Brandon Hewlett
File: aboutme.php. A small bio that tells the user about myself. 
-->

<?php 
//Calls the header file
require_once 'header.html';
?>

<!--Call the correct JS function to highlight the right button -->
<script type="text/javascript">
    aboutMeActive();
</script>

<!--Import the appropriate image-->
<img src="images/aboutme.jpg" id="image" />

<!--Bigoraphy, placed in a p element-->
<p id="bio">
	What can I say about myself? Well, I can start by saying that I want to become a video game programmer. 
	Ever since I was a kid, I played video games. As I grew up, I figured that being able to make games 
	would be extremely rewarding. Video games, even today, are my primary hobby, and the game I'm currently 
	fiending is GTA V. I love working with computers, and I am most comfortable behind a keyboard.
</p>

<?php 
//Calls the footer file
require_once 'footer.html';
?>
