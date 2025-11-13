<?php
session_start();
$sesnim = $_POST["txtNim"];
$sesnama = $_POST["txtNamalengkap"];
$sestempatlahir = $_POST["txtTempatlahir"];
$sestanggal = $_POST["txtTanggal"];
$seshobi = $_POST["txtHobi"];
$sespasangan = $_POST["txtPasangan"];
$sespekerjaan = $_POST["txtPekerjaan"];
$sesnamaortu = $_POST["txtOrtu"];
$sesnamakakak = $_POST["txtNamakakak"];
$sesnamaadik = $_POST["txtNamaadik"];
$_SESSION["sesNim"] = $sesnim;
$_SESSION["txtNamalengkap"] = $sesnama;
$_SESSION["txtTempatlahir"] = $sestempatlahir;
$_SESSION["txtTanggal"] = $sestanggal;
$_SESSION["txtHobi"] = $seshobi;
$_SESSION["txtPasangan"] = $sespasangan;
$_SESSION["txtPekerjaan"] = $sespekerjaan;
$_SESSION["txtOrtu"] = $sesnamaortu;
$_SESSION["txtNamakakak"] = $sesnamakakak;
$_SESSION["txtNamaadik"] = $sesnamaadik;
header("Location: index.php");
exit();
?>