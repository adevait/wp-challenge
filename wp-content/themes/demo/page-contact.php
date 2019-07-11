<?php 
/*
*  Template name: Contact
*/
get_header();

?>
<section id="section-content" class="content-section main-background-section with-bg-image" style="background-image: url(/wp-content/themes/demo/images/home-header.png);"></section>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-5 contact-info-container">
			<div class="row">
				<div class="col-lg-7 offset-lg-4">
					<div class="contact-info">
						<h4>Contact Info</h4>
						<a href="tel:+1 917.888.8888">+1 917.888.8888</a>
						<a href="mailto:info@gradensavvy.com">info@gradensavvy.com</a>
					</div>
					<div class="contact-social-media">
						<ul class="info-menu">
					  <li class="inf-facebook">
						 <a href="#" target="_blank" rel="noopener">
						 <img src="https://gardensavvy.lumina-previews.com/wp-content/themes/lumina-andrey-child/assets/images/header-soc-fb.png">
						 </a>
					  </li>
					  <li class="inf-twitter">
						 <a href="#" target="_blank" rel="noopener">
						 <img src="https://gardensavvy.lumina-previews.com/wp-content/themes/lumina-andrey-child/assets/images/header-soc-twitter.png">
						 </a>
					  </li>
					  <li class="inf-instagram">
						 <a href="#" target="_blank" rel="noopener">
						 <img src="https://gardensavvy.lumina-previews.com/wp-content/themes/lumina-andrey-child/assets/images/header-soc-insta.png">
						 </a>
					  </li>
					  <li class="inf-pinterest">
						 <a href="#" target="_blank" rel="noopener">
						 <img src="https://gardensavvy.lumina-previews.com/wp-content/themes/lumina-andrey-child/assets/images/header-soc-pinterest.png">
						 </a>
					  
				   </ul>
					</div>
				</div>
				
			</div>
		</div>
		<div class="col-lg-7  form-container">
			<div class="row">
				<div class="col-lg-8 offset-lg-1">
					<h4 class="yellow">Drop us a Seed</h4>
					
					<form id="contact-form" method="POST">
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="fname" placeholder="First Name"/>
							</div>
							<div class="col-md-6">
								<input type="text" name="lname" placeholder="Last Name" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="email" placeholder="E-Mail" />
							</div>
							<div class="col-md-6">
								<input type="text" name="phone" placeholder="Phone" />
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<input type="text" name="subject" placeholder="Subject"/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<textarea name="message" placeholder="Subject"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<button>Submit</button>
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
get_footer();
?>