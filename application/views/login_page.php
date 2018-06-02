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
					<div class="col-lg-4 mx-auto">
						<h1>Login</h1>
						<div class="form-group">
						  <label for="exampleFormControlInput1">Email or Username </label>
						  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="client_email" />
						</div>

						<div class="form-group">
							  <label for="exampleFormControlInput1">Password</label>
							  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="client_email" />
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</div>
			</main>

<?php include VIEWPATH."partials/footer.php" ?>