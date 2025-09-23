<?php
// Data dummy untuk Berita. Dalam aplikasi nyata, data ini akan diambil dari database.
// Diurutkan dari yang terbaru.
$berita = [
    [
        'judul' => 'Pembangunan Balai Desa Tahap Akhir Hampir Selesai',
        'tanggal' => 'Senin, 22 September 2025',
        'gambar' => 'https://placehold.co/800x400/5AB39D/FFFFFF?text=Gambar+Berita+1'
    ],
    [
        'judul' => 'Warga Desa Sumowono Rayakan HUT Kemerdekaan dengan Meriah',
        'tanggal' => 'Jumat, 18 Agustus 2025',
        'gambar' => 'https://placehold.co/800x400/5AB39D/FFFFFF?text=Gambar+Berita+2'
    ],
    [
        'judul' => 'Program Pelatihan UKM Digital Menarik Minat Ibu-Ibu PKK',
        'tanggal' => 'Selasa, 15 Juli 2025',
        'gambar' => 'https://placehold.co/800x400/5AB39D/FFFFFF?text=Gambar+Berita+3'
    ],
];

// Data dummy untuk Artikel.
$artikel = [
    [
        'judul' => 'Tips Menanam Sayuran Organik di Pekarangan Rumah',
        'tanggal' => 'Rabu, 10 September 2025',
        'gambar' => 'https://placehold.co/800x400/6A9C8F/FFFFFF?text=Gambar+Artikel+1'
    ],
    [
        'judul' => 'Mengenal Sejarah dan Asal-Usul Desa Sumowono',
        'tanggal' => 'Kamis, 21 Agustus 2025',
        'gambar' => 'https://placehold.co/800x400/6A9C8F/FFFFFF?text=Gambar+Artikel+2'
    ],
    [
        'judul' => 'Manfaat Jamu Tradisional untuk Kesehatan Keluarga',
        'tanggal' => 'Senin, 4 Agustus 2025',
        'gambar' => 'https://placehold.co/800x400/6A9C8F/FFFFFF?text=Gambar+Artikel+3'
    ],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita & Artikel - Desa Sumowono</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --main-green: #3A8E7A;
            --light-green: #5AB39D;
            --bg-grey: #F0F2F5;
            --border-grey: #D9D9D9;
            --text-dark: #333333;
            --text-light: #FFFFFF;
        }
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: var(--bg-grey);
            color: var(--text-dark);
            padding-top: 155px; 
        }
        .sticky-header-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background-color: var(--text-light);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .container {
            width: 100%;
            max-width: 900px;
            background-color: var(--text-light);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border-radius: 12px;
            overflow: hidden;
            margin: 0 auto 2rem;
        }
        .header {
            display: flex;
            align-items: center;
            padding: 1.5rem 2rem 0.5rem;
            max-width: 900px;
            margin-left: 4rem;
        }
        .header .logo {width: 60px;height: 60px;border-radius: 8px;margin-right: 1.5rem;display: flex;align-items: center;justify-content: center;}
        .header .logo img {max-width: 100%;max-height: 100%;object-fit: contain; border-radius: 8px; }
        .header .title-info h1 { margin: 0; font-size: 1.5rem; font-weight: 700; color: var(--text-dark); }
        .header .title-info p { margin: 0; font-size: 0.9rem; color: #666; }
        
        .navbar { padding: 0 0 0.5rem; }
        .navbar ul { list-style: none; margin-left: 4rem; padding: 0 0.5rem; display: inline-flex; gap: 0.5rem; background-color: #F8F9FA; border-radius: 99px; }
        .navbar ul li a { text-decoration: none; color: var(--text-dark); font-weight: 500; padding: 0.75rem 1.5rem; border-radius: 99px; transition: all 0.3s ease; display: block; }
        .navbar ul li a:hover { background-color: #e2e6ea; }
        .navbar ul li a.active { background-color: var(--main-green); color: var(--text-light); font-weight: 600; }
        .main-content { padding: 2rem; }
        .tabs-container { display: flex; align-items: center; justify-content: space-between; border-bottom: 3px solid var(--main-green); padding-bottom: 0.5rem; margin-bottom: 2rem; }
        .tabs { display: flex; gap: 0.5rem; }
        .tab-button { padding: 0.75rem 2rem; font-size: 1rem; font-weight: 600; border: none; background-color: #E9ECEF; color: #6c757d; cursor: pointer; transition: all 0.3s ease; border-radius: 10px; }
        .tab-button.active { background-color: var(--main-green); color: var(--text-light); }
        .search-bar input { border: 1px solid var(--border-grey); border-radius: 99px; padding: 0.6rem 1rem; font-size: 0.9rem; width: 200px; }
        .content-section { display: none; }
        .content-section.active { display: block; }
        .post-grid { display: grid; gap: 2rem; }
        .post-card-link { text-decoration: none; color: inherit; display: block; }
        .post-card { background-color: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.07); border: 1px solid var(--border-grey); transition: all 0.3s ease; }
        .post-card-link:hover .post-card { transform: translateY(-5px); box-shadow: 0 8px 20px rgba(0,0,0,0.12); }
        .post-card img { width: 100%; height: auto; display: block; background-color: var(--light-green); }
        .post-card-content { padding: 1rem 1.5rem; }
        .post-card-content h3 { margin: 0 0 0.25rem 0; font-size: 1.25rem; }
        .post-card-content p { margin: 0; font-size: 0.9rem; color: #666; }
        .pagination-container { border-top: 1px solid var(--border-grey); padding-top: 2rem; margin-top: 2.5rem; display: flex; flex-direction: column; align-items: center; gap: 1rem; }
        .pagination-info { font-size: 0.9rem; color: #666; }
        .pagination-nav { display: flex; gap: 0.5rem; }
        .pagination-nav a { text-decoration: none; color: var(--text-dark); background-color: #fff; border: 1px solid var(--border-grey); border-radius: 8px; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; font-weight: 500; transition: all 0.2s ease; }
        .pagination-nav a:hover { border-color: var(--main-green); color: var(--main-green); }
        .pagination-nav a.active { background-color: var(--main-green); color: var(--text-light); border-color: var(--main-green); font-weight: 600; }
        .footer { background-color: var(--main-green); color: var(--text-light); padding: 2.5rem 2rem; width: 100%; box-sizing: border-box; }
        .footer-content-wrapper { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; max-width: 900px; margin: 0 auto; }
        .footer-col h4 { margin-top: 0; margin-bottom: 1rem; font-size: 1.1rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; }
        .footer-col ul { list-style: none; margin: 0; padding: 0; }
        .footer-col ul li { margin-bottom: 0.75rem; }
        .footer-col ul li a { text-decoration: none; color: #E0F2F1; transition: color 0.3s ease; }
        .footer-col ul li a:hover { color: #fff; text-decoration: underline; }
    </style>
</head>
<body>
    <div class="sticky-header-wrapper">
        <header class="header">
            <div class="logo">
                <img src = "Icon_Purworejo.png"/>
            </div>
            <div class="title-info">
                <h1>DESA SUMOWONO</h1>
                <p>Kecamatan Kaligesing, Kabupaten Purworejo, Jawa Tengah</p>
            </div>
        </header>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">BERANDA</a></li>
                <li><a href="staff.php">STAFF</a></li>
                <li><a href="berita-dan-artikel.php" class="active">BERITA & ARTIKEL</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <main class="main-content">
            <div class="tabs-container">
                <div class="tabs">
                    <button class="tab-button active" onclick="showContent('berita')">BERITA</button>
                    <button class="tab-button" onclick="showContent('artikel')">ARTIKEL</button>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Cari Judul Berita...">
                </div>
            </div>
            <div id="berita-content" class="content-section active">
                <div class="post-grid">
                    <?php foreach ($berita as $item) : ?>
                        <a href="berita-detailed.php" class="post-card-link">
                            <div class="post-card">
                                <img src="<?= htmlspecialchars($item['gambar']) ?>" alt="Sampul <?= htmlspecialchars($item['judul']) ?>">
                                <div class="post-card-content">
                                    <h3><?= htmlspecialchars($item['judul']) ?></h3>
                                    <p><?= htmlspecialchars($item['tanggal']) ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="artikel-content" class="content-section">
                <div class="post-grid">
                    <?php foreach ($artikel as $item) : ?>
                        <a href="artikel-detailed.php" class="post-card-link">
                            <div class="post-card">
                                <img src="<?= htmlspecialchars($item['gambar']) ?>" alt="Sampul <?= htmlspecialchars($item['judul']) ?>">
                                <div class="post-card-content">
                                    <h3><?= htmlspecialchars($item['judul']) ?></h3>
                                    <p><?= htmlspecialchars($item['tanggal']) ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="pagination-container">
                <nav class="pagination-nav">
                    <a href="#">&laquo;</a>
                    <a href="#">&lsaquo;</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">...</a>
                    <a href="#">&rsaquo;</a>
                    <a href="#">&raquo;</a>
                </nav>
                <div class="pagination-info">
                    Showing 1-3 of 100 results
                </div>
            </div>
        </main>
    </div>
    <footer class="footer">
        <div class="footer-content-wrapper">
            <div class="footer-col">
                <h4>TENTANG SUMOWONO</h4>
                <ul>
                    <li><a href="https://sumowono-kaligesing.purworejokab.go.id" target="_blank" rel="noopener noreferrer">Situs Pemerintah</a></li>
                    <li><a href="https://www.google.com/maps/place/Sumowono" target="_blank" rel="noopener noreferrer">Link Google Map</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>SOSIAL MEDIA</h4>
                 <ul>
                    <li><a href="#">Link YouTube</a></li>
                    <li><a href="#">Link Instagram</a></li>
                    <li><a href="#">Link Tiktok</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>KONTAK</h4>
                 <ul>
                    <li><a href="#">+62 800 1234 5678</a></li>
                    <li><a href="#">alamat email</a></li>
                    <li><a href="#">link (opsional)</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        function showContent(contentType) {
            document.getElementById('berita-content').classList.remove('active');
            document.getElementById('artikel-content').classList.remove('active');
            
            const tabButtons = document.querySelectorAll('.tab-button');
            tabButtons.forEach(button => button.classList.remove('active'));

            document.getElementById(contentType + '-content').classList.add('active');
            document.querySelector(`.tab-button[onclick="showContent('${contentType}')"]`).classList.add('active');
        }

        // PERUBAHAN BARU: Menambahkan script untuk membaca parameter URL saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const tab = urlParams.get('tab');

            if (tab === 'artikel') {
                showContent('artikel');
            }
            // Jika tidak ada parameter 'tab' atau nilainya 'berita',
            // maka akan menampilkan tab berita secara default sesuai HTML.
        });
    </script>

</body>
</html>

