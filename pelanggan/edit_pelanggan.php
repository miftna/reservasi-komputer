<?php 
include'database.php';
$db = new Database();
?>


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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Pelanggan</h3></div>
                                    <div class="card-body">
                                        <form action="proses_reservasi.php?aksi=updatePelanggan" method="post">
                                                <?php
                                                foreach($db->editPelanggan($_GET['id']) as $data){
                                                ?>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputid" type="hidden" name="id" value="<?php echo $data['id'] ?>"  />
                                                <label for="inputname">Id Pelanggan</label>
                                            </div>                                           
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputname" type="text" name="nama_pelanggan" value="<?php echo $data['nama_pelanggan'] ?>"  />
                                                <label for="inputname">Nama Pelanggan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputjk" type="text" name="jk" value="<?php echo $data['jk'] ?>"  />
                                                <label for="inputjk">Jenis Kelamin</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="hp" type="text" name="hp" value="<?php echo $data['hp'] ?>"  />
                                                <label for="hp">No. Hp</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" type="text" name="email" value="<?php echo $data['email'] ?>"  />
                                                <label for="email">email</label>
                                            </div>          
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="alamat" type="text" name="alamat" value="<?php echo $data['alamat'] ?>"  />
                                                <label for="alamat">Alamat</label>
                                            </div>                                   
                                            <div class="mt-4 mb-0">
                                            <div >
                                                <button type="submit" name="ubah" class="btn btn-primary btn-block">Ubah</button>
                                                <!-- <button type="reset" name="batal" class="btn btn-secondary btn-block">Batal</button></div> -->
		                                    	<a href="data_pelanggan.php" class="btn btn-secondary">Batal</a>
                                            </div>
                                                <?php
                                                }
                                                ?>
                                            
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
