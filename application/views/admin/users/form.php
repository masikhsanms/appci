<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="sb-nav-fixed">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="layoutSidenav">

        <div id="layoutSidenav_nav">
            <!-- sidebar -->
            <?php $this->load->view("admin/_partials/sidebar.php") ?>
        </div>

		<div id="layoutSidenav_content">
        <main>
			<div class="container-fluid px-4">

            <h1 class="mt-4">User</h1>
                <!-- breadcrum -->
				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>


				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/cusers/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/cusers/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label>username *</label>
								<input required class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
								 type="text" name="username" placeholder="isikan disini ..." />
								<div class="invalid-feedback">
									<?php echo form_error('username') ?>
								</div>
							</div>

							<div class="form-group">
								<label>Email *</label>
								<input required class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="email" name="email" min="0" placeholder="Isikan Disini ..." />
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Password *</label>
								<input required class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="password" name="password" min="0" placeholder="Isikan Disini ..." />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->
        </main>
		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>