
<br></br>

<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
		<div class="tittle-agileinfo">
			<span>-</span>
			<h3>Risk Warning</h3>
			<p >Investing in start-ups and early stage businesses involves risks, including illiquidity, lack of dividends, loss of investment and dilution, and it should be done only as part of a diversified portfolio. Crowdcube is targeted exclusively at investors who are sufficiently sophisticated to understand these risks and make their own investment decisions. You will only be able to invest via Crowdcube once you are registered as sufficiently sophisticated. Please click here to read the full Risk Warning.</p>
			<br></br>
			<p>This page is approved as a financial promotion by Crowdcube Capital Limited, which is authorised and regulated by the Financial Conduct Authority. Pitches for investment are not offers to the public and investments can only be made by members of crowdcube.com on the basis of information provided in the pitches by the companies concerned. Crowdcube takes no responsibility for this information or for any recommendations or opinions made by the companies.</p>
		</div>
			<div class="agile-contact-grids">
					 <!-- <div class="col-md-6 address-grid" data-aos="flip-left">
						<h4>Our Address</h4>
						<ul class="w3_address">
							<li><span>Address 1</span>Frances Street, London, United Kingdom</li>
							<li><span>Phone</span>+1234 567 567</li>
							<li><span>Address 2</span>Frances St, Woolwich, London SE18, UK</li>
							<li><span>Email</span><a href="mailto:info@example.com">info@example.com</a></li>
						</ul>
						<div class="clearfix"> </div>
					</div> -->
				<div class="col-md-2">
					<h3>Support</h3>
					<br></br>
						<ul class="w3_address" style="list-style: none;">
							<li><a href="#">Help Center</a></li>
							<li><a href="#">Contact us</a></li>
							<li><a href="#">Tax relief</a></li>
						</ul>
						<br></br>
						<div class="clearfix"> </div>
				</div>
				<div class="col-md-2">
					<h3>Learn more</h3>
					<br></br>
						<ul class="w3_address" style="list-style: none;">
							<li><a href="#">Raising finance</a></li>
							<li><a href="#">Funded companies</a></li>
							<li><a href="#">Partnerships</a></li>
						</ul>
						<br></br>
						<div class="clearfix"> </div>
				</div>
				<div class="col-md-2">
					<h3>Legal</h3>
					<br></br>
						<ul class="w3_address" style="list-style: none;">
							<li><a href="#">Term of use</a></li>
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">Risk warning</a></li>
						</ul>
						<br></br>
						<div class="clearfix"> </div>
				</div>
				<div class="col-md-2">
					<h3>Team</h3>
					<br></br>
						<ul class="w3_address" style="list-style: none;">
							<li><a href="#">About us</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Tax relief</a></li>
						</ul>
						<br></br>
						<div class="clearfix"> </div>
				</div>
				<div class="col-md-4"><h3>Another Links<h3></div>
				<div class="clearfix"> </div>
			</div>
			<!--footer-->
			<div class="copy">
		        <p>© 2019 Deliva. All Rights Reserved</p>
		    </div>
			<!--/footer -->
		</div>
	</div>
	<!-- //contact -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
<!-- FlexSlider -->
				  <script defer src="js/jquery.flexslider.js"></script>
				  <script type="text/javascript">
					
				  	function generate(n) {
        var add = 1, max = 12 - add;   // 12 is the min safe number Math.random() can generate without it starting to pad the end with zeros.   

        if ( n > max ) {
                return generate(max) + generate(n - max);
        }

        max        = Math.pow(10, n+add);
        var min    = max/10; // Math.pow(10, n) basically
        var number = Math.floor( Math.random() * (max - min + 1) ) + min;

        return ("" + number).substring(add); 
}

var tokenVal = generate(20);
$("#token").val(tokenVal);


					$(function(){				 
					});
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});

			$(function(){
    		$('.loginAnchor').trigger('click');
			});

				  </script>

	<script type="text/javascript">
		$(document).on('click',function () {
   // alert('page is loaded');
    setTimeout(function () {
     var LoginModalShow =  $('#myForgotPassModal').hasClass('in');   
    if(LoginModalShow){
    	$('#myModal2').modal('hide');
    }
    }, 1000);

});
	
</script>
<!-- FlexSlider -->
<!-- clients-slider-script -->
				<script src="js/slideshow.min.js"></script>
				<script src="js/launcher.js"></script>
<!-- //clients-slider-script -->
<!-- /circle-->
	 <script type="text/javascript" src="js/circles.js"></script>
					         <script>
								var colors = [
										['#ffffff', '#fd9426'], ['#ffffff', '#fc3158'],['#ffffff', '#53d769'], ['#ffffff', '#147efb']
									];
								for (var i = 1; i <= 7; i++) {
									var child = document.getElementById('circles-' + i),
										percentage = 30 + (i * 10);
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      10,
										number:   	percentage / 1,
										text:       '%',
										colors:     colors[i - 1]
									});
								}
						
				</script>
	<!-- //circle -->
	<!-- for-Map -->
		<script type="text/javascript">
			$(function() {
			
				var menu_ul = $('.faq > li > ul'),
					   menu_a  = $('.faq > li > a');
				
				menu_ul.hide();
			
				menu_a.click(function(e) {
					e.preventDefault();
					if(!$(this).hasClass('active')) {
						menu_a.removeClass('active');
						menu_ul.filter(':visible').slideUp('normal');
						$(this).addClass('active').next().stop(true,true).slideDown('normal');
					} else {
						$(this).removeClass('active');
						$(this).next().stop(true,true).slideUp('normal');
					}
				});
			
			});
		</script>
<!-- //for-Map -->
<script src="js/jzBox.js"></script>
<!-- start-smoth-scrolling -->
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
<!-- start-smoth-scrolling -->
<!-- smooth scrolling -->
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
<!-- Animation-effect -->
<script src='js/aos.js'></script>
<script src="js/aosindex.js"></script>
<!-- //Animation-effect -->
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script src="js/bootstrap.js"></script>

<script src="intl-tel-input-master/build/js/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
       autoHideDialCode: false,
       autoPlaceholder: "polite",

       //autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
       geoIpLookup: function(callback) {
         $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
           var countryCode = (resp && resp.country) ? resp.country : "";
           callback(countryCode);
         });
       },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "intl-tel-input-master/build/js/utils.js",
    });
  </script>


</body>
</html>