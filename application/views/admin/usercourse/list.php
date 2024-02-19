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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/cusercourse/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover dttb" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
                                        <th>No</th>
										<th>User</th>
										<th>Course</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
                                    $no = 1;
                                    foreach ($data as $row): ?>
									<tr>
                                        <td><?= $no++; ?></td>
										<td width="150">
											<?php echo $row->course ?>
										</td>
										<td>
											<?php echo $row->username; ?>
										</td>
										
										<td width="250">
											<a href="<?php echo site_url('admin/cusercourse/edit/'.$row->id_user.'-'.$row->id_course) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/cusercourse/delete/'.$row->id_user.'-'.$row->id_course) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
        </main>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

    <script>
        
        function deleteConfirm(url){
            // console.log('test');
            // $('#btn-delete').attr('href', url);
            $('.modal-title').html('Konfirmasi');
            $('.modal-body').html('Apakah anda Yakin menghapus data ini ?');
            $('.modal-footer a').html("Yes");
            $('.modal-footer a').attr('href', url);
            $('#logoutModal').modal('show');
        }
    </script>

</body>

</html>
