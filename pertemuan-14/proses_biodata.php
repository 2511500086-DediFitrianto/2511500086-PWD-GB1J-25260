<?php
session_start();

require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error1'] = 'Akses tidak valid.';
  redirect_ke('index.php#biodata');
  exit;
}

$NIM             = bersihkan($_POST['txtNim'] ?? '');
$Nama_Lengkap    = bersihkan($_POST['txtNmLengkap'] ?? '');
$Tempat_Lahir    = bersihkan($_POST['txtT4Lhr'] ?? '');
$Tanggal_Lahir   = bersihkan($_POST['txtTglLhr'] ?? '');
$Hobi            = bersihkan($_POST['txtHobi'] ?? '');
$Pasangan        = bersihkan($_POST['txtPasangan'] ?? '');
$Pekerjaan       = bersihkan($_POST['txtKerja'] ?? '');
$Nama_Orang_Tua  = bersihkan($_POST['txtNmOrtu'] ?? '');
$Nama_Kakak      = bersihkan($_POST['txtNmKakak'] ?? '');
$Nama_Adik       = bersihkan($_POST['txtNmAdik'] ?? '');

$errors1 = [];

if ($NIM === '')            $errors1[] = 'NIM wajib diisi.';
elseif (mb_strlen($NIM) < 5) $errors1[] = 'NIM minimal 5 karakter.';

if ($Nama_Lengkap === '')   $errors1[] = 'Nama lengkap wajib diisi.';
elseif (mb_strlen($Nama_Lengkap) < 3) $errors1[] = 'Nama lengkap minimal 3 karakter.';

if ($Tempat_Lahir === '')   $errors1[] = 'Tempat lahir wajib diisi.';
if ($Tanggal_Lahir === '')  $errors1[] = 'Tanggal lahir wajib diisi.';
if ($Hobi === '')           $errors1[] = 'Hobi wajib diisi.';
if ($Pasangan === '')       $errors1[] = 'Pasangan wajib diisi.';
if ($Pekerjaan === '')      $errors1[] = 'Pekerjaan wajib diisi.';
if ($Nama_Orang_Tua === '') $errors1[] = 'Nama orang tua wajib diisi.';
if ($Nama_Kakak === '')     $errors1[] = 'Nama kakak wajib diisi.';
if ($Nama_Adik === '')      $errors1[] = 'Nama adik wajib diisi.';

if (!empty($errors1)) {
  $_SESSION['old1'] = [
    'NIM'             => $NIM,
    'Nama_Lengkap'    => $Nama_Lengkap,
    'Tempat_Lahir'    => $Tempat_Lahir,
    'Tanggal_Lahir'   => $Tanggal_Lahir,
    'Hobi'            => $Hobi,
    'Pasangan'        => $Pasangan,
    'Pekerjaan'       => $Pekerjaan,
    'Nama_Orang_Tua'  => $Nama_Orang_Tua,
    'Nama_Kakak'      => $Nama_Kakak,
    'Nama_Adik'       => $Nama_Adik
  ];

  $_SESSION['flash_error1'] = implode('<br>', $errors1);
  redirect_ke('index.php#biodata');
  exit;
}

$sql = "INSERT INTO tbl_bm
(NIM, Nama_Lengkap, Tempat_Lahir, Tanggal_Lahir, Hobi, Pasangan, Pekerjaan, Nama_Orang_Tua, Nama_Kakak, Nama_Adik)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
  $_SESSION['flash_error1'] = 'Terjadi kesalahan sistem: ' . mysqli_error($conn);
  redirect_ke('index.php#biodata');
  exit;
}

mysqli_stmt_bind_param(
  $stmt,
  "ssssssssss",
  $NIM,
  $Nama_Lengkap,
  $Tempat_Lahir,
  $Tanggal_Lahir,
  $Hobi,
  $Pasangan,
  $Pekerjaan,
  $Nama_Orang_Tua,
  $Nama_Kakak,
  $Nama_Adik
);

if (mysqli_stmt_execute($stmt)) {
  unset($_SESSION['old1']);
  $_SESSION['flash_sukses1'] = 'Data biodata berhasil disimpan.';
} else {
  $_SESSION['flash_error1'] = 'Data gagal disimpan: ' . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
redirect_ke('index.php#biodata');
exit;
