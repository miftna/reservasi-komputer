<?php 
include'database.php';
$db = new Database();
include "atas-samping.php"
?>

<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Reservasi</h1>
                        <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Pelanggan</li>
                        </ol>                                                 -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- <i class="fas fa-table me-1"></i> -->
                                <!-- <button  class="btn btn-primary btn-block"> -->
                                    <!-- Tambah Data
                                </button> -->
                                <p><h5>Edit Reservasi</h5></p>
                            </div>
                            <div class="card-body">
                            <form action="proses_reservasi.php?aksi=update" method="post">
                                                <?php
                                                foreach($db->editReservasi($_GET['id']) as $data){
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
                                                <input class="form-control" id="inputkeluhan" type="text" name="keluhan" value="<?php echo $data['keluhan'] ?>"  />
                                                <label for="inputkeluhan">Keluhan</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                    <?php $status = $data['status']; ?>

                                                <!-- <input class="form-control" id="status" type="text" name="status" placeholder="status"  required/> -->
                                                <select name="status" id="status" class="form-select required">
                                                            <!-- <option value="" disabled selected>Pilih status</option> -->
                                                            <option <?php echo ($status == 'menunggu konfirmasi') ? "selected": "" ?>>Menunggu konfirmasi</option>
                                                            <option <?php echo ($status == 'dikonfirmasi') ? "selected": "" ?>>Dikonfirmasi</option>
                                                            <option <?php echo ($status == 'selesai') ? "selected": "" ?>>Selesai</option>
                                                    </select>
                                                <label for="status">Status</label>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="tanggal" type="datetime-local" name="tanggal" value="<?php echo $data['tanggal'] ?>"  />
                                                <label for="tanggal">Tanggal</label>
                                            </div>                                           
                                            <div class="mt-4 mb-0">
                                            <div >
                                                <button type="submit" name="ubah" class="btn btn-primary btn-block">Ubah</button>
                                                <!-- <button type="reset" name="batal" class="btn btn-secondary btn-block">Batal</button></div> -->
		                                    	<a href="reservasi.php" class="btn btn-secondary">Batal</a>
                                            </div>
                                                <?php
                                                }
                                                ?>
                                            
                                        </form>   
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
