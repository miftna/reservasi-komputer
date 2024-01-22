<?php 
include "atas-samping.php"

?>

<div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah reserpasi</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Reservasi</li>
                        </ol>                                                
                        <div class="card mb-4">
            
                            <div class="card-body">
                                

                            <form action="proses_reservasi.php?aksi=tambah" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputname" type="text" name="nama_pelanggan" placeholder="masukkan nama pelanggan"  required/>
                                                <label for="inputname">Nama Pelanggan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputkeluhan" type="text" name="keluhan" placeholder=" keluhan"  required/>
                                                <label for="inputkeluhan">Keluhan</label>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                                <!-- <input class="form-control" id="status" type="text" name="status" placeholder="status"  required/> -->
                                                <select name="status" id="status" class="form-select required">
                                                            <option value="" disabled selected>Pilih status</option>
                                                            <option value="menunggu konfirmasi">Menunggu konfirmasi</option>
                                                            <option value="dikonfirmasi">Dikonfirmasi</option>
                                                            <option value="selesai">Selesai</option>
                                                    </select>
                                                <label for="status">Status</label>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="tanggal" type="datetime-local" name="tanggal" placeholder="tanggal"  required/>
                                                <label for="tanggal">Tanggal</label>
                                            </div>                                           
                                            <div class="mt-4 mb-0">
                                            <div >
                                                <button type="submit" name="simpan" class="btn btn-primary btn-block">Simpan</button>
                                                <!-- <button type="reset" name="batal" class="btn btn-secondary btn-block">Batal</button></div> -->
		                                    	<a href="index-admin.php" class="btn btn-secondary">Batal</a>
                                            </div>
                                            
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
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>

    </html>
