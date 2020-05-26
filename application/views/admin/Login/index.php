<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Page Title - SB Admin</title>
    <link href="<?= base_url('assets/dist') ?>/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <?= $this->session->flashdata('message'); ?>
                                    <form action="<?= base_url('admin/login'); ?>" method="post">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Nama Pengguna</label>
                                            <input name="username" class="form-control py-4" id="inputEmailAddress" type="text" placeholder="" />
                                        </div>
                                        <?= form_error('username', '<small class="text-danger pl-1">', '</small>'); ?>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Sandi</label>
                                            <input name="password" class="form-control py-4" id="inputPassword" type="password" placeholder="" />
                                        </div>
                                        <?= form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
                                        <div class="form-group d-flex align-items-left justify-content-between mt-4 mb-0"><button class="btn btn-primary">Login</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2019</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/dist') ?>/js/scripts.js"></script>
</body>

</html>