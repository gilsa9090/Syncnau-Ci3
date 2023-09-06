<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/admin/template/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/admin/template/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/admin/template/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url('assets') ?>/admin/template/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <?= $this->session->flashdata('notif') ?>
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Register</h3>
                            <form action="<?= base_url('login/register') ?>" method="post">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control p_input">
                                    <?= form_error('nama') ?>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control p_input">
                                    <?= form_error('email') ?>
                                </div>
                                <div class="form-group">
                                    <label>NIM / NIPY</label>
                                    <input type="text" name="username" class="form-control p_input">
                                    <?= form_error('username') ?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control p_input">
                                    <?= form_error('password') ?>
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <select name="role" id="" class="form-control">
                                        <option value=""><-- Pilih Role Anda --></option>
                                        <option value="1">Mahasiswa</option>
                                        <option value="2">Dosen</option>
                                    </select>
                                    <?= form_error('role') ?>
                                </div>
                                <div class="form-group">
                                    <label>BIo</label>
                                    <textarea name="bio" class="form-control"></textarea>
                                    <?= form_error('bio') ?>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                                </div>
                                <p class="sign-up text-center">Already have an Account?<a href="<?= base_url('login') ?>"> Sign Up</a></p>
                                
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url('assets') ?>/admin/template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('assets') ?>/admin/template/assets/js/off-canvas.js"></script>
    <script src="<?= base_url('assets') ?>/admin/template/assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url('assets') ?>/admin/template/assets/js/misc.js"></script>
    <script src="<?= base_url('assets') ?>/admin/template/assets/js/settings.js"></script>
    <script src="<?= base_url('assets') ?>/admin/template/assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>