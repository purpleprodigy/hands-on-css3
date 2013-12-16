<!-- Contact Form -->
<?php 

	// Function for email address validation
	function isEmail($verify_email) {
	
		return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$verify_email));
	
	}
	
	$error_name = false;
	$error_email = false;
	$error_comments = false;

	if (isset($_POST['contact-submit'])) {
		// Initialize the variables
		$name = '';
		$email = '';
		$comments = '';

		
		// Get the name
		if (trim($_POST['contact-name']) === '') {
			$error_name = true;
		} else {
			$name = trim($_POST['contact-name']);
		}
		
		// Get the email
		if (trim($_POST['contact-email']) === '' || !isEmail($_POST['contact-email'])) {
			$error_email = true;
		} else {
			$email = trim($_POST['contact-email']);
		}

		
		// Get the project comments
		if (trim($_POST['contact-comments']) === '') {
			$error_comments = true;
		} else {
			$comments = stripslashes(trim($_POST['contact-comments']));
		}

		
		// Check if we have errors
		if (!$error_name && !$error_email && !$error_phone && !$error_prj_type && !$error_comments && !$error_budget) {
			// Get the receiver email from the WP admin panel
			$receiver_email = get_option('admin_email');

			$subject = "Submission from $name";
			$body = "You have a submission from $name." . PHP_EOL . PHP_EOL;
			$body .= "Comments: $comments" . PHP_EOL . PHP_EOL;
			$body .= "You can contact $name via email at $email.";
			$body .= PHP_EOL . PHP_EOL;
			
			$headers = "From: $email" . PHP_EOL;
			$headers .= "Reply-To: $email" . PHP_EOL;
			$headers .= "MIME-Version: 1.0" . PHP_EOL;
			$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
			$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

			// If all is good, we send the email
			if (mail($receiver_email, $subject, $body, $headers)) {
				$email_sent = true;
			} else {
				$email_sent_error = true;
			}
		}
	}
	
?>

<!-- CONTENT AREA -->


<div class="row row-padding bg-color5">
  <div class="container">
    <h2 id="contact"> <span class="color14">Contact</span> <span class="color13">us</span> </h2>
    <?php if (isset($email_sent) && $email_sent == true) : ?>
    <p>
      You have successfully submitted a comment. We'll get back to you as soon as possible.
    </p>
    <?php elseif (isset($email_sent_error) && $email_sent_error == true) : ?>
    <p>
      Unfortunately, there was an error while trying to submit this form. Please try again.
    </p>
    <?php else : ?>
    <p class="intro">
      Lorem ipsum dolor sit amet consect etuer adipi scing elit sed diam nonummy nibh euismod tinunt ut laoreet dolore magna erat volut ad nonmida.
    </p>
    <form action="" method="POST" class="bfc form-contact" novalidate>
      <div 
					<?php if ($error_name) { 
					echo 'class="bfc mb error"';
					 } else { 
					 echo 'class="bfc mb"';
					 } ?>>
        <label class="label" for="contact-name">Name:</label>
        <input class="input" type="text" name="contact-name" id="contact-name" value="<?php if (isset($_POST['contact-name'])) echo $_POST['contact-name']; ?>" />
      </div>
      <div 
					<?php if ($error_email) { 
					echo 'class="bfc mb error"';
					 } else { 
					 echo 'class="bfc mb"';
					 } ?>>
        <label class="label" for="contact-email">Email:</label>
        <input class="input" type="email" name="contact-email" id="contact-email" value="<?php if (isset($_POST['contact-email'])) echo $_POST['contact-email']; ?>" />
      </div>
      <div 
					<?php if ($error_comments) { 
					echo 'class="bfc mb error"';
					 } else { 
					 echo 'class="bfc mb"';
					 } ?>>
        <label class="label" for="contact-comments">Comment:</label>
        <textarea class="textarea" name="contact-comments" id="contact-comments" cols="30" rows="10"><?php if (isset($_POST['contact-comments'])) echo $_POST['contact-comments']; ?>
</textarea>
      </div>
      <div class="bfc mb indent">
        <input type="hidden" id="contact-submit" name="contact-submit" value="true" />
        <input type="submit" class="btn-green" value="Submit" />
      </div>

    </form>
    <?php endif; ?>
    <div>
      <a href="#" class="btn-light font14">Back to top</a>
    </div>
  </div>
</div>
<!-- footer -->
<div class="row row-padding-small bg-color2">
  <div class="container">
    <div class="mb">
      <img class="mr-h" src="<?php echo IMAGES; ?>/icon-facebook.png" alt="Facebook"> <img src="<?php echo IMAGES; ?>/icon-twitter.png" alt="Twitter">
    </div>
    <?php wp_nav_menu( array(
					'menu' => 'footer', 
					'items_wrap' => '<ul class="list-inline list-footer font14">%3$s&copy; Copyright Max Design '.date("Y").'</ul>'
					)); ?>
  </div>
</div>
	<?php wp_footer(); ?>
</body>
</html>