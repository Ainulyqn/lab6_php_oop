<?php
require_once('../../class/database.php');
require_once('../../class/form.php');


$database = new database();
$id = $_GET['id'];
$data = $database->get("mahasiswa", "where id=" . $id);

$database = new database();
if (isset($_POST['update'])) {
    $data = [
        'nim' => $_POST["nim"],
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat']
    ];
    $database->update("mahasiswa", $data, "id=" . $id);
    header("location: ../home");
}

$form = new form("", "update");
$form->addField("nim", "Nim", $data["nim"]);
$form->addField("nama", "Nama", $data["nama"]);
$form->addField("alamat", "Alamat", $data["alamat"]);
$form->displayForm();
?>