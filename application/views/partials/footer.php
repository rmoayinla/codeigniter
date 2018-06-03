			<footer class="footer mt-5">
				<p class="text-center"> Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
				</p>
			</footer>

		</div><!--#container closes -->

		<!--jquery script -->
		<script src="<?php echo base_url()."jquery/jquery.min.js"?>"></script>

		<!-- bootstrap js -->
		<script src="<?php echo base_url()."jquery-validation/dist/jquery.validate.min.js"?>"></script>
		<script src="<?php echo base_url()."jquery-validation/dist/additional-methods.min.js"?>"></script>
		
		<!-- bootstrap js -->
		<script src="<?php echo base_url()."bootstrap/dist/js/bootstrap.min.js"?>"></script>

		<!-- app custom script js -->
		<script src="<?php echo base_url()."js/script.js"?>"></script>

	</body>
</html>
