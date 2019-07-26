  <link rel="stylesheet" href="../FrontTheme/intl-tel-input-master/build/css/intlTelInput.css">
  <link rel="stylesheet" href="../FrontTheme/intl-tel-input-master/build/css/demo.css">


<?php
include("Uheader.php");
?>

<?php
include("Aside.php");
?>



<div class="row">
<div class="col-xl-8" style="margin: 0 auto;">
		<div class="m-portlet m-portlet--tab">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													My Profile
												</h3>
											</div>
										</div>
									</div>

									<!--begin::Form-->
									<form class="m-form m-form--fit m-form--label-align-right">
										<div class="m-portlet__body">
											<div class="form-group m-form__group m--margin-top-10">
												<div class="alert m-alert m-alert--default" role="alert">
													The example form below demonstrates common HTML form elements air(box shadowed) style.
												</div>
											</div>

											<div class="form-group m-form__group row">
											<div class="col-xl-6">
											<div class="form-group m-form__group">
												<label for="exampleInputEmail1">Choose Your Image</label>
												<div></div>
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile" accept="image/*">
													<label class="custom-file-label" for="customFile">Browse Image</label>
												</div>
											</div>
										</div>
										<div class="col-xl-6">
											<div class="form-group m-form__group">
										<img src="assets/app/media/img/users/nobody.jpg" alt="Image not Preview" height="200" width="200">
											</div>
										</div>

										</div>

										<div class="form-group m-form__group">
												<label>Email address</label>
												<input type="email" class="form-control m-input m-input--solid" disabled="" placeholder="mohsinj673@gmail.com">
											</div>

											<div class="form-group m-form__group">
												<label>User ID</label>
												<input type="text" class="form-control m-input m-input--solid" disabled="" placeholder="ABC-234534">
													<!-- <a href="#" >Reset Password.</a> -->
											</div>

										<!-- 	<div class="form-group m-form__group">
												<label for="exampleInputEmail1">Email address</label>
												<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
												<span class="m-form__help">We'll never share your email with anyone else.</span>
											</div>
											 -->
											 <div class="form-group m-form__group">
												<label for="exampleInputEmail1">Name </label>
												<input type="text" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
												<span class="m-form__help">We'll never share your data with anyone else.</span>
											</div>


											<div class="form-group m-form__group">
												<label for="exampleInputPassword1">Phone : </label>
												
												<!-- <input type="number" class="form-control m-input m-input--air" id="exampleInputPassword1" placeholder="Phone"> -->
												 <input type="hidden" id="phone2" name="phone"/>
												<input id="phone" name="phoneNo" type="number" class="form-control m-input m-input--air">
											</div>
											<!-- <div class="form-group m-form__group">
												<label for="exampleSelect1">Select Country</label>
												<select class="form-control m-input m-input--air" id="exampleSelect1">
													<option>Pakistan</option>
													
												</select>
											</div> -->
											<div class="form-group m-form__group">
												<label>Country</label>
												<input type="text" class="form-control m-input m-input--solid" disabled="" placeholder="Pakistan">
													<!-- <a href="#" >Reset Password.</a> -->
											</div>
											<!-- 
											<div class="form-group m-form__group">
												<label for="exampleSelect1">Select Bank</label>
												<select class="form-control m-input m-input--air" id="exampleSelect1">
													<option>Bank Al Habib</option>
													
												</select>
											</div>

											 <div class="form-group m-form__group">
												<label for="exampleInputEmail1">Account Title </label>
												<input type="text" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Title">
												<span class="m-form__help">We'll never share your data with anyone else.</span>
											</div>

											 <div class="form-group m-form__group">
												<label for="exampleInputEmail1">Account Number </label>
												<input type="text" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="EXAMPLE: PK12ABCD12345644543445">
												<span class="m-form__help">We'll never share your data with anyone else.</span>
											</div>

											<div class="form-group m-form__group">
												<label for="exampleTextarea">Next of kin(?) :</label>
												<textarea class="form-control m-input m-input--air" id="exampleTextarea" rows="3"></textarea>
											</div> -->



											 <div class="form-group m-form__group">
												<label for="exampleInputEmail1">BTC Address </label>
												<input type="text" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter BTC Address">
												<span class="m-form__help">We'll never share your data with anyone else.</span>
											</div>

											<!--  <div class="form-group m-form__group">
												<label for="exampleInputEmail1">Eth Address </label>
												<input type="text" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Eth Address">
												<span class="m-form__help">We'll never share your data with anyone else.</span>
											</div>

											 <div class="form-group m-form__group">
												<label for="exampleInputEmail1">BCH Address </label>
												<input type="text" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter BCH Address">
												<span class="m-form__help">We'll never share your data with anyone else.</span>
											</div>

											 <div class="form-group m-form__group">
												<label for="exampleInputEmail1">LTC Address </label>
												<input type="text" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter LTC Address">
												<span class="m-form__help">We'll never share your data with anyone else.</span>
											</div>

											 <div class="form-group m-form__group">
												<label for="exampleInputEmail1">XRP Address </label>
												<input type="text" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter XRP Address">
												<span class="m-form__help">We'll never share your data with anyone else.</span>
											</div>

											 <div class="form-group m-form__group">
												<label for="exampleInputEmail1">DASH Address </label>
												<input type="text" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter DASH Address">
												<span class="m-form__help">We'll never share your data with anyone else.</span>
											</div>

											 <div class="form-group m-form__group">
												<label for="exampleInputEmail1">ZEC Address </label>
												<input type="text" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ZEC Address">
												<span class="m-form__help">We'll never share your data with anyone else.</span>
											</div> -->

											<div class="m-form__group form-group">
																<label>Subscribe For Email : </label>
																<div class="m-checkbox-list">
																	<label class="m-checkbox m-checkbox--state-success">
																		<input type="checkbox"> Subscribe
																		<span></span>
																	</label>
																</div>			
											</div>


										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<button type="reset" class="btn btn-accent">Submit</button>
												
											</div>
										</div>
									</form>

									<!--end::Form-->
								</div>
</div>
</div>

<?php
include("footer.php");
?>


<script src="../FrontTheme/js/bootstrap.js"></script>
<script src="../FrontTheme/intl-tel-input-master/build/js/intlTelInput.js"></script>
 



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
//       initialCountry:"auto",
// geoIpLookup:function(success,failure){
// $.get("https://ipinfo.io",function(){},"jsonp").always(function(resp){
// var countryCode = (resp && resp.country) ? resp.country : "";
// success(countryCode);
// });
// },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
       separateDialCode: true,
      utilsScript: "../FrontTheme/intl-tel-input-master/build/js/utils.js",
    });
	
  </script>

