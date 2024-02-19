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

                <h1 class="mt-4">User Course</h1>
                <!-- breadcrum -->
				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>


				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/cusercourse/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

							<input type="hidden" name="id_userhidden" value="<?php echo $data->id_user?>" />
							<input type="hidden" name="id_coursehidden" value="<?php echo $data->id_course?>" />


							<div class="form-group">
								<label>Users *</label>
								<select name="id_user" class="form-control" required>
                                    <option value="">Pilih</option>
                                    <?php foreach( $dusers as $row ): 
                                        $select = ($row->id == $data->id_user) ? 'selected' : '';    
                                    ?>
                                        <option <?= $select; ?> value="<?= $row->id ?>"><?= $row->username; ?></option>
                                    <?php endforeach; ?>
                                </select>
								
							</div>

							<div class="form-group">
								<label>Courses *</label>
								<select name="id_course" class="form-control" required>
                                    <option value="">Pilih</option>
                                    <?php foreach( $dcourses as $row ): 
                                        $select = ($row->id == $data->id_course) ? 'selected' : '';    
                                    ?>
                                        <option <?= $select; ?> value="<?= $row->id ?>"><?= $row->course; ?></option>
                                    <?php endforeach; ?>
                                </select>
								
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
