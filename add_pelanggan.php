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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Tambah Pelanggan</h3></div>
                                    <div class="card-body">
                                        <form action="proses_reservasi.php?aksi=tambahpelanggan" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputname" type="text" name="nama_pelanggan" placeholder="masukkan nama pelanggan"  required/>
                                                <label for="inputname">Nama Pelanggan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputjk" type="text" name="jk" placeholder=" jk"  required/>
                                                <label for="inputjk">Jenis Kelamin</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputhp" type="text" name="hp" placeholder=" hp"  required/>
                                                <label for="inputhp">No. Hp</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" type="text" name="email" placeholder="email"  required/>
                                                <label for="email">email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="alamat" type="text" name="alamat" placeholder="alamat"  required/>
                                                <label for="alamat">Alamat</label>
                                            </div>                                           
                                            <div class="mt-4 mb-0">
                                            <div >
                                                <button type="submit" name="simpan" class="btn btn-primary btn-block">Simpan</button>
                                                <!-- <button type="reset" name="batal" class="btn btn-secondary btn-block">Batal</button></div> -->
		                                    	<a href="data_pelanggan.php" class="btn btn-secondary">Batal</a>
                                            </div>
                                            
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
