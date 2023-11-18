    <div id="main" style="min-height: 837px;">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title mb-5">
                <div class="float-start">
                    <h3><?= $title; ?></h3>
                </div>
                <div class="float-end">
                    <nav>
                        <ul class="navbar-nav navbar-right">
                            <li class="dropdown me-1 mb-1">
                                <a href="#" class="dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                    <img alt="image" src="<?= base_url(); ?>assets/img/avatar_image/<?= $user['avatar_image'] ?>" class="rounded-circle mr-1" style="width: 30px;">
                                    <div class="d-none d-md-inline-block">Hi, <?= $user['username']; ?></div>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="<?= base_url('user'); ?>" class="dropdown-item has-icon">
                                        <i class="far fa-user"></i> My Profile
                                    </a>
                                    <a href="#" class="dropdown-item has-icon">
                                        <i class="fas fa-user-edit"></i> Settings
                                    </a>
                                    <a href="#" data-url="<?= base_url('auth/logout'); ?>" class="dropdown-item has-icon text-danger" id="keluar">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>