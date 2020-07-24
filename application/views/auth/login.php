<body class="hold-transition login-page" style="background-image:url(<?= base_url('assets/'); ?>img/bg.png) ">
    <div class="login-box" style="height: 533px;width: 460px;">

        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body" style="background-color: #e9edf0; height: 533px;width: 460px;
            padding: 36px 36px 36px 36px; ">
                <div class="login-logo">
                    <a href="<?= base_url('auth'); ?>"><b>e-</b>Laporan</a>
                    <br>
                    <br>
                    <img src="<?= base_url('assets/'); ?>img/jne.png" style="width: 300px; height: 125px;">
                </div>

                <?= $this->session->flashdata('message'); ?>
                <form action="<?= base_url('auth'); ?>" method="post" id="loginForm">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Username" style="height: 48px; width: 350px;" value="<?= set_value('email'); ?>">

                        <div class="input-group-append" ">
                            <div class=" input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" style="height: 48px; width: 350px;">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- /.col -->
                <div class="col-lg">
                    <button type="submit" class="btn btn-primary btn-block" style="height: 48px; width: 388px;">Login</button>
                </div>
                <!-- /.col -->
            </div>
            </form>


        </div>
        <!-- /.login-card-body -->
    </div>
    </div>
    <!-- /.login-box -->