<?php
session_start();
$sesnim = $_POST["txtNim"];
$sesnama = $_POST["txtNamalengkap"];
$sestempatlahir = $_POST["txtTempatlahir"];
$sestanggallahir = $_POST["txttanggallahir"];
$seshobi = $_POST["txtHobi"];
$sespasangan = $_POST["txtPasangan"];
$sespekerjaan = $_POST["txtPekerjaan"];
$sesnamaortu = $_POST["txtOrtu"];
$sesnamakakak = $_POST["txtNamakakak"];
$sesnamaadik = $_POST["txtNamaadik"];
$_SESSION["sesnim"] = $sesnim;
header("Location: index.html")
?>