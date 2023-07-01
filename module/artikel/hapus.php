<?php
require_once('../../class/database.php');
require_once('../../class/form.php');

$database = new database();
$id = $_GET['id'];
$database->delete("mahasiswa", "id=" . $id);
header('location: ../../home');
?>