<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

$sql = "SELECT * FROM tbl_biodata ORDER BY KodePen ASC";
$q = mysqli_query($conn, $sql);

if (!$q) {
  die("Query error: " . mysqli_error($conn));
}

$flash_sukses1 = $_SESSION['flash_sukses1'] ?? '';
$flash_error1  = $_SESSION['flash_error1'] ?? '';
unset($_SESSION['flash_sukses1'], $_SESSION['flash_error1']);
?>

<?php if ($flash_sukses1): ?>
  <div style="padding:10px; margin-bottom:10px; background:#d4edda; color:#155724;">
    <?= $flash_sukses1 ?>
  </div>
<?php endif; ?>

<?php if ($flash_error1): ?>
  <div style="padding:10px; margin-bottom:10px; background:#f8d7da; color:#721c24;">
    <?= $flash_error1 ?>
  </div>
<?php endif; ?>

<table border="1" cellpadding="8" cellspacing="0" width="100%">
  <tr>
    <th>No</th>
    <th>Aksi</th>
    <th>Kode</th>
    <th>Nama Pengunjung</th>
    <th>Alamat</th>
    <th>Tanggal Kunjungan</th>
    <th>Hobi</th>
    <th>Asal SLTA</th>
    <th>Pekerjaan</th>
    <th>Nama Orang Tua</th>
    <th>Nama Pacar</th>
    <th>Nama Mantan</th>
  </tr>

  <?php $no = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($q)): ?>
    <tr>
      <td><?= $no++ ?></td>
      <td>
        <a href="edit_biodata.php?KodePen=<?= urlencode($row['KodePen']) ?>">Edit</a> |
        <a onclick="return confirm('Hapus data <?= htmlspecialchars($row['NmPengunjung']) ?>?')"
           href="proses_delete.php?KodePen=<?= urlencode($row['KodePen']) ?>">
           Hapus
        </a>
      </td>
      <td><?= htmlspecialchars($row['KodePen']) ?></td>
      <td><?= htmlspecialchars($row['NmPengunjung']) ?></td>
      <td><?= htmlspecialchars($row['AlRmh']) ?></td>
      <td><?= htmlspecialchars($row['TglKunjungan']) ?></td>
      <td><?= htmlspecialchars($row['Hobi']) ?></td>
      <td><?= htmlspecialchars($row['AlS']) ?></td>
      <td><?= htmlspecialchars($row['Pekerjaan']) ?></td>
      <td><?= htmlspecialchars($row['Nama_Orang_Tua']) ?></td>
      <td><?= htmlspecialchars($row['Nama_Pacar']) ?></td>
      <td><?= htmlspecialchars($row['Mntn']) ?></td>
    </tr>
  <?php endwhile; ?>
</table>
