<!DOCTYPE html>
<html>
<head>
    <title>Profil Pilihan</title>
</head>
<body>
    <h2>Pilih Profil yang Ingin Ditampilkan</h2>
    <form method="POST">
        <select name="pilihan">
            <option value="">-- Pilih Profil --</option>
            <option value="zaky">Muhammad Zaky Syanov Ziad</option>
            <option value="dedi">Dedi Fitrianto</option>
        </select>
        <button type="submit">Tampilkan</button>
    </form>

    <hr>

    <section id="about">
        <?php
        $zaky = [
            "nim" => "2511500049",
            "nama" => "Muhammad Zaky Syanov Ziad",
            "tempatlahir" => "Serang Banten",
            "tanggallahir" => "11 November 2005",
            "hoby" => "Ngegame",
            "pasangan" => "Sudah punya banyak",
            "pekerjaan" => "Menjaga Tempat Tidur",
            "namaortu" => "Bapak Ilhamdi dan Ibuk",
            "namakakak" => "Tidak ada",
            "namaadik" => "Aqil"
        ];

        $dedi = [
            "nim" => "2511500086",
            "nama" => "Dedi Fitrianto",
            "tempatlahir" => "Pangkalpinang",
            "tanggallahir" => "24 Oktober 2006",
            "hoby" => "Desain",
            "pasangan" => "Sudah ada",
            "pekerjaan" => "Desainer",
            "namaortu" => "Bapak Asri dan Ibuk",
            "namakakak" => "Nurita Evitarina",
            "namaadik" => "Tidak Punya"
        ];

        if (isset($_POST["pilihan"]) && $_POST["pilihan"] != "") {
            $pilihan = $_POST["pilihan"];

            if ($pilihan == "zaky") {
                $data = $zaky;
            } elseif ($pilihan == "dedi") {
                $data = $dedi;
            } else {
                $data = null;
            }

            if ($data) {
                echo "<h2>Data Profil: " . $data["nama"] . "</h2>";
                echo "<p><strong>NIM:</strong> " . $data["nim"] . "</p>";
                echo "<p><strong>Nama:</strong> " . $data["nama"] . "</p>";
                echo "<p><strong>Tempat Lahir:</strong> " . $data["tempatlahir"] . "</p>";
                echo "<p><strong>Tanggal Lahir:</strong> " . $data["tanggallahir"] . "</p>";
                echo "<p><strong>Hobi:</strong> " . $data["hoby"] . "</p>";
                echo "<p><strong>Pasangan:</strong> " . $data["pasangan"] . "</p>";
                echo "<p><strong>Pekerjaan:</strong> " . $data["pekerjaan"] . "</p>";
                echo "<p><strong>Nama Ortu:</strong> " . $data["namaortu"] . "</p>";
                echo "<p><strong>Nama Kakak:</strong> " . $data["namakakak"] . "</p>";
                echo "<p><strong>Nama Adik:</strong> " . $data["namaadik"] . "</p>";
            } else {
                echo "<p>Data tidak ditemukan.</p>";
            }
        } else {
            echo "<p>Silakan pilih profil terlebih dahulu di atas.</p>";
        }
        ?>
    </section>
</body>
</html>
