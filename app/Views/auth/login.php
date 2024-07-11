<?= $this->extend('layout/auth') ?>
<?= $this->section('content') ?>

<body>

    <main class="background-image">
        <div class="container ">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="card mb-3">

                                <div class="card-body">
                                    <div class="mt-1 ">
                                        <h5 class="card-title pb-0 fs-1">Masuk</h5>
                                        <div class="small mb-3" style="font-size: 0.7rem; margin-top: -13px;">Selamat datang, masukkan username dan password Anda</div>
                                    </div>

                                    <form action="/auth" method="post" class="row g-2 needs-validation">

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label" style="font-size: 0.8rem;">Username</label>
                                            <div class="input-group has-validation" style="margin-top: -5px;">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="username" class="form-control" id="yourUsername" required>
                                                <div class="invalid-feedback">Masukkan username Anda.</div>
                                            </div>
                                        </div>

                                        <div class="col-12" style="margin-top: 0px;">
                                            <label for="yourPassword" class="form-label" style="font-size: 0.8rem;">Password</label>
                                            <div class="input-group has-validation" style="margin-top: -5px;">
                                                <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-lock"></i></span>
                                                <input type="password" name="password" class="form-control" id="yourPassword" required>
                                                <div class="invalid-feedback">Masukkan password Anda!</div>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-4">
                                            <button type="submit" class="btn btn-primary w-100" type="submit" style="font-size: 0.9rem;">Masuk</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0" style="font-size: 0.8rem;">
                                                <a href="<?= base_url(); ?>">
                                                    <i class="bi bi-chevron-left"></i> Beranda
                                                </a>
                                            </p>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <?= $this->endSection() ?>