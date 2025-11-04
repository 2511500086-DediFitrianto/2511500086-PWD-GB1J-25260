<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul halaman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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

            $pekerjaan = "Menjaga";
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
</body>
</html>