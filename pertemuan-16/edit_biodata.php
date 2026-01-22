<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

/* 1. VALIDASI INPUT KodePen */
$KodePen = filter_input(INPUT_GET, 'KodePen', FILTER_SANITIZE_SPECIAL_CHARS);

if (!$KodePen) {
  $_SESSION['flash_error1'] = 'Akses tidak valid. Kode tidak ditemukan.';
  redirect_ke('read_biodata.php');
}

/* 2. AMBIL DATA DARI DATABASE */
$stmt = mysqli_prepare($conn, "SELECT * FROM tbl_biodata WHERE KodePen = ? LIMIT 1");
if (!$stmt) {
  $_SESSION['flash_error1'] = 'Kesalahan sistem pada query.';
  redirect_ke('read_biodata.php');
}

mysqli_stmt_bind_param($stmt, "s", $KodePen);
mysqli_stmt_execute($stmt);
$res  = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($res);
mysqli_stmt_close($stmt);

if (!$data) {
  $_SESSION['flash_error1'] = 'Data pengunjung tidak ditemukan.';
  redirect_ke('read_biodata.php');
}

/* 3. PRE-FILL FORM */
$flash_error1 = $_SESSION['flash_error1'] ?? '';
$old1 = $_SESSION['old1'] ?? [];
unset($_SESSION['flash_error1'], $_SESSION['old1']);

$NmPengunjung   = $old1['NmPengunjung']   ?? $data['NmPengunjung'];
$AlRmh          = $old1['AlRmh']          ?? $data['AlRmh'];
$TglKunjungan   = $old1['TglKunjungan']   ?? $data['TglKunjungan'];
$Hobi           = $old1['Hobi']           ?? $data['Hobi'];
$AlS            = $old1['AlS']            ?? $data['AlS'];
$Pekerjaan      = $old1['Pekerjaan']      ?? $data['Pekerjaan'];
$Nama_Orang_Tua = $old1['Nama_Orang_Tua'] ?? $data['Nama_Orang_Tua'];
$Nama_Pacar     = $old1['Nama_Pacar']     ?? $data['Nama_Pacar'];
$Mntn           = $old1['Mntn']           ?? $data['Mntn'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Biodata Pengunjung</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<header>
  <h1>Manajemen Biodata</h1>
</header>

<main>
<section id="biodata">
  <h2>Edit Biodata Pengunjung</h2>

  <?php if ($flash_error1): ?>
    <div style="padding:10px; background:#f8d7da; color:#721c24; margin-bottom:10px;">
      <?= htmlspecialchars($flash_error1) ?>
    </div>
  <?php endif; ?>

  <form action="update_biodata.php" method="POST">

    <label>
      <span>Kode Pengunjung:</span>
      <input type="text" value="<?= htmlspecialchars($KodePen) ?>" disabled>
      <input type="hidden" name="KodePen" value="<?= htmlspecialchars($KodePen) ?>">
    </label>

    <label>
      <span>Nama Pengunjung:</span>
      <input type="text" name="NmPengunjung" required
        value="<?= htmlspecialchars($NmPengunjung) ?>">
    </label>

    <label>
      <span>Alamat Rumah:</span>
      <input type="text" name="AlRmh" required
        value="<?= htmlspecialchars($AlRmh) ?>">
    </label>

    <label>
      <span>Tanggal Kunjungan:</span>
      <input type="date" name="TglKunjungan" required
        value="<?= htmlspecialchars($TglKunjungan) ?>">
    </label>

    <label>
      <span>Hobi:</span>
      <input type="text" name="Hobi"
        value="<?= htmlspecialchars($Hobi) ?>">
    </label>

    <label>
      <span>Asal SLTA:</span>
      <input type="text" name="AlS"
        value="<?= htmlspecialchars($AlS) ?>">
    </label>

    <label>
      <span>Pekerjaan:</span>
      <input type="text" name="Pekerjaan"
        value="<?= htmlspecialchars($Pekerjaan) ?>">
    </label>

    <label>
      <span>Nama Orang Tua:</span>
      <input type="text" name="Nama_Orang_Tua"
        value="<?= htmlspecialchars($Nama_Orang_Tua) ?>">
    </label>

    <label>
      <span>Nama Pacar:</span>
      <input type="text" name="Nama_Pacar"
        value="<?= htmlspecialchars($Nama_Pacar) ?>">
    </label>

    <label>
      <span>Nama Mantan:</span>
      <input type="text" name="Mntn"
        value="<?= htmlspecialchars($Mntn) ?>">
    </label>

    <button type="submit">Update</button>
    <a href="read_biodata.php" style="padding:8px; background:#eee; text-decoration:none;">Batal</a>

  </form>
</section>
</main>

</body>
</html>
