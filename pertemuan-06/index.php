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
            <?php
            echo "Halo Dunia!";
            ?>
        </div>
    </section>
    <section id="about">
        <h2>Tentang Dedi</h2>
        <p><strong>NIM:</strong> 2511500086</p>
        <p><strong>Nama:</strong> Dedi Fitrianto &#168512;</p>
        <p><strong>Tempat Lahir:</strong> Pangkalpinang &copy;</p>
        <p><strong>Tanggal Lahir:</strong> 24 Oktober 2006</p>
        <p><strong>Alamat:</strong> Jl.Sungaiselan</p>
        <p><strong>Hobby:</strong> Desain &#128516;</p>
        <p><strong>Pekerjaan:</strong> Desainer &quot; &#9786; &quot;</p>
        <p><strong>Nama Kakak:</strong> Nurita Evitarina</p>
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