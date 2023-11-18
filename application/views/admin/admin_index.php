        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">

                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body py-4 px-4">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="<?= base_url(); ?>/assets/img/avatar_image/<?= $user['avatar_image']; ?>" alt="Avatar Image">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold"><?= $user['username']; ?></h5>
                                    <h6 class="text-muted mb-0"><?= $user['email']; ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>