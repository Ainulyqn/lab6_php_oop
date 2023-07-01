<?php
require_once('class/database.php');
require_once('class/form.php');


$database = new database();
if (isset($_POST['create'])) {
    $data = [
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat']
    ];
    $database->insert("mahasiswa", $data);
    header("location: home");
}

$form = new form("", "create");
$form->addField("nim", "Nim");
$form->addField("nama", "Nama");
$form->addField("alamat", "Alamat");
$form->displayForm();

?>