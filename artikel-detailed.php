<?php
// Data dummy untuk satu item artikel.
$detailArtikel = [
    'judul' => 'Tips Menanam Sayuran Organik di Pekarangan Rumah',
    'tanggal' => '10 September 2025',
    'penulis' => 'Pemerhati Lingkungan',
    'dilihat' => 250,
    'gambar' => 'https://placehold.co/800x450/6A9C8F/FFFFFF?text=Gambar+Artikel+Utama',
    'konten' => 'Menanam sayuran organik di pekarangan rumah tidak hanya menyehatkan tetapi juga menyenangkan. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($detailArtikel['judul']) ?> - Desa Sumowono</title>
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
        .header .title-info h1 { margin: 0; font-size: 1.5rem; font-weight: 700; }
        .header .title-info p { margin: 0; font-size: 0.9rem; color: #666; }

        .navbar { padding: 0 0 0.5rem; }
        .navbar ul { list-style: none; margin-left: 4rem; padding: 0 0.5rem; display: inline-flex; gap: 0.5rem; background-color: #F8F9FA; border-radius: 99px; }
        .navbar ul li a { text-decoration: none; color: var(--text-dark); font-weight: 500; padding: 0.75rem 1.5rem; border-radius: 99px; transition: all 0.3s ease; display: block; }
        .navbar ul li a:hover { background-color: #e2e6ea; }
        .navbar ul li a.active { background-color: var(--main-green); color: var(--text-light); font-weight: 600; }
        .main-content { padding: 2rem; }
        .tabs-container { display: flex; align-items: center; justify-content: space-between; border-bottom: 3px solid var(--main-green); padding-bottom: 0.5rem; margin-bottom: 2rem; }
        .tabs { display: flex; gap: 0.5rem; }
        .tab-button {
            padding: 0.75rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            border: none;
            background-color: #E9ECEF;
            color: #6c757d;
            cursor: pointer;
            transition: all 0.3s ease;
            border-radius: 10px;
            text-decoration: none; /* Menambahkan ini untuk tag <a> */
            display: inline-block; /* Menambahkan ini untuk tag <a> */
        }
        .tab-button.active { background-color: var(--main-green); color: var(--text-light); }
        .search-bar input { border: 1px solid var(--border-grey); border-radius: 99px; padding: 0.6rem 1rem; font-size: 0.9rem; width: 200px; }
        .article-header h1 { font-size: 2rem; font-weight: 700; margin: 0 0 0.5rem 0; }
        .article-meta { display: flex; align-items: center; gap: 1.5rem; font-size: 0.9rem; color: #666; margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid var(--border-grey); }
        .meta-item { display: flex; align-items: center; gap: 0.5rem; position: relative; }
        .meta-item:not(:last-child)::after { content: ''; position: absolute; right: -0.75rem; top: 50%; transform: translateY(-50%); height: 16px; width: 1px; background-color: var(--border-grey); }
        .meta-item svg { width: 1.2em; height: 1.2em; }
        .article-image-container { margin-bottom: 2.5rem; text-align: center; }
        .article-image-container img { max-width: 100%; height: auto; border-radius: 12px; background-color: var(--border-grey); }
        .article-image-container figcaption { margin-top: 0.75rem; font-size: 0.9rem; color: #888; font-style: italic; }
        .article-content { line-height: 1.8; font-size: 1rem; color: #333; }
        .article-navigation { display: flex; justify-content: space-between; margin-top: 3rem; padding-top: 2rem; border-top: 1px solid var(--border-grey); }
        .nav-button { text-decoration: none; color: var(--main-green); border: 1px solid var(--main-green); padding: 0.75rem 1.5rem; border-radius: 99px; font-weight: 600; transition: all 0.3s ease; }
        .nav-button:hover { background-color: var(--main-green); color: var(--text-light); }
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
            <div class="logo"><img src = "Icon_Purworejo.png"/></div>
            <div class="title-info">
                <h1>DESA SUMOWONO</h1>
                <p>Kecamatan Kaligesing, Kabupaten Purworejo, Jawa Tengah</p>
            </div>
        </header>
        <nav class="navbar">
            <ul>
                <li><a href="#">BERANDA</a></li>
                <li><a href="#">STAFF</a></li>
                <li><a href="berita-dan-artikel.php" class="active">BERITA & ARTIKEL</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <main class="main-content">
            <div class="tabs-container">
                <div class="tabs">
                    <!-- PERUBAHAN: Mengubah button menjadi link <a> -->
                    <a href="berita-dan-artikel.php?tab=berita" class="tab-button">BERITA</a>
                    <a href="berita-dan-artikel.php?tab=artikel" class="tab-button active">ARTIKEL</a>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Cari Judul Artikel...">
                </div>
            </div>
            <article>
                <header class="article-header">
                    <h1><?= htmlspecialchars($detailArtikel['judul']) ?></h1>
                    <div class="article-meta">
                        <span class="meta-item">
                            <?php if (file_exists('asset/gambar-vector/calendar_month_100dp_1C6758_FILL1_wght400_GRAD0_opsz48.svg')) include 'asset/gambar-vector/calendar_month_100dp_1C6758_FILL1_wght400_GRAD0_opsz48.svg'; ?>
                            <?= htmlspecialchars($detailArtikel['tanggal']) ?>
                        </span>
                        <span class="meta-item">
                            <?php if (file_exists('asset/gambar-vector/person_100dp_1C6758_FILL1_wght400_GRAD0_opsz48.svg')) include 'asset/gambar-vector/person_100dp_1C6758_FILL1_wght400_GRAD0_opsz48.svg'; ?>
                            <?= htmlspecialchars($detailArtikel['penulis']) ?>
                        </span>
                        <span class="meta-item">
                             <?php if (file_exists('asset/gambar-vector/visibility_100dp_1C6758_FILL1_wght400_GRAD0_opsz48.svg')) include 'asset/gambar-vector/visibility_100dp_1C6758_FILL1_wght400_GRAD0_opsz48.svg'; ?>
                            <?= htmlspecialchars($detailArtikel['dilihat']) ?>
                        </span>
                    </div>
                </header>
                <figure class="article-image-container">
                    <img src="<?= htmlspecialchars($detailArtikel['gambar']) ?>" alt="Gambar utama untuk <?= htmlspecialchars($detailArtikel['judul']) ?>">
                    <figcaption>Gambar 1. Contoh</figcaption>
                </figure>
                <section class="article-content">
                    <p><?= nl2br(htmlspecialchars($detailArtikel['konten'])) ?></p>
                </section>
                <nav class="article-navigation">
                    <a href="#" class="nav-button">Sebelumnya</a>
                    <a href="#" class="nav-button">Selanjutnya</a>
                </nav>
            </article>
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
</body>
</html>

