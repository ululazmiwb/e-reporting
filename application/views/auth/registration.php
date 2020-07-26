<body class="hold-transition register-page" style="background-image:url(<?= base_url('assets/'); ?>img/bg.png) ">
    <div class="register-box" style="height: 533px;width: 460px;">

        <div class="card">
            <div class="card-body register-card-body" style="background-color: #e9edf0; height: 533px;width: 460px;
            padding: 36px 36px 36px 36px; ">

                <div class="register-logo">
                    <a href=""><b>Admin</b>LTE</a>

                    <img src="<?= base_url('assets/'); ?>img/jne.png" style="width: 300px; height: 125px; padding-top: 10px;">
                </div>
                <form action="<?= base_url('auth/registration'); ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Full name" id="name" name="name" value="<?= set_value('name'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="<?= set_value('email') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" id="password1" name="password1">
                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Retype password" id="password2" name="password2">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </>
                            <!-- /.col -->
                        </div>
                </form>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>