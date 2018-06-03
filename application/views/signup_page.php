<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include VIEWPATH."partials/header.php" ?>

		<title>Welcome to CodeIgniter</title>
		
	</head>

	<body>
		<?php include VIEWPATH."partials/navbar.php" ?>
		<div id="container" class="container-fluid">

			<main class="py-5">
				<div class="row">
					<div class="col-lg-6 mx-auto">
						<div class="py-3 text-center">
							<img src="<?php echo site_url()."images/logo.png"?>" class="medium-logo" alt="360 Degree Logo" />
						</div>
						<h1 class="mb-3">Signup</h1>
						<form id="signup-form" class="position-relative" method="POST" action="client/signup">
							<div id="form-step-1" class="form-step w-100 position-absolute">
								<div class="form-row">
									<div class="form-group col-md-6">
									  <label for="">Fullname </label>
									  <input type="text" class="form-control" id="client-fullname" placeholder="Your fullname e.g. Salami Adebayo" name="client_fullname" />
									</div>

									<div class="form-group col-md-6">
									  <label for="">Username </label>
									  <input type="text" class="form-control" id="client-username" placeholder="name@example.com" name="client_username" />
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col-md-6">
									  <label for="">Email address</label>
									  <input type="email" class="form-control" id="client-email" placeholder="name@example.com" name="client_email" />
									</div>

									<div class="form-group col-md-6">
									  <label for="">Password </label>
									  <input type="password" class="form-control" id="client-password" placeholder="name@example.com" name="client_password" />
									</div>
								</div>

								<div class="form-group">
								   <label for="">Example file input</label>
								   <input type="file" class="form-control-file" id="client-photo">
								 </div>
								 <div class="form-group">
									 <legend class="col-form-label">Sex</legend>
									 <div class="form-check form-check-inline">
									   <input class="form-check-input" type="radio" name="sex" id="client-sex-male" value="male">
									   <label class="form-check-label" for="inlineRadio1">Male</label>
									 </div>
									 <div class="form-check form-check-inline">
									   <input class="form-check-input" type="radio" name="sex" id="client-sex-female" value="female">
									   <label class="form-check-label" for="inlineRadio2">Female </label>
									 </div>
								</div>
								<button type="button" class="btn btn-primary next-button step-button">Next</button>

							</div><!--#form-step-1 closes -->
							
							<div id="form-step-2" class="form-step fade-out w-100 position-absolute">
								<div class="form-row">
									<div class="form-group col-md-6">
									  <label for="exampleFormControlInput1">Construction Type </label>
									  <select class="form-control" id="" name="construction_type">
									  	<option value="2_bedroom">2 Bedroom Bungalow </option>
									  	<option value="2_bedroom">2 Bedroom Bungalow </option>
									  	<option value="2_bedroom">2 Bedroom Bungalow </option>
									  	<option value="2_bedroom">2 Bedroom Bungalow </option>
									  </select>
									</div>
									<div class="form-group col-md-6">
									  <label for="exampleFormControlInput1">Construction Package </label>
									  <select class="form-control" id="" name="construction_package">
									  	<option value="2_bedroom">2 Bedroom Bungalow </option>
									  	<option value="2_bedroom">2 Bedroom Bungalow </option>
									  	<option value="2_bedroom">2 Bedroom Bungalow </option>
									  	<option value="2_bedroom">2 Bedroom Bungalow </option>
									  </select>
									</div>

									<button type="button" class="btn btn-primary prev-button step-button mr-2">Back</button>

									<button type="button" class="btn btn-primary preview-button step-button">Preview</button>

									
								</div>
							</div><!--#form-step-2 closes-->

							<div id="form-step-3" class="w-100 form-step fade-out">
								<div class="form-preview"> </div>
								<button type="button" class="btn btn-primary prev-button step-button mr-2">Back</button>

								<button type="submit" class="btn btn-primary step-button">Finish</button>

							</div><!--#form-step-3 closes -->

							<input type="hidden" name="return_url" value="<?php echo current_url(); ?>" />
						
						</form>

					</div><!-- .col-lg-4 -->
				</div><!--.row closes -->
			</main>

<?php include VIEWPATH."partials/footer.php" ?>