
<?php
session_start();
$pageTitle = "Home";
ob_start();
?>


<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- =======================
Page Banner START -->
<section class="pt-5 pb-0" style="background-image:url(assets/images/element/map.svg); background-position: center left; background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-xl-6 text-center mx-auto">
				<!-- Title -->
				<h6 class="text-primary">Contact us</h6>
				<h1 class="mb-4">We're here to help!</h1>
			</div>
		</div>
		
		<!-- Contact info box -->
		<div class="row g-4 g-md-5 mt-0 mt-lg-3">
			<!-- Box item -->
			<div class="col-lg-4 mt-lg-0">
				<div class="card card-body bg-primary shadow py-5 text-center h-100">
					<!-- Title -->
					<h5 class="text-white mb-3">Customer Support</h5>
					<ul class="list-inline mb-0">
						<!-- Address -->
						<li class="list-item mb-3">
							<a href="#" class="text-white"> <i class="fas fa-fw fa-map-marker-alt me-2 mt-1"></i>Chicago HQ Estica Cop.  Macomb, MI 48042 </a>
						</li>
						<!-- Phone number -->
						<li class="list-item mb-3">
							<a href="#" class="text-white"> <i class="fas fa-fw fa-phone-alt me-2"></i>(423) 733-8222 </a>
						</li>
						<!-- Email id -->
						<li class="list-item mb-0">
							<a href="#" class="text-white"> <i class="far fa-fw fa-envelope me-2"></i>example@email.com </a>
						</li>
					</ul>
				</div>
			</div>

			<!-- Box item -->
			<div class="col-lg-4 mt-lg-0">
				<div class="card card-body shadow py-5 text-center h-100">
					<!-- Title -->
					<h5 class="mb-3">Contact Address</h5>
					<ul class="list-inline mb-0">
						<!-- Address -->
						<li class="list-item mb-3 h6 fw-light">
							<a href="#"> <i class="fas fa-fw fa-map-marker-alt me-2 mt-1"></i>2492 Centennial NW, Acworth, GA, 30102 </a>
						</li>
						<!-- Phone number -->
						<li class="list-item mb-3 h6 fw-light">
							<a href="#"> <i class="fas fa-fw fa-phone-alt me-2"></i>+896-789-546 </a>
						</li>
						<!-- Email id -->
						<li class="list-item mb-0 h6 fw-light">
							<a href="#"> <i class="far fa-fw fa-envelope me-2"></i>example@email.com </a>
						</li>
					</ul>
				</div>
			</div>

			<!-- Box item -->
			<div class="col-lg-4 mt-lg-0">
				<div class="card card-body shadow py-5 text-center h-100">
					<!-- Title -->
					<h5 class="mb-3">Main Office Address</h5>
					<ul class="list-inline mb-0">
						<!-- Address -->
						<li class="list-item mb-3 h6 fw-light">
							<a href="#"> <i class="fas fa-fw fa-map-marker-alt me-2 mt-1"></i>2002 Horton Ford Rd, Eidson, TN, 37731 </a>
						</li>
						<!-- Phone number -->
						<li class="list-item mb-3 h6 fw-light">
							<a href="#"> <i class="fas fa-fw fa-phone-alt me-2"></i>(678) 324-1251 </a>
						</li>
						<!-- Email id -->
						<li class="list-item mb-0 h6 fw-light">
							<a href="#"> <i class="far fa-fw fa-envelope me-2"></i>example@email.com </a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Image and contact form START -->
<section >
	<div class="container">
		<div class="row g-4 g-lg-0 align-items-center">

			<div class="col-md-6 align-items-center text-center">
				<!-- Image -->
				<img src="assets/images/element/contact.svg" class="h-400px" alt="">

				<!-- Social media button -->
				<div class="d-sm-flex align-items-center justify-content-center mt-2 mt-sm-4">
					<h5 class="mb-0">Follow us on:</h5> 
					<ul class="list-inline mb-0 ms-sm-2">
						<li class="list-inline-item"> <a class="fs-5 me-1 text-facebook" href="#"><i class="fab fa-fw fa-facebook-square"></i></a> </li>
						<li class="list-inline-item"> <a class="fs-5 me-1 text-instagram" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
						<li class="list-inline-item"> <a class="fs-5 me-1 text-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
						<li class="list-inline-item"> <a class="fs-5 me-1 text-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
						<li class="list-inline-item"> <a class="fs-5 me-1 text-dribbble" href="#"><i class="fas fa-fw fa-basketball-ball"></i></a> </li>
						<li class="list-inline-item"> <a class="fs-5 me-1 text-pinterest" href="#"><i class="fab fa-fw fa-pinterest"></i></a> </li>
					</ul>
				</div>
			</div>

			<!-- Contact form START -->
			<div class="col-md-6">
				<!-- Title -->
				<h2 class="mt-4 mt-md-0">Let's talk</h2>
				<p>To request a quote or want to meet up for coffee, contact us directly or fill out the form and we will get back to you promptly</p>
					
				<form>
					<!-- Name -->
					<div class="mb-4 bg-light-input">
						<label for="yourName" class="form-label">Your name *</label>
						<input type="text" class="form-control form-control-lg" id="yourName">
					</div>
					<!-- Email -->
					<div class="mb-4 bg-light-input">
						<label for="emailInput" class="form-label">Email address *</label>
						<input type="email" class="form-control form-control-lg" id="emailInput">
					</div>
					<!-- Message -->
					<div class="mb-4 bg-light-input">
						<label for="textareaBox" class="form-label">Message *</label>
						<textarea class="form-control" id="textareaBox" rows="4"></textarea>
					</div>
					<!-- Button -->
					<div class="d-grid">
						<button class="btn btn-lg btn-primary mb-0" type="button">Send Message</button>
					</div>	
				</form>
			</div>
			<!-- Contact form END -->
		</div>
	</div>
</section>
<!-- =======================
Image and contact form END -->

<!-- =======================
Map START -->
<section class="pt-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<iframe class="w-100 h-400px grayscale rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878428698!3d40.74076684379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sin!4v1586000412513!5m2!1sen!2sin" height="500" style="border:0;" aria-hidden="false" tabindex="0"></iframe>	
			</div>
		</div>
	</div>
</section>
<!-- =======================
Map END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->


<?php
$content = ob_get_clean();
include('layouts/website.php');
?>

