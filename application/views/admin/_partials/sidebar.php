<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?= site_url('admin');?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="<?= site_url('admin/cusers/'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                User
                            </a>
                            <a class="nav-link" href="<?= site_url('admin/ccourse/'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Courses
                            </a>
                            <a class="nav-link" href="<?= site_url('admin/cusercourse/'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                UserCourse
                            </a>
                            <a class="nav-link" href="<?= site_url('cauth/logout'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php 
                            $var = $this->session->userdata;
                            echo $var['username_login'];
                        ?>
                    </div>
                </nav>