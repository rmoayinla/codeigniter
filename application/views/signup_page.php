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
						<h1>Signup</h1>
						<form>
							<div class="form-row">
								<div class="form-group col-md-6">
								  <label for="exampleFormControlInput1">Fullname </label>
								  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="client_fullname" />
								</div>

								<div class="form-group col-md-6">
								  <label for="exampleFormControlInput1">Username </label>
								  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="client_username" />
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
								  <label for="exampleFormControlInput1">Email address</label>
								  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="client_email" />
								</div>

								<div class="form-group col-md-6">
								  <label for="exampleFormControlInput1">Password </label>
								  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="client_password" />
								</div>
							</div>

							<div class="form-group">
							   <label for="exampleFormControlFile1">Example file input</label>
							   <input type="file" class="form-control-file" id="exampleFormControlFile1">
							 </div>
							 <div class="form-group">
								 <legend class="col-form-label">Sex</legend>
								 <div class="form-check form-check-inline">
								   <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="male">
								   <label class="form-check-label" for="inlineRadio1">Male</label>
								 </div>
								 <div class="form-check form-check-inline">
								   <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="female">
								   <label class="form-check-label" for="inlineRadio2">Female </label>
								 </div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						
						</form>

					</div><!-- .col-lg-4 -->
				</div><!--.row closes -->
			</main>

<?php include VIEWPATH."partials/footer.php" ?>