<?php
$mod = @$_REQUEST['mod'];
switch ($mod) {
  case "":
    require("module/home.php");
    break;
  case "home":
    require("module/home.php");
    break;
  case "tambah":
    require("module/artikel/tambah.php");
    break;
  case "ubah":
    require("module/artikel/ubah.php");
    break;
  case "about":
    require("template/about.php");
    break;
  case "kontak":
    require("template/kontak.php");
    break;
  default:
    http_response_code(404);
    require("template/error.php");
}
?>