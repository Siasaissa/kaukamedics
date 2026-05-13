<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Kauka</h6>
						<p>
							Kauka Medical Supplies delivers trusted medical equipment, hospital consumables, and healthcare solutions to clinics, hospitals, pharmacies, and institutions across Tanzania.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay updated with our latest products and healthcare news.</p>
						<?php if(session('newsletter_success')): ?>
							<div class="alert alert-success py-2"><?php echo e(session('newsletter_success')); ?></div>
						<?php endif; ?>
						<?php if($errors->has('email')): ?>
							<div class="alert alert-danger py-2"><?php echo e($errors->first('email')); ?></div>
						<?php endif; ?>
						<div class="" id="mc_embed_signup">
							<form action="<?php echo e(route('newsletter.subscribe')); ?>" method="POST" class="form-inline">
								<?php echo csrf_field(); ?>

								<div class="d-flex flex-row">

									<input class="form-control" name="email" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" value="<?php echo e(old('email')); ?>"
									 required type="email">


									<button type="submit" class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>

									<!-- <div class="col-lg-4 col-md-4">
													<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
												</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="mb-20">Our Services</h6>
						<ul class="list-unstyled">
							<li class="mb-2">Medical Equipment Supply</li>
							<li class="mb-2">Hospital Consumables</li>
							<li class="mb-2">Pharmaceutical Supplies</li>
							<li class="mb-2">Healthcare Logistics</li>
							<li class="mb-2">After-Sales Support</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Contact</h6>
						<p>Magomeni Kanisani, Dar es Salaam</p>
						<p><a href="tel:+255625726051">+255 625 726 051</a></p>
						<p><a href="mailto:info@kaukamedics.com">info@kaukamedics.com</a></p>
						<p>
							<a href="<?php echo e(auth()->check() ? route('dashboard') : route('login')); ?>">Admin</a>
						</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Kaukamedics

</p>
			</div>
		</div>
	</footer>
<?php /**PATH /Users/dope/Downloads/public_html-6/resources/views/layouts/footer.blade.php ENDPATH**/ ?>