<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

/* 1. HANYA IZINKAN POST */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error1'] = 'Akses tidak valid.';
  redirect_ke('read_biodata.php');
}

/* 2. AMBIL DATA (NIM = STRING, BUKAN INT) */
$NIM            = trim($_POST['NIM'] ?? '');
$Nama_Lengkap   = trim($_POST['Nama_Lengkap'] ?? '');
$Tempat_Lahir   = trim($_POST['Tempat_Lahir'] ?? '');
$Tanggal_Lahir  = trim($_POST['Tanggal_Lahir'] ?? '');
$Hobi            = trim($_POST['Hobi'] ?? '');
$Pasangan        = trim($_POST['Pasangan'] ?? '');
$Pekerjaan       = trim($_POST['Pekerjaan'] ?? '');
$Nama_Orang_Tua  = trim($_POST['Nama_Orang_Tua'] ?? '');
$Nama_Kakak      = trim($_POST['Nama_Kakak'] ?? '');
$Nama_Adik       = trim($_POST['Nama_Adik'] ?? '');

/* 3. VALIDASI */
$errors = [];

if ($NIM === '')             $errors[] = 'NIM tidak valid.';
if ($Nama_Lengkap === '')    $errors[] = 'Nama lengkap wajib diisi.';
if ($Tempat_Lahir === '')    $errors[] = 'Tempat lahir wajib diisi.';
if ($Tanggal_Lahir === '')   $errors[] = 'Tanggal lahir wajib diisi.';

if (mb_strlen($Nama_Lengkap) < 3)
  $errors[] = 'Nama lengkap minimal 3 karakter.';

/* 4. JIKA ERROR */
if (!empty($errors)) {
  $_SESSION['old1'] = $_POST;
  $_SESSION['flash_error1'] = implode('<br>', $errors);
  redirect_ke('edit_biodata.php?NIM=' . urlencode($NIM));
}

/* 5. QUERY UPDATE */
$sql = "UPDATE tbl_bm SET
  Nama_Lengkap   = ?,
  Tempat_Lahir   = ?,
  Tanggal_Lahir  = ?,
  Hobi           = ?,
  Pasangan       = ?,
  Pekerjaan      = ?,
  Nama_Orang_Tua = ?,
  Nama_Kakak     = ?,
  Nama_Adik      = ?
WHERE NIM = ?";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
  $_SESSION['flash_error1'] = 'Kesalahan sistem (prepare).';
  redirect_ke('edit_biodata.php?NIM=' . urlencode($NIM));
}

mysqli_stmt_bind_param(
  $stmt,
  "ssssssssss",
  $Nama_Lengkap,
  $Tempat_Lahir,
  $Tanggal_Lahir,
  $Hobi,
  $Pasangan,
  $Pekerjaan,
  $Nama_Orang_Tua,
  $Nama_Kakak,
  $Nama_Adik,
  $NIM
);

/* 6. EKSEKUSI */
if (mysqli_stmt_execute($stmt)) {
  $_SESSION['flash_sukses1'] = 'Data biodata berhasil diperbarui.';
  redirect_ke('read_biodata.php');
} else {
  $_SESSION['flash_error1'] = 'Data gagal diperbarui.';
  redirect_ke('edit_biodata.php?NIM=' . urlencode($NIM));
}

mysqli_stmt_close($stmt);
