<?php
session_start();
require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

if (!isset($_GET['KodePen'])) {
  $_SESSION['flash_error1'] = 'Akses tidak valid.';
  redirect_ke('read_biodata.php');
}

$KodePen = bersihkan($_GET['KodePen']);

if ($KodePen === '') {
  $_SESSION['flash_error1'] = 'Kode pengunjung tidak valid.';
  redirect_ke('read_biodata.php');
}

$stmt = mysqli_prepare($conn, "DELETE FROM tbl_biodata WHERE KodePen = ?");
if (!$stmt) {
  $_SESSION['flash_error1'] = 'Kesalahan sistem (prepare).';
  redirect_ke('read_biodata.php');
}

mysqli_stmt_bind_param($stmt, "s", $KodePen);

if (mysqli_stmt_execute($stmt)) {
  $_SESSION['flash_sukses1'] = 'Data biodata berhasil dihapus.';
} else {
  $_SESSION['flash_error1'] = 'Gagal menghapus data biodata.';
}

mysqli_stmt_close($stmt);
redirect_ke('read_biodata.php');
