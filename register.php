<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Registrasi Akun</h3></div>
                                    <div class="card-body">
                                        <form action="user.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputname" type="text" name="username" placeholder="masukkan username" />
                                                <label for="inputname">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Create a password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="nama_toko" type="text" name="nama_toko" placeholder="masukkan nama toko" />
                                                <label for="nama_toko">Nama Toko</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" />
                                                <label for="email">Email Toko</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="telepon" type="text" name="telepon" placeholder="" />
                                                <label for="yelepon">NO. Telepon</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="deskripsi" type="text" name="deskripsi" placeholder="" />
                                                <label for="yelepon">Deskripsi Toko</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="level" type="text" name="level"  placeholder="admin" />
                                                <label for="level">Level</label>
                                            </div>
                                            
                                            <div class="mt-4 mb-0">
                                            <div class="d-grid"><button type="submit" name="register" class="btn btn-primary btn-block">Register</button></div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
