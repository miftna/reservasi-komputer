<?php
include 'database.php';
$db = new Database();
$data_reservasi = $db->tampilReservasi();
include "atas-samping.php"

?>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Home</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">sistem informasi reservasi komputer</li>
                        </ol>                                                
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- <i class="fas fa-table me-1"></i> -->
                                <!-- <button  class="btn btn-primary btn-block"> -->
                                    <a href="reservasi.php" class="btn btn-primary ">Lihat semua</a>
                                    <!-- Tambah Data
                                </button> -->
                            </div>
                            <div class="card-body">
                                <table  class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Keluhan</th>
                                            <th>status</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                            <?php
                                                $no = 1;
                                                foreach($data_reservasi as $row){
                                                ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['nama_pelanggan']; ?></td>
                                                <td><?php echo $row['keluhan']; ?></td>
                                                <td>
                                                    <span style="background-color: <?php echo ($row['status'] == 'menunggu konfirmasi') ? 'var(--bs-danger)' : (($row['status'] == 'dikonfirmasi') ? 'var(--bs-warning)' : 'var(--bs-success)'); ?>; color: white; border-radius: 4px; padding: 4px; font-weight: bold;">
                                                        <?php echo $row['status']; ?>
                                                    </span>
                                                </td>
                                                <!-- <td><?php echo $row['status']; ?></td> -->
                                                <td><?php echo $row['tanggal']; ?></td>
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
