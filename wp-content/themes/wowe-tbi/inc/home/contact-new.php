<section class="section section-contact flex">
	<div id="headquarters-map" class="gmap"></div>
	<div class="contact">
		<h3>Our Location</h3>
		<address>
			<strong>Tony Barriere Interpreting</strong><br>
					3206 W Burbank Blvd<br>
					Burbank, CA 91505<br>
		</address>
							
		<address>
			<strong>Mailing Address</strong><br>
					P.O BOX 6979<br>
					Burbank, CA 91510<br>
		</address>
		<address>				
		<strong>Phone:</strong> (818) 563-6793<br>
		<strong>Fax:</strong> (818) 955-7756<br>
		<strong>Email:</strong> <a href="mailto:interpretingtb@gmail.com"> interpretingtb@gmail.com</a>
		</address>
	</div>
</section>

<section id="section-contact" class="section section-form container">
	<div class="contact-widget" data-alert-type="notify">
	<div class="contact-form-result"></div>
	<h2>CONTACT US</h2>
		<form id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">
		<div class="”form-process”"></div>
		<div class="form">	
		<div class="col_half">
			<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Name"/>
		</div>
		<div class="col_half col_last">
			<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Email Address"/>
		</div>
		<div class="col_one_third">
			<input type="phone" id="template-contactform-phone" name="template-contactform-phone" value="" class="required sm-form-control border-form-control" placeholder="Phone"/>
		</div>
		<div class="col_two_third col_last">
			<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control border-form-control" placeholder="Subject"/>
		</div>
		<div class="col_full">
			<textarea type="text" class="required sm-form-control border-form-control" id="template-contactform-message" name=" template-contactform-message" rows="7" cols="30" placeholder="Your Message"></textarea>
		</div>				
		<div class="col_full">
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<div class="g-recaptcha" data-sitekey="6LfDriUUAAAAAIw8Czpe730qVjzYNZwQVwav6_WF"></div>
		</div>
		<div class="col_full center">
			<button class="btn btn-border btn-circle" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
		<br>
			<small>We'll do our best to get back to you within 6-8 working hours.</small>
		</div>
		<div class="col_full hidden">
			<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control"/>
		</div>
		</div>
		</form>
	</div>
</section>