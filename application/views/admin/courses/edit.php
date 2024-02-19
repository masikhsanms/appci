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

                <h1 class="mt-4">Course</h1>
                <!-- breadcrum -->
				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>


				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/ccourse/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $data->id?>" />

							<div class="form-group">
								<label>Course *</label>
								<input required class="form-control <?php echo form_error('course') ? 'is-invalid':'' ?>"
								 type="text" name="course" placeholder="isikan disini ..." value="<?php echo $data->course?>" />
								<div class="invalid-feedback">
									<?php echo form_error('course') ?>
								</div>
							</div>

							<div class="form-group">
								<label>Mentor *</label>
								<input required class="form-control <?php echo form_error('mentor') ? 'is-invalid':'' ?>"
								 type="text" name="mentor" min="0" placeholder="Isikan Disini ..." value="<?php echo $data->mentor;?>" />
								<div class="invalid-feedback">
									<?php echo form_error('mentor') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Title *</label>
								<input required class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
								 type="text" name="title" min="0" placeholder="Isikan Disini ..." value="<?php echo $data->title; ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('title') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
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
