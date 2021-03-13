
	</div>
</section>
<!-- //Properties -->

<!-- /newsletter-->

<!-- //newsletter-->

<!-- footer -->
<section class="agile-footer w3ls-section py-5">
	<div class="container">
		
		<div class="agileits_w3layouts-footer-bottom">
			<div class="row w3_agile-footer-grids py-5 my-4">
				<div class="col-lg-3 w3_agile-footer1 f1">
					<h2 class="mb-3">
						<a href="index.html">Civic Cyber Village</a>
					</h2>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem atus error sit volupt unde.</p>
				</div>
				<div class="col-lg-7 col-md-9 mt-lg-0 mt-4 row w3_agile-footer1 f2">
					<div class="col-md-4 col-sm-4 mb-sm-0 mb-4 inner-li">
						<h5 class="mb-3">Partners</h5>
						<ul class="w3ls-footer-bottom-list">
							<li>
								<a class="page-scroll scroll" href="#about">Estate Group</a>
							</li>
							<li>
								<a class="page-scroll scroll" href="#pricing">Developers</a>
							</li>
							<li>
								<a class="page-scroll scroll" href="#gallery">Builders</a>
							</li>
							<li>
								<a class="page-scroll scroll" href="#gallery">Constructors</a>
							</li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-4 mb-sm-0 mb-4 inner-li">
						<h5 class="mb-3">About us</h5>
						<ul class="w3ls-footer-bottom-list">
							<li>
								<a href="history.html">History</a>
							</li>
							<li>
								<a href="#">Terms of use</a>
							</li>
							<li>
								<a href="#">Privacy policy</a>
							</li>
							<li>
								<a href="#">Blog</a>
							</li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4 inner-li">
						<h5 class="mb-3">support</h5>
						<ul class="w3ls-footer-bottom-list">
							<li>
								<a href="#">24/7 service</a>
							</li>
							<li>
								<a href="#">FAQ</a>
							</li>
							<li>
								<a href="#">media</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 mt-lg-0 mt-4 w3_agile-footer1 f3">
					<h5 class="mb-3">Need Help?</h5>
					<ul class="footer-social-icons">
						<li>
							<a href="contact.html">
								Contact us
							</a>
						</li>
						<li>
							<a href="#">
								knowledge base
							</a>
						</li>
						<li>
							<a href="#">
								 Pdf document
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="agileits_w3layouts-copyright text-center">
			<p>© 2019 Civic Cyber Village. All Rights Reserved | Design by
				<a href="http://w3layouts.com/" target="=_blank"> LCC </a>
			</p>
		</div>
	</div>
</section>
<!-- //footer -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- gallery js-->
	<script src="js/lightGallery.js"></script>
	<script>
    	 $(document).ready(function() {
			$("#lightGallery").lightGallery({
				mode:"fade",
				speed:800,
				caption:true,
				desc:true,
				mobileSrc:true
			});
		});
    </script>
	<!-- //gallery js-->
	
	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->

</body>
</html>