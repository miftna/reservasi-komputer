<?php
include "db/database.php";
$database = new Database();
$data_service = $database->Tampil_data_pelanggan_service();

include "layout/header.php";
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index-admin.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Tampil data</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                Data pelanggan
            </div>

            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No-Telpon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Perangkat</th>
                            <th scope="col">Model</th>
                            <th scope="col">Tanggal masuk</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <!-- <tfoot>
                        <tr>
                            <th >No</th>
                            <th >Nama</th>
                            <th >Jenis kelamin</th>
                            <th >Alamat</th>
                            <th >No-Telpon</th>
                            <th >Email</th>
                            <th >Perangkat</th>
                            <th >Model</th>
                            <th >Tanggal masuk</th>
                            <th >Deskripsi</th>
                            <th >Aksi</th>
                        </tr>
                    </tfoot> -->

                    <?php
                            $no = 1;
                            foreach($data_service as $data){
                        ?>
                    <tbody>
                    <tr>
                                <td><?= $no++?></td>
                                <td><?= $data['nama']?></td>
                                <td><?= $data['alamat']?></td>
                                <td><?= $data['jenis_kelamin']?></td>
                                <td><?= $data['no_hp']?></td>
                                <td><?= $data['email']?></td>
                                <td><?= $data['nama_perangkat']?></td>
                                <td><?= $data['model']?></td>
                                <td><?= $data['tanggal_masuk']?></td>
                                <td><?= $data['deskripsi']?></td>
                                <td>
                                    <a href="pelanggan-edit.php?Id_pelanggan=<?= $data['Id_pelanggan']; ?>&aksi=edit" class="btn btn-success">Edit</a>
                                    <a href="proses.php?Id_pelanggan=<?= $data['Id_pelanggan']; ?>&aksi=hapus"
                                            onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                    </tbody>
                    <?php
                        }
                        ?>
                </table>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include "layout/footer.php";

?>
