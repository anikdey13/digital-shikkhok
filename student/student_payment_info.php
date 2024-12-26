<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != '1') {
    header('Location: ../sign_in.php');
    exit();
}
$pageTitle = "Student Dashboard";
ob_start();
?>


			<!-- Main content START -->
			<div class="col-xl-9">

				<!-- Payment method START -->
				<div class="card bg-transparent border rounded-3 mb-4 z-index-9">
					<!-- Card header START -->
					<div class="card-header bg-transparent d-sm-flex justify-content-sm-between align-items-center border-bottom">
						<h3 class="mb-2 mb-sm-0">Payment methods</h3>
						<a href="#" class="btn btn-sm btn-primary-soft mb-0" data-bs-toggle="modal" data-bs-target="#addNewcard">Add new card</a>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body">
						<div class="accordion accordion-circle" id="accordioncircle">
							<!-- Credit or debit card START -->
							<div class="accordion-item mb-3">
								<h6 class="accordion-header font-base" id="heading-1">
									<button class="accordion-button bg-white rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
										Credit or Debit Card 
									</button>
								</h6>
								<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordioncircle">
									<!-- Accordion body -->
									<div class="accordion-body">
										<!-- Form START -->
										<form class="row text-start g-3">
											<!-- Card number -->
											<div class="col-12">
												<label class="form-label">Card Number <span class="text-danger">*</span></label>
												<div class="position-relative">
													<input type="text" class="form-control" placeholder="xxxx xxxx xxxx xxxx">
													<img src="assets/images/client/visa.svg" class="w-40px position-absolute top-50 end-0 translate-middle-y me-2 d-none d-sm-block" alt="">
												</div>	
											</div>
											<!-- Expiration Date -->
											<div class="col-md-6">
												<label class="form-label">Expiration date <span class="text-danger">*</span></label>
												<div class="input-group">
													<input type="text" class="form-control" maxlength="2" placeholder="Month">
													<input type="text" class="form-control" maxlength="4" placeholder="Year">
												</div>
											</div>	
											<!--Cvv code  -->
											<div class="col-md-6">
												<label class="form-label">CVV / CVC <span class="text-danger">*</span></label>
												<input type="text" class="form-control" maxlength="3" placeholder="xxx">
											</div>
											<!-- Card name -->
											<div class="col-12">
												<label class="form-label">Name on Card <span class="text-danger">*</span></label>
												<input type="text" class="form-control" aria-label="name of card holder" placeholder="Enter name">
											</div>
										</form>
										<!-- Form END -->
									</div>
								</div>
							</div>
							<!-- Credit or debit card END -->

							<!-- Net banking START -->
							<div class="accordion-item mb-3">
								<h6 class="accordion-header font-base" id="heading-2">
									<button class="accordion-button collapsed bg-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
										Pay with Net Banking
									</button>
								</h6>
								<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordioncircle">
									<!-- Accordion body -->
									<div class="accordion-body">
										<!-- Form START -->
										<form class="row text-start g-3">
											<p class="mb-1">In order to complete your transaction, we will transfer you over to Eduport secure servers.</p>
											<p class="my-0">Select your bank from the drop-down list and click proceed to continue with your payment.</p>
											<!-- Select bank -->
											<div class="col-md-6">
												<select class="form-select form-select-sm js-choice border-0" aria-label=".form-select-sm">
													<option value="">Please choose one</option>
													<option>Bank of America</option>
													<option>Bank of India</option>
													<option>Bank of London</option>
												</select>
											</div>
										</form>
										<!-- Form END -->
									</div>
								</div>
							</div>
							<!-- Net banking END -->
						</div>	
					</div>
					<!-- Card body START -->
				</div>
				<!-- Payment method END -->

				<!-- Billing address START -->
				<div class="card bg-transparent border rounded-3 mb-4">
					<!-- Card header START -->
					<div class="card-header bg-transparent d-sm-flex justify-content-sm-between align-items-center border-bottom">
						<h3 class="mb-2 mb-sm-0">Billing address</h3>
						<a href="#" class="btn btn-sm btn-primary-soft mb-0">Add new address</a>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body">
						<!-- Address 1 START -->
						<div class="bg-body border border-1 p-3 rounded-3 d-sm-flex justify-content-sm-between align-items-center mb-4">

							<!-- Radio button button -->
							<div class="form-check">
								<input class="form-check-input mb-1" type="radio" name="address" id="address1" checked>
								<label class="form-check-label mb-0 h5" for="address1">Address-1</label>
								<p class="mb-0">2492 Centennial NW, Acworth, GA, 30102</p>
							</div>

							<!-- Button -->
							<div>
								<a href="#" class="btn btn-sm btn-success mb-0">Edit</a>
								<button class="btn btn-sm btn-danger mb-0">Delete</button>
							</div>

						</div>
						<!-- Address 1 END -->

						<!-- Address 2 START -->
						<div class="bg-body border border-1 p-3 rounded-3 d-sm-flex justify-content-sm-between align-items-center mb-4">

							<!-- Radio button button -->
							<div class="form-check">
								<input class="form-check-input mb-1" type="radio" name="address" id="address2">
								<label class="form-check-label mb-0 h5" for="address2">Address-2</label>
								<p class="mb-0">2002 Horton Ford Rd, Eidson, TN, 37731</p>
							</div>

							<!-- Button -->
							<div>
								<a href="#" class="btn btn-sm btn-success mb-0">Edit</a>
								<button class="btn btn-sm btn-danger mb-0">Delete</button>
							</div>

						</div>
						<!-- Address 2 END -->
					</div>
					<!-- Card body START -->
				</div>
				<!-- Billing address END -->

				<!-- Billing history START -->
				<div class="card bg-transparent border rounded-3">
					<!-- Card header START -->
					<div class="card-header bg-transparent border-bottom">
						<h3 class="mb-0">Billing history</h3>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body">

						<!-- Title and select START -->
						<div class="row g-3 align-items-center justify-content-between mb-4">
							<!-- Content -->
							<div class="col-md-8">
								<form class="rounded position-relative">
									<input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
									<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
								<i class="fas fa-search fs-6 "></i>
							</button>
								</form>
							</div>

							<!-- Select option -->
							<div class="col-md-3">
								<!-- Short by filter -->
								<form>
									<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm">
										<option value="">Sort by</option>
										<option>Newest</option>
										<option>Oldest</option>
									</select>
								</form>
							</div>
						</div>
						<!-- Title and select END -->

						<!-- Student list table START -->
						<div class="table-responsive border-0">
							<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
								<!-- Table head -->
								<thead>
									<tr>
										<th scope="col" class="border-0 rounded-start">Date</th>
										<th scope="col" class="border-0">Course name</th>
										<th scope="col" class="border-0">Payment method</th>
										<th scope="col" class="border-0">Status</th>
										<th scope="col" class="border-0">Total</th>
										<th scope="col" class="border-0 rounded-end">Action</th>
									</tr>
								</thead>
								<!-- Table body -->
								<tbody>
									<!-- Table item -->
									<tr>
										<!-- Date item -->
										<td>4/2/2023</td>

										<!-- Title item -->
										<td>
											<h6 class="mt-2 mt-lg-0 mb-0"><a href="#">Sketch from A to Z: for app designer</a></h6>
										</td>

										<!-- Payment method item -->
										<td><img src="assets/images/client/mastercard.svg" class="h-40px" alt=""><span class="ms-2">****4568</span></td>

										<!-- Status item -->
										<td>
											<span class="badge bg-success bg-opacity-10 text-success">Paid</span>
										</td>
										
										<!-- total item -->
										<td>$350</td>

										<!-- Action item -->
										<td>
											<a href="#" class="btn btn-primary-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="bi bi-download"></i></a>
										</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Date item -->
										<td>10/1/2023</td>

										<!-- Title item -->
										<td>
											<h6 class="mt-2 mt-lg-0 mb-0"><a href="#">Create a Design System in Figma</a></h6>
										</td>

										<!-- Payment method item -->
										<td><img src="assets/images/client/mastercard.svg" class="h-40px" alt=""><span class="ms-2">****2588</span></td>

										<!-- Status item -->
										<td>
											<span class="badge bg-success bg-opacity-10 text-success">Paid</span>
										</td>
										
										<!-- total item -->
										<td>$242</td>

										<!-- Action item -->
										<td>
											<a href="#" class="btn btn-primary-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="bi bi-download"></i></a>
										</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Date item -->
										<td>21/1/2023</td>

										<!-- Title item -->
										<td>
											<h6 class="mt-2 mt-lg-0 mb-0"><a href="#">The Complete Web Development in python</a></h6>
										</td>

										<!-- Payment method item -->
										<td><img src="assets/images/client/paypal.svg" class="w-80px" alt=""></td>

										<!-- Status item -->
										<td>
											<span class="badge bg-orange bg-opacity-10 text-orange">Pending</span>
										</td>
										
										<!-- total item -->
										<td>$576</td>

										<!-- Action item -->
										<td>
											<a href="#" class="btn btn-primary-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="bi bi-download"></i></a>
										</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Date item -->
										<td>18/1/2023</td>

										<!-- Title item -->
										<td>
											<h6 class="mt-2 mt-lg-0 mb-0"><a href="#">Deep Learning with React-Native</a></h6>
										</td>

										<!-- Payment method item -->
										<td><img src="assets/images/client/mastercard.svg" class="h-40px" alt=""><span class="ms-2">****2588</span></td>

										<!-- Status item -->
										<td>
											<span class="badge bg-danger bg-opacity-10 text-danger">Cancel</span>
										</td>
										
										<!-- total item -->
										<td>$425</td>

										<!-- Action item -->
										<td>
											<a href="#" class="btn btn-primary-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="bi bi-download"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- Student list table END -->

						<!-- Pagination START -->
						<div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
							<!-- Content -->
							<p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
							<!-- Pagination -->
							<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
								<ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
									<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
									<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
									<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
									<li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
									<li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
								</ul>
							</nav>
						</div>
						<!-- Pagination END -->
					</div>
					<!-- Card body START -->
				</div>
				<!-- Billing history END -->
				
			<!-- Main content END -->
			</div>


<?php
$content = ob_get_clean();
include('../layouts/student.php');
?>
