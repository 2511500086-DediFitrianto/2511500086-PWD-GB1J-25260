<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

/* 1. HANYA IZINKAN POST */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error1'] = 'Akses tidak valid.';
  redirect_ke('read_biodata.php');
}

/* 2. AMBIL DATA */
$KodePen        = trim($_POST['KodePen'] ?? '');
$NmPengunjung   = trim($_POST['NmPengunjung'] ?? '');
$AlRmh          = trim($_POST['AlRmh'] ?? '');
$TglKunjungan   = trim($_POST['TglKunjungan'] ?? '');
$Hobi           = trim($_POST['Hobi'] ?? '');
$AlS            = trim($_POST['AlS'] ?? '');
$Pekerjaan      = trim($_POST['Pekerjaan'] ?? '');
$Nama_Orang_Tua = trim($_POST['Nama_Orang_Tua'] ?? '');
$Nama_Pacar     = trim($_POST['Nama_Pacar'] ?? '');
$Mntn           = trim($_POST['Mntn'] ?? '');

/* 3. VALIDASI */
$errors = [];

if ($KodePen === '')        $errors[] = 'Kode pengunjung tidak valid.';
if ($NmPengunjung === '')  $errors[] = 'Nama pengunjung wajib diisi.';
if ($AlRmh === '')         $errors[] = 'Alamat rumah wajib diisi.';
if ($TglKunjungan === '')  $errors[] = 'Tanggal kunjungan wajib diisi.';

if (mb_strlen($NmPengunjung) < 3)
  $errors[] = 'Nama pengunjung minimal 3 karakter.';

/* 4. JIKA ERROR */
if (!empty($errors)) {
  $_SESSION['old1'] = $_POST;
  $_SESSION['flash_error1'] = implode('<br>', $errors);
  redirect_ke('edit_biodata.php?KodePen=' . urlencode($KodePen));
}

/* 5. QUERY UPDATE */
$sql = "UPDATE tbl_biodata SET
  NmPengunjung   = ?,
  AlRmh          = ?,
  TglKunjungan   = ?,
  Hobi           = ?,
  AlS            = ?,
  Pekerjaan      = ?,
  Nama_Orang_Tua = ?,
  Nama_Pacar     = ?,
  Mntn           = ?
WHERE KodePen = ?";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
  $_SESSION['flash_error1'] = mysqli_error($conn);
  redirect_ke('edit_biodata.php?KodePen=' . urlencode($KodePen));
}

mysqli_stmt_bind_param(
  $stmt,
  "ssssssssss",
  $NmPengunjung,
  $AlRmh,
  $TglKunjungan,
  $Hobi,
  $AlS,
  $Pekerjaan,
  $Nama_Orang_Tua,
  $Nama_Pacar,
  $Mntn,
  $KodePen
);

/* 6. EKSEKUSI */
if (mysqli_stmt_execute($stmt)) {
  $_SESSION['flash_sukses1'] = 'Data biodata berhasil diperbarui.';
  redirect_ke('read_biodata.php');
} else {
  $_SESSION['flash_error1'] = mysqli_stmt_error($stmt);
  redirect_ke('edit_biodata.php?KodePen=' . urlencode($KodePen));
}

mysqli_stmt_close($stmt);
