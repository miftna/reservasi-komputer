<?php
include "db/database.php";
$database = new Database();
$data_pelanggan = $database->Data_Pelanggan();
$data_teknisi= $database->Data_teknisi();
include "layout/header.php";

?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index-admin.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Reservasi</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>

            <div class="card-body">
               <!-- konten -->
               <form action="proses.php?aksi=tambahreservasi" method="post">
                    <table>
                        <!-- nama -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
        
                            <input type="text" class="form-control" name="nama" id="nama">
                        </div>
                    
                        <div class="mb-3">
                            <label for="jk">Jenis Kelamin</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="jk" id="jenis_kelamin_l"  value="Laki-laki" >
                                        <label for="jenis_kelamin_l" class="form-check-label">Laki-laki</label>
                                    </div>
                                        <div class="form-check form-check-inline">
                                        <input type="radio" name="jk" id="jenis_kelamin_p" value="Perempuan"  >
                                        <label for="jenis_kelamin_p" class="form-check-label">Perempuan</label>
                                    </div>
                            </div>
                        </div>

                        <!-- alamat -->
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                
                            <input type="text" name="alamat" id="alamat" class="form-control">
                        </div>

                        <!-- nomer telpon  -->
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No telpon</label>
                
                            <input type="text" name="no_hp" id="no_hp" class="form-control">
                        </div>

                        <!-- email  -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email </label>
                    
                            <input type="text" name="email" id="email" class="form-control" aria-describedby="emailHelp">
                    
                        </div>
                     
                      
                    </table>
                    <button type="submit" onclick="return confirm('Anda yakin data yang anda masukan ini benar?')" class="btn btn-primary">simpan</button>
                </form>
        
            </div>
        </div>
    </div>
</main>
<?php
include "layout/footer.php";
?>
