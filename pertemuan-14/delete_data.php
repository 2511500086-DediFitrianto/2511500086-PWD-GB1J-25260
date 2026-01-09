<?php
  session_start();
  require __DIR__ . '/koneksi.php';
  require_once __DIR__ . '/fungsi.php';

  $NIM = filter_input(INPUT_GET, 'NIM', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
  ]);

  if (!$NIM) {
    $_SESSION['flash_error1'] = 'Data Tidak Valid.';
    redirect_ke('read_biodata.php');
  }

  $stmt = mysqli_prepare($conn, "DELETE FROM tbl_biodata 
                                WHERE NIM = ?");
  if (!$stmt) {
    $_SESSION['flash_error1'] = 'Terjadi kesalahan sistem (prepare gagal).';
    redirect_ke('read_biodata.php');
  }

  mysqli_stmt_bind_param($stmt, "s", $NIM);

  if (mysqli_stmt_execute($stmt)) { #jika berhasil, kosongkan old value
    $_SESSION['flash_sukses1'] = 'Terima kasih, data Anda sudah dihapus.';
  } else { #jika gagal, simpan kembali old value dan tampilkan error umum
    $_SESSION['flash_error1'] = 'Data gagal dihapus. Silakan coba lagi.';
  }
  #tutup statement
  mysqli_stmt_close($stmt);

  redirect_ke('read_biodata.php');
  
  ?>