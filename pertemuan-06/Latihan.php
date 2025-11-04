<!DOCTYPE html>
<html>
    <head>
        <title>Belajar PHP Dasar</title>
    </head>
    <body>
        <h1><?php echo "Halo, Dunia PHP!"; ?></h1>
        <h2><?php echo "Selamat datang di PHP, Dedi Fitrianto"; ?></h2>
        <?php
        $nama = "Dedi Fitrianto";
        $umur = 19;
        $tinggi = 1.75;
        $aktif = true;
        echo "Nama: $nama <br>";
        echo "Umur: $umur tahun <br>";
        echo "Tinggi: $tinggi meter <br>";
        echo "Status aktif: " . ($aktif ? "Ya" : "Tidak") . "<br>";
        var_dump($nama);
        var_dump($umur);
        var_dump($tinggi);
        var_dump($aktif);
        ?>

        <?php
        $nama = "Yohanes Setiawan Japriadi";
        $umur = 25;
        $tinggi = 1.75;
        $aktif = true;
        $hobi = ["Coding", "Memasak", "Musik"];
        $mahasiswa = (object)[
        "nim" => "0344300002",
        "nama" => "Yohanes Setiawan",
        "prodi" => "Teknik Informatika"
        ];
        $nilai_akhir = NULL;
        echo "<h2>Demo Tipe Data PHP</h2>";
        echo "<pre>";
        echo "String:\n";
        var_dump($nama);
        echo "\nInteger:\n";
        var_dump($umur);
        echo "\nFloat:\n";
        var_dump($tinggi);
        echo "\nBoolean:\n";
        var_dump($aktif);
        echo "\nArray:\n";
        var_dump($hobi);
        ?>
    </body>
</html>