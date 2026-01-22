<?php
  session_start();
  require __DIR__ . '/koneksi.php';
  require_once __DIR__ . '/fungsi.php';

  /* LOGIKA 1: PENGHAPUSAN MAHASISWA (NIM)
    Jika terdapat parameter 'nim' di URL
  */
  if (isset($_GET['NIM'])) {
    $NIM = bersihkan($_GET['NIM']);

    if (empty($NIM)) {
        $_SESSION['flash_error1'] = 'NIM tidak valid.';
        redirect_ke('read_biodata.php');
    }

    $stmt = mysqli_prepare($conn, "DELETE FROM tbl_bm WHERE NIM = ?");
    mysqli_stmt_bind_param($stmt, "s", $NIM);

    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['flash_sukses1'] = 'Data mahasiswa berhasil dihapus.';
    } else {
        $_SESSION['flash_error1'] = 'Gagal menghapus data mahasiswa.';
    }

    mysqli_stmt_close($stmt);
    redirect_ke('read_biodata.php');
  }