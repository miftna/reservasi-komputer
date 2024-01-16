<?php 
include'database.php';
$db = new Database();
$data_toko = $db->tampilToko();

?>


<!DOCTYPE html>
<?php 
include "atas-samping.php";
?>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Profil Toko</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Toko</li>
                        </ol>                                                
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- <i class="fas fa-table me-1"></i> -->
                                <!-- <button  class="btn btn-primary btn-block"> -->
                                    <!-- <a href="add_pelanggan.php" class="btn btn-primary ">Tambah Data</a> -->
                                    <!-- Tambah Data
                                </button> -->
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Toko</th>
                                            <th>Telepon Toko</th>
                                            <th>Email Toko</th>
                                            <th>Alamat Toko</th>
                                            <th>Rating</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                            <?php
                                                $no = 1;
                                                foreach($data_toko as $row){
                                                ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['nama_toko']; ?></td>
                                                <td><?php echo $row['telepon_toko']; ?></td>
                                                <td><?php echo $row['email_toko']; ?></td>
                                                <td><?php echo $row['alamat_toko']; ?></td>
                                                <td><?php echo $row['rating']; ?></td>


                                                
                                                <td>
                                                        <a href="edit_pelanggan.php?id=<?php echo $row['id']; ?>&aksi=updatePelanggan" class="btn btn-warning btn-sm">Edit</a>
                                                        <!-- <a href="proses_reservasi.php?id=<?php echo $row['id']; ?>&aksi=hapusPelanggan" class="btn btn-danger btn-sm" -->
                                                            <!-- onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a></td> -->
                                            </tr>
                                            <?php
                                                }
                                                ?>
                                        

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>