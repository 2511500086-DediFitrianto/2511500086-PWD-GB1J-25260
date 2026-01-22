<?php
session_start();

require __DIR__ . '/koneksi.php';
require __DIR__ . '/fungsi.php';

$NIM = filter_input(INPUT_GET, 'NIM', FILTER_SANITIZE_SPECIAL_CHARS);

if (!$NIM) {
  $_SESSION['flash_error1'] = 'Akses tidak valid. NIM tidak ditemukan.';
  redirect_ke('read_biodata.php');
  exit;
}

$sql = "SELECT 
  Nama_Lengkap, Tempat_Lahir, Tanggal_Lahir, Hobi, Pasangan, 
  Pekerjaan, Nama_Orang_Tua, Nama_Kakak, Nama_Adik
FROM tbl_bm WHERE NIM = ? LIMIT 1";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
  $_SESSION['flash_error1'] = 'Kesalahan sistem (prepare): ' . mysqli_error($conn);
  redirect_ke('read_biodata.php');
  exit;
}

mysqli_stmt_bind_param($stmt, "s", $NIM);
mysqli_stmt_execute($stmt);

mysqli_stmt_bind_result(
  $stmt,
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

if (!mysqli_stmt_fetch($stmt)) {
  $_SESSION['flash_error1'] = 'Data mahasiswa tidak ditemukan.';
  redirect_ke('read_biodata.php');
  exit;
}

mysqli_stmt_close($stmt);

$flash_error1 = $_SESSION['flash_error1'] ?? '';
$old1 = $_SESSION['old1'] ?? [];
unset($_SESSION['flash_error1'], $_SESSION['old1']);

$Nama_Lengkap   = $old1['Nama_Lengkap'] ?? $Nama_Lengkap;
$Tempat_Lahir   = $old1['Tempat_Lahir'] ?? $Tempat_Lahir;
$Tanggal_Lahir  = $old1['Tanggal_Lahir'] ?? $Tanggal_Lahir;
$Hobi           = $old1['Hobi'] ?? $Hobi;
$Pasangan       = $old1['Pasangan'] ?? $Pasangan;
$Pekerjaan      = $old1['Pekerjaan'] ?? $Pekerjaan;
$Nama_Orang_Tua = $old1['Nama_Orang_Tua'] ?? $Nama_Orang_Tua;
$Nama_Kakak     = $old1['Nama_Kakak'] ?? $Nama_Kakak;
$Nama_Adik      = $old1['Nama_Adik'] ?? $Nama_Adik;
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Biodata Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
      <h1>Sistem Akademik</h1>
      <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">&#9776;</button>
      <nav>
        <ul>
          <li><a href="read_biodata.php">Data Mahasiswa</a></li>
          <li><a href="#">Beranda</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section id="biodata">
        <h2>Edit Biodata Mahasiswa</h2>

        <?php if (!empty($flash_error1)): ?>
          <div style="padding:10px; margin-bottom:10px; background:#f8d7da; color:#721c24; border-radius:6px; border: 1px solid #f5c6cb;">
            <?= htmlspecialchars($flash_error1); ?>
          </div>
        <?php endif; ?>
        
        <form action="update_biodata.php" method="POST">
        
          <label>
            <span>NIM:</span>
            <input type="text" value="<?= htmlspecialchars($NIM); ?>" disabled>
            <input type="hidden" name="NIM" value="<?= htmlspecialchars($NIM); ?>">
          </label>
        
          <label>
            <span>Nama Lengkap:</span>
            <input type="text" name="Nama_Lengkap" required
              value="<?= htmlspecialchars($Nama_Lengkap); ?>">
          </label>
        
          <label>
            <span>Tempat Lahir:</span>
            <input type="text" name="Tempat_Lahir" required
              value="<?= htmlspecialchars($Tempat_Lahir); ?>">
          </label>
        
          <label>
            <span>Tanggal Lahir:</span>
            <input type="date" name="Tanggal_Lahir" required
              value="<?= htmlspecialchars($Tanggal_Lahir); ?>">
          </label>
        
          <label>
            <span>Hobi:</span>
            <input type="text" name="Hobi"
              value="<?= htmlspecialchars($Hobi); ?>">
          </label>
        
          <label>
            <span>Pasangan:</span>
            <input type="text" name="Pasangan"
              value="<?= htmlspecialchars($Pasangan); ?>">
          </label>
        
          <label>
            <span>Pekerjaan:</span>
            <input type="text" name="Pekerjaan"
              value="<?= htmlspecialchars($Pekerjaan); ?>">
          </label>
        
          <label>
            <span>Nama Orang Tua:</span>
            <input type="text" name="Nama_Orang_Tua"
              value="<?= htmlspecialchars($Nama_Orang_Tua); ?>">
          </label>
        
          <label>
            <span>Nama Kakak:</span>
            <input type="text" name="Nama_Kakak"
              value="<?= htmlspecialchars($Nama_Kakak); ?>">
          </label>
        
          <label>
            <span>Nama Adik:</span>
            <input type="text" name="Nama_Adik"
              value="<?= htmlspecialchars($Nama_Adik); ?>">
          </label>
        
          <button type="submit">Update</button>
            <button type="reset">Reset</button>
            <a href="read_biodata.php" class="btn-back" style="text-decoration: none; padding: 10px; background: #eee; border-radius: 4px; color: #333;">Batal</a>

        </form>
      </section>
    </main>

    <script src="script.js"></script>
</body>
</html>