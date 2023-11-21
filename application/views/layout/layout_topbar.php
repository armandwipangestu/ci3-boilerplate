    <!-- <div id="main" style="min-height: 837px;">
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
                                    <a href="#" data-url="<?= base_url('auth/logout'); ?>" class="dropdown-item has-icon text-danger" id="logout">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> -->

    <div id="main" class="layout-navbar navbar-fixed">
        <header>
            <nav class="navbar navbar-expand navbar-light navbar-top">
                <div class="container-fluid">
                    <a href="#" class="burger-btn d-block">
                        <i class="bi bi-justify fs-3"></i>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-lg-0">
                        </ul>
                        <div class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="user-menu d-flex">
                                    <div class="user-name text-end me-3">
                                        <h6 class="mb-0 text-gray-600"><?= $user['username']; ?></h6>
                                        <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                    </div>
                                    <div class="user-img d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="<?= base_url(); ?>assets/img/avatar_image/<?= $user['avatar_image'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem">
                                <li>
                                    <h6 class="dropdown-header">Hello, <?= $user['username']; ?>!</h6>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= base_url('user'); ?>"><i class="icon-mid bi bi-person me-2"></i> My
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" data-url="<?= base_url('auth/logout'); ?>" id="logout"><i class="icon-mid bi bi-box-arrow-left me-2"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div id="main-content">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3><?= $title; ?></h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Layout Vertical Navbar
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>