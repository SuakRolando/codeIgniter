<div class="bacground-gradient">
    <div class="header">
        <div class="content1">
            <div>
                <p class="txtWelcome">Selamat Datang di</p>
                <h1 class="txtTitle">SILONBOG</h1>
                <h5 class="txtTitleElaborate">Sistem Layanan Online Biro Organisasi</h5>
            </div>
            <div class="forms mt-5">
                <?= $this->session->flashdata('massage'); ?>
                <form method="POST" action="<?= base_url('auth'); ?>">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com" value="<?= set_value('email'); ?>">
                        <label>Email</label>
                        <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <label>Kata sandi</label>
                        <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <button type="submit" class="btn btn-danger" style="width: 150px;">Masuk</button>
                </form>
            </div>
            <div class="mt-3">
                <p>Belum punya akun? <strong><a class="text-dark" href="<?= base_url('auth/registration') ?>">Daftar disini.</a></strong></p>
            </div>
        </div>
        <div class="imgWrapper">
            <img class="img" src="<?php echo base_url('assets/logo/provSulut.png') ?>">
        </div>

    </div>
</div>


<style>
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
    }

    .p,
    p {
        margin: 0;
    }

    .form-control {
        background-color: #FFEBEB99;
    }

    .form-control:focus {
        border-color: #ff0000 !important;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6) !important;
    }

    .bacground-gradient {
        width: 100%;
        height: 100vh;
        background: linear-gradient(223.79deg, #FF7C7C 0.75%, rgba(215, 212, 212, 0) 75.53%);
    }

    .header {
        display: flex;
    }

    .content1 {
        padding-top: 240px;
        margin-left: 190px;
    }

    .txtWelcome {
        font-size: 70px;
        font-weight: 400;
    }

    .txtTitle {
        font-weight: 700;
        font-size: 100px;
    }

    .txtTitleElaborate {
        font-weight: 500;
        font-size: 35px;
        color: #7A7A7A;
    }

    .forms {
        width: 538px;
    }

    .imgWrapper {
        display: flex;
        flex: 1;
        justify-content: flex-end;
    }

    .img {
        width: 1000px;
        height: 100vh;
        opacity: 0.4;
    }
</style>

</html>