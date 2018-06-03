<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include VIEWPATH."partials/header.php" ?>

		<title>Signup- CodeIgniter</title>
		
	</head>

	<body>
		<?php include VIEWPATH."partials/navbar.php" ?>
		
		<div id="container" class="container-fluid">

			<main class="py-5" id="main-content">
				<div class="row">
					<div class="col-lg-4 mx-auto">
						<div class="py-3 text-center">
							<img src="<?php echo site_url()."images/logo.png"?>" class="medium-logo" alt="360 Degree Logo" />
						</div>
						<h1 class="mb-3">Login</h1>
						
						<?php if(!empty($this->session->flashdata('validation_errors'))): ?>
							<div class="alert alert-warning">
								<?php echo $this->session->flashdata('validation_errors'); ?>
							</div>
						<?php endif; ?>
						
						<form method="POST" action="client/login" id="login-form">
							<div class="form-group">
							  <label for="">Email or Username </label>
							  <input type="text" class="form-control" id="" placeholder="name@example.com" name="client_email_or_username" required />
							</div>

							<div class="form-group">
								  <label for="">Password</label>
								  <input type="password" class="form-control" id="" placeholder="name@example.com" name="client_password" required />
							</div>
							<!--hidden input to set the referrer url, this is use at server side for redirection -->
							<input type="hidden" name="return_url" value="<?php echo current_url(); ?>" />
							
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Login </button>
							</div>
						</form><!--#login-form -->
					</div><!--.col-lg-4 -->
				</div><!--.row -->
			</main><!--#main-content closes -->

<!--include the footer partial -->
<?php include VIEWPATH."partials/footer.php" ?>