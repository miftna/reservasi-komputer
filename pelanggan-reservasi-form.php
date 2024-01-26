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
            <li class="breadcrumb-item active">tambah pelanggan</li>
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
                        <label for="nama" class="form-label">Nama Pelanggan</label>
                        <select class="form-select" name="id_pelanggan" id="id_pelanggan">
                            <option >pilih Pelanggan</option>
                            <?php
                            foreach($data_pelanggan as $data){
                            ?>
                            <option value="<?php
                             $data['id_pelanggan']
                              ?>">
                              <?php
                               echo $data['nama'] 
                               ?></option>
                            <?php
                         }
                         ?>
                        </select>
                    </div>

                        <!-- alamat -->
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                
                            <input type="text" name="alamat" id="alamat" class="form-control" required>
                        </div>

                        <!-- nomer telpon  -->
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No telpon</label>
                
                            <input type="text" name="no_hp" id="no_hp" class="form-control" required>
                        </div>

                        <!-- email  -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email </label>
                    
                            <input type="text" name="email" id="email" class="form-control" aria-describedby="emailHelp" required>
                    
                        </div>

                         <div class="mb-3">
                        <label for="nama" class="form-label">Nama Teknisi</label>
                        <select class="form-select" name="id_teknisi" id="id_teknisi  ">
                            <option value="">pilih teknisi</option>
                            <?php
                            foreach($data_teknisi as $data){
                            ?>
                            <option value="<?php
                             $data['id_teknisi']
                              ?>">
                              <?php
                               echo $data['nama_teknisi'] 
                               ?></option>
                            <?php
                         }
                         ?>
                        </select>
                    </div>

                        <!-- model -->
                        <div class="mb-3">
                            <label for="model" class="form-label">Model</label>
        
                            <input type="text" class="form-control" name="model" id="model" required>
                        </div>
                        
                        <!-- deskripsi -->
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
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
