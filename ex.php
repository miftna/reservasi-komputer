<?php 
include'database.php';
$db = new database();
$data_reservasi = $db->tampil();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Daftar Reservasi</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Keluhan</th>
            <th>status</th>
            <th>Tanggal</th>
            <!-- <th>Sekolah Asal</th> -->
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
       
        foreach($data_reservasi as $d){
            echo "<tr>";

            echo "<td>".$d['id']."</td>";
            echo "<td>".$d['nama_pelanggan']."</td>";
            echo "<td>".$d['keluhan']."</td>";
            echo "<td>".$d['status']."</td>";
            echo "<td>".$d['tanggal']."</td>";
           

            echo "<td>";
            echo "<a href='form-edit.php?id=".$d['id']." &aksi=edit'>Edit</a> | ";
            echo "<a href='proses.php?id=".$d['id']." &aksi=hapus' >Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?> 

    </tbody>
    </table>

    <!-- <p>Total: <?php echo mysqli_num_rows($d) ?></p> -->

    </body>
</html>