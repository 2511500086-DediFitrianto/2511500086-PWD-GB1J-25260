<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  $sql = "SELECT * FROM tbl_biodata";
  $q = mysqli_query($conn, $sql);
  if (!$q) {
    die("Query error: " . mysqli_error($conn));
  }
?>

<?php
  $flash_sukses1 = $_SESSION['flash_sukses1'] ?? ''; #jika query sukses
  $flash_error1  = $_SESSION['flash_error1'] ?? ''; #jika ada error
  #bersihkan session ini
  unset($_SESSION['flash_sukses1'], $_SESSION['flash_error1']); 
?>

<?php if (!empty($flash_sukses1)): ?>
        <div style="padding:10px; margin-bottom:10px; 
          background:#d4edda; color:#155724; border-radius:6px;">
          <?= $flash_sukses1; ?>
        </div>
<?php endif; ?>

<?php if (!empty($flash_error1)): ?>
        <div style="padding:10px; margin-bottom:10px; 
          background:#f8d7da; color:#721c24; border-radius:6px;">
          <?= $flash_error1; ?>
        </div>
<?php endif; ?>

<table border="1" cellpadding="8" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Aksi</th>
    <th>ID</th>
    <th>NIM</th>
    <th>Nama Lengkap</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Hobi</th>
    <th>Pasangan</th>
    <th>Pekerjaan</th>
    <th>Nama Orang Tua</th>
    <th>Nama Kakak</th>
    <th>Nama Adik</th>
  </tr>
  <?php $i = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($q)): ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="edit_biodata.php?NIM=<?= urlencode($row['NIM']); ?>">Edit</a>
        <a onclick="return confirm('Hapus <?= htmlspecialchars($row['NIM']); ?>?')" href="delete_data.php?NIM=<?= $row['NIM']; ?>">Delete</a>
    </td>
      <td><?= $i++; ?></td>
      <td><?= htmlspecialchars($row['NIM']); ?></td>
      <td><?= htmlspecialchars($row['Nama_Lengkap']); ?></td>
      <td><?= htmlspecialchars($row['Tempat_Lahir']); ?></td>
      <td><?= htmlspecialchars($row['Tanggal_Lahir']); ?></td>
      <td><?= htmlspecialchars($row['Hobi']); ?></td>
      <td><?= htmlspecialchars($row['Pasangan']); ?></td>
      <td><?= htmlspecialchars($row['Pekerjaan']); ?></td>
      <td><?= htmlspecialchars($row['Nama_Orang_Tua']); ?></td>
      <td><?= htmlspecialchars($row['Nama_Kakak']); ?></td>
      <td><?= htmlspecialchars($row['Nama_Adik']); ?></td>
    </tr>
  <?php endwhile; ?>
</table>