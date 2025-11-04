<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul halaman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigaton">
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
        <h2>Selamat datang</h2>
        <div class="rowr">
            <p>Halo! Selamat datang di halaman saya!</p>
            <img src="char.png" alt="Gambar contoh" width="300">
        </div>
            <?php
            echo "Halo Dunia!<br>";
            echo "Nama saya Dedi";
            ?>
    </section>
    <section id="IPK">
        <?php 
            $namamatkul1='Aplikasi Perkantoran';
        $sksmatkul1='3';
        $nilaihadir1='90';
        $nilaitugas1='60';
        $nilaiuts1='80';
        $nilaiuas1='70';
            $namamatkul2='Logika Informatika';
        $sksmatkul2='3';
        $nilaihadir2='70';
        $nilaitugas2='50';
        $nilaiuts2='60';
        $nilaiuas2='80';
            $namamatkul3='Pengantar Basis Data';
        $sksmatkul3='3';
        $nilaihadir3='80';
        $nilaitugas3='70';
        $nilaiuts3='70';
        $nilaiuas3='90';
            $namamatkul4='Pengantar Teknologi';
        $sksmatkul4='3';
        $nilaihadir4='90';
        $nilaitugas4='90';
        $nilaiuts4='90';
        $nilaiuas4='90';
         $namamatkul5='Pemrograman Web Dasar';
        $sksmatkul5='3';
        $nilaihadir5='80';
        $nilaitugas5='80';
        $nilaiuts5='80';
        $nilaiuas5='80';
        ?>
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

            $pekerjaan = "Ngocok";
            $PEKERJAAN = "Desainer";
            $Pekerjaan = "";

            $namaortu = "Bapak Ilhamdi";
            $NAMAORTU = "Bapak Asri dan Ibuk Pidiatun";
            $Namaortu = "";

            $namakakak = "Tidak ada";
            $NAMAKAKAK = "Nurita Evitarina";
            $Namakakak = "";

            $namaadik = "Aqil";
            $NAMAADIK = "Tidak Punya";
            $Namaadik = "";
        ?> 
        <h2>Tentang Kami</h2>
        <p>
            <strong>NIM:</strong>
            <?php
                echo $nim;
            ?>
        </p>
        <p>
            <strong>Nama:</strong>
            <?php
                echo $nama;
            ?> &#168512;
        </p>
        <p>
            <strong>Tempat Lahir:</strong>
            <?php
                echo $tempatlahir;
            ?> &copy;
        </p>
        <p>
            <strong>Tanggal Lahir:</strong>
            <?php
                echo $tanggallahir;
            ?>
        </p>
        <p>
            <strong>Hobby:</strong>
            <?php
                echo $hoby;
            ?> &#128516;
        </p>
        <p>
            <strong>Pasangan:</strong>
            <?php
                echo $pasangan;
            ?> &#9786;
        </p>
        <p>
            <strong>Pekerjaan:</strong>
            <?php
                echo $pekerjaan;
            ?> &quot; &#9786; &quot;
            </p>
        <p>
            <strong>Nama Ortu:</strong>
            <?php
                echo $namaortu;
            ?>
        </p>
        <p>
            <strong>Nama Kakak:</strong>
            <?php
                echo $namakakak;
            ?>    
        </p>
        <p>
            <strong>Nama Adik:</strong>
            <?php
                echo $namaadik;
            ?>
        </p>
    </section>
    <section id="contact">
        <h2>Kontak Saye</h2>
        <form action="" method="GET">
            <label for="txtNama"><span>Nama:</span>
            <input type="text" id="txtNama" name="txtNama" placeholder="Your Name">
            </label>

            <label for="txtEmail"><span>Email:</span>
                <input type="email" id="txtEmail" name="txtEmail" placeholder="example@gmail.com">
            </label>
            
            <label for="txtPesan"><span>Pesan Anda:</span>
                <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..."></textarea>
                <small id="charCount">0/200 karakter</small>
            </label>

            <button type="submit">Kirim &check;</button>
            <button type="reset">Batal &cross;</button>
        </form>
    </section>
   </main>
   <footer>
    <p>&copy; &#9786; 2025 Dedi fitrianto 2511500086</p>
   </footer>
   <script src="script.js"></script>
</body>
</html>