<?php
session_start();

$sesnama = "";
if (isset($_SESSION["sesnama"])):
  $sesnama = $_SESSION["sesnama"];
endif;

$sesemail = "";
if (isset($_SESSION["sesemail"])):
  $sesemail = $_SESSION["sesemail"];
endif;

$sespesan = "";
if (isset($_SESSION["sespesan"])):
  $sespesan = $_SESSION["sespesan"];
endif;
?>

<?php
$sesnim = $_SESSION["sesNim"] ?? "";
$sesnama = $_SESSION["txtNamalengkap"] ?? "";
$sestempatlahir = $_SESSION["txtTempatlahir"] ?? "";
$sestanggal = $_SESSION["txtTanggal"] ?? "";
$seshobi = $_SESSION["txtHobi"] ?? "";
$sespasangan = $_SESSION["txtPasangan"] ?? "";
$sespekerjaan = $_SESSION["txtPekerjaan"] ?? "";
$sesnamaortu = $_SESSION["txtOrtu"] ?? "";
$sesnamakakak = $_SESSION["txtNamakakak"] ?? "";
$sesnamaadik = $_SESSION["txtNamaadik"] ?? "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
      &#9776;
    </button>
    <nav>
      <ul>
        <li><a href="#home">Beranda</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home">
      <h2>Selamat Datang</h2>
      <?php
      echo "halo dunia!<br>";
      echo "nama saya hadi";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>
    <section id = "biodata">
    <h2>Biodata Sederhana Mahasiswa</h2>
        <form action="proses.php" method="POST">

        <label for="txtNim"><span>NIM:</span>
          <input type="text" id="txtNim" name="txtNim" placeholder="Masukkan NIM" required autocomplete="name">
        </label>

        <label for="txtNamalengkap"><span>Nama Lengkap:</span>
          <input type="text" id="txtNamalengkap" name="txtNamalengkap" placeholder="Nama Lengkap Anda" required autocomplete="name">
        </label>

        <label for="txtTempatlahir"><span>Tempat Lahir:</span>
          <input type="text" id="txtTempatlahir" name="txtTempatlahir" placeholder="Tempat Lahir" required autocomplete="name">
        </label>

        <label for="txtTanggal"><span>Tanggal Lahir:</span>
          <input type="text" id="txtTanggal" name="txtTanggal" placeholder="Tanggal Lahir" required autocomplete="name">
        </label>

        <label for="txtHobi"><span>Hobi:</span>
          <input type="text" id="txtHobi" name="txtHobi" placeholder="Hobi anda" required autocomplete="name">
        </label>

        <label for="txtPasangan"><span>Pasangan:</span>
          <input type="text" id="txtPasangan" name="txtPasangan" placeholder="Siapa Pasangan anda?" required autocomplete="name">
        </label>

        <label for="txtPekerjaan"><span>Pekerjaan:</span>
          <input type="text" id="txtPekerjaan" name="txtPekerjaan" placeholder="Apa Pekerjaan anda?" required autocomplete="name">
        </label>

        <label for="txtOrtu"><span>Nama Ortu:</span>
          <input type="text" id="txtOrtu" name="txtOrtu" placeholder="Siapa nama Ortu anda?" required autocomplete="name">
        </label>

        <label for="txtNamakakak"><span>Nama Kakak:</span>
          <input type="text" id="txtNamakakak" name="txtNamakakak" placeholder="Apa Pekerjaan anda?" required autocomplete="name">
        </label>

        <label for="txtNamaadik"><span>Nama Adik:</span>
          <input type="text" id="txtNamaadik" name="txtNamaadik" placeholder="Apa Pekerjaan anda?" required autocomplete="name">
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
    </section>

    <section id="about">
      <?php
      $nim = "2511500049";
      $NIM = "2511500086";
      $Nim = "";

      $nama = "Muhammad Zaky Syanov ziad";
      $NAMA = "Dedi Fitrianto";
      $Nama = "";

      $tempatlahir = "Serang Banten";
      $TEMPATLAHIR = "PANGKALPINANG";
      $Tempatlahir = "";

      $tanggallahir = "11 November 2005";
      $TANGGALLAHIR = "24 Oktober 2006";
      $Tanggallahir = "";

      $hoby = "Ngegame";
      $HOBY = "Desain";
      $Hoby = "";

      $pasangan = "Sudah punya banyak";
      $PASANGAN = "Sudah ada";
      $Pasangan = "";

      $pekerjaan = "Menjaga Tempat Tidur";
      $PEKERJAAN = "Desainer";
      $Pekerjaan = "";

      $namaortu = "Bapak Ilhamdi dan Ibuk";
      $NAMAORTU = "Bapak Asri dan Ibuk";
      $Namaortu = "";

      $namakakak = "Tidak ada";
      $NAMAKAKAK = "Nurita Evitarina";
      $Namakakak = "";

      $namaadik = "Aqil";
      $NAMAADIK = "Tidak Punya";
      $Namaadik = "";
?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong><?php echo $sesnim?> </p>
      <p><strong>Nama Lengkap:</strong><?php echo $sesnama?></p>
      <p><strong>Tempat Lahir:</strong><?php echo $sestempatlahir?></p>
      <p><strong>Tanggal Lahir:</strong> <?php echo $sestanggal?></p>
      <p><strong>Hobi:</strong><?php echo $seshobi?></p>
      <p><strong>Pasangan:</strong> <?php echo $sespasangan ?></p>
      <p><strong>Pekerjaan:</strong><?php echo $sespekerjaan?></p>
      <p><strong>Nama Orang Tua:</strong> <?php echo $sesnamaortu?></p>
      <p><strong>Nama Kakak:</strong> <?php echo $sesnamakakak?></p>
      <p><strong>Nama Adik:</strong> <?php echo $sesnamaadik?></p>
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." ></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>

      <?php if (!empty($sesnama)): ?>
        <br><hr>
        <h2>Yang menghubungi kami</h2>
        <p><strong>Nama :</strong> <?php echo $sesnama ?></p>
        <p><strong>Email :</strong> <?php echo $sesemail ?></p>
        <p><strong>Pesan :</strong> <?php echo $sespesan ?></p>
      <?php endif; ?>



    </section>
  </main>

  <footer>
    <p>&copy; 2025 Yohanes Setiawan Japriadi [0344300002]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>