<?php
include("Uheader.php");
?>

<?php
include("Aside.php");
?>

<div class="row">
<div class="col-xl-8">
			<div class="m-portlet m-portlet--tab">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Profit Calculator
												</h3>
											</div>
										</div>
									</div>

									<!--begin::Form-->
									<form class="m-form m-form--fit m-form--label-align-right">
										<div class="m-portlet__body">
										
											
										
											<div class="form-group m-form__group row">
												<label for="example-date-input" class="col-2 col-form-label">Deposit Approve Date : </label>
												<div class="col-10">
													<input class="form-control m-input" type="date" value="2011-08-19" id="example-date-input">
												</div>
											</div>

											<div class="form-group m-form__group row">
												<label for="example-date-input" class="col-2 col-form-label">Deposit Sold/Current Date : </label>
												<div class="col-10">
													<input class="form-control m-input" type="date" value="2011-08-19" id="example-date-input">
												</div>
											</div>
										
											<div class="form-group m-form__group row">
												<label for="example-text-input" class="col-2 col-form-label">Amount</label>
												<div class="col-10">
													<input class="form-control m-input" type="number" value="Artisanal kale" id="example-text-input">
												</div>
											</div>

										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<div class="row">
													<div class="col-2">
													</div>
													<div class="col-10">
														<button type="reset" class="btn btn-success">Calculate Profit</button>
														<button type="reset" class="btn btn-secondary">Reset</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
</div>

</div>

<?php
include("footer.php");
?>