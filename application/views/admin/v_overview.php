<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- head -->
        <?php $this->load->view("admin/_partials/head.php") ?>
    </head>
    <body class="sb-nav-fixed">
       <!-- navbar -->
       <?php $this->load->view("admin/_partials/navbar.php") ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <!-- sidebar -->
                <?php $this->load->view("admin/_partials/sidebar.php") ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <!-- breadcrum -->
                        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                        
                    </div>
                </main>
                <!-- footer -->
                <?php $this->load->view("admin/_partials/footer.php") ?>
            </div>
        </div>
        <!-- modal -->
        <?php $this->load->view("admin/_partials/modal.php") ?>
        <!-- js -->
        <?php $this->load->view("admin/_partials/js.php") ?>
    </body>
</html>
