<?php
require_once('class/database.php');
require_once('class/form.php');
$database = new database();
$data = $database->gets("mahasiswa");
?>

<?php require('template/header.php'); ?>
<div class="main">
    <h2>Praktikum 6</h2>
    <h2>Struktur Modular dan Class</h2>
    <a class="button tambah" href="tambah">TAMBAH DATA</a>
    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>UBAH</th>
            <th>HAPUS</th>
        </tr>
        <?php
        for ($i = 0; $i < count($data); $i++) {
        ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $data[$i]["nim"]; ?></td>
                <td><?= $data[$i]['nama']; ?></td>
                <td><?= $data[$i]['alamat']; ?></td>
                <td><a class="btnUpdate" href="module/artikel/ubah.php?id=<?= $data[$i]["id"] ?>">UBAH</a></td>
                <td><a class="btnDelete" href="module/artikel/hapus.php?id=<?= $data[$i]["id"] ?>">HAPUS</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>

<?php require('template/footer.php'); 
?>