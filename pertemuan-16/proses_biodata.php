<?php
session_start();
require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error1'] = 'Akses tidak valid.';
  redirect_ke('index.php#biodata');
}

$KodePen        = bersihkan($_POST['txtKodePen'] ?? '');
$NmPengunjung   = bersihkan($_POST['txtNmPengunjung'] ?? '');
$AlRmh          = bersihkan($_POST['txtAlRmh'] ?? '');
$TglKunjungan   = bersihkan($_POST['txtTglKunjungan'] ?? '');
$Hobi           = bersihkan($_POST['txtHobi'] ?? '');
$AlS            = bersihkan($_POST['txtAS'] ?? '');
$Pekerjaan      = bersihkan($_POST['txtKerja'] ?? '');
$Nama_Orang_Tua = bersihkan($_POST['txtNmOrtu'] ?? '');
$Nama_Pacar     = bersihkan($_POST['txtNmPcr'] ?? '');
$Mntn           = bersihkan($_POST['txtNmMntn'] ?? '');

$errors1 = [];

if ($KodePen === '')        $errors1[] = 'Kode wajib diisi.';
if ($NmPengunjung === '')  $errors1[] = 'Nama wajib diisi.';
if ($AlRmh === '')         $errors1[] = 'Alamat wajib diisi.';
if ($TglKunjungan === '')  $errors1[] = 'Tanggal wajib diisi.';
if ($Hobi === '')          $errors1[] = 'Hobi wajib diisi.';
if ($AlS === '')           $errors1[] = 'SLTA wajib diisi.';
if ($Pekerjaan === '')     $errors1[] = 'Pekerjaan wajib diisi.';
if ($Nama_Orang_Tua === '')$errors1[] = 'Nama orang tua wajib diisi.';
if ($Nama_Pacar === '')    $errors1[] = 'Nama pacar wajib diisi.';
if ($Mntn === '')          $errors1[] = 'Nama mantan wajib diisi.';

if (mb_strlen($KodePen) < 5)       $errors1[] = 'Kode minimal 5 karakter.';
if (mb_strlen($NmPengunjung) < 3)  $errors1[] = 'Nama minimal 3 karakter.';

if (!empty($errors1)) {
  $_SESSION['old1'] = compact(
    'KodePen','NmPengunjung','AlRmh','TglKunjungan',
    'Hobi','AlS','Pekerjaan','Nama_Orang_Tua','Nama_Pacar','Mntn'
  );

  $_SESSION['flash_error1'] = implode('<br>', $errors1);
  redirect_ke('index.php#biodata');
}

/* insert data */
$sql = "INSERT INTO tbl_biodata 
(KodePen, NmPengunjung, AlRmh, TglKunjungan, Hobi, AlS, Pekerjaan, Nama_Orang_Tua, Nama_Pacar, Mntn)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
  $_SESSION['flash_error1'] = mysqli_error($conn);
  redirect_ke('index.php#biodata');
}

mysqli_stmt_bind_param(
  $stmt,
  "ssssssssss",
  $KodePen,
  $NmPengunjung,
  $AlRmh,
  $TglKunjungan,
  $Hobi,
  $AlS,
  $Pekerjaan,
  $Nama_Orang_Tua,
  $Nama_Pacar,
  $Mntn
);

if (mysqli_stmt_execute($stmt)) {
  unset($_SESSION['old1']);
  $_SESSION['flash_sukses1'] = 'Data biodata berhasil disimpan.';
} else {
  $_SESSION['flash_error1'] = mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
redirect_ke('index.php#biodata');
