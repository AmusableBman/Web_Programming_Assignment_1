<!-- 
Name: Brandon Hewlett
Site: Portfolio - Brandon Hewlett
File: contactme.php. Contact info for myself. Phone, email, social media 
-->
<?php
//Call the Header
require_once 'header.html';
?>

<!--Call the correct JS function to highlight the right button -->
<script type="text/javascript">
    contactMeActive();
</script>

<!--Contact me Header -->
<h1 id="contactmehead">
	Contact Me!
</h1>

<!--Contact info. Email, number, social media -->
<div id="contactinfo">
	705-999-9999 *FAKE NUMBER!*<br/>
	Fakeemail@fakesite.com *FAKE!*<br/>
	<a href="https://www.facebook.com/brandon.hewlett.79">Facebook</a><br/>
	<a href="https://twitter.com/AmusableBman">Twitter</a><br/>
	<a href="https://github.com/AmusableBman">GitHub</a><br/>
</div>

<?php 
//Call the footer
require_once 'footer.html';
?>
