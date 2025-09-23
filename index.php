<?php

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Desa Sumowono</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {--main-green: #3A8E7A;--light-green: #5AB39D;--bg-grey: #F0F2F5;--border-grey: #D9D9D9;--text-dark: #333333;--text-light: #FFFFFF;}
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: var(--text-light); 
            color: var(--text-dark);
            padding-top: 155px;
        }

        .sticky-header-wrapper {position: fixed;top: 0;left: 0;width: 100%;z-index: 1000;background-color: var(--text-light);box-shadow: 0 2px 5px rgba(0,0,0,0.1)}
        
        .container {
            width: 100%;
            background-color: var(--text-light);
            margin: 0 auto 2rem;
        }
        
        .main-content {
            max-width: 1100px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        /* === CSS HEADER & NAVBAR DIKEMBALIKAN SEPERTI SEMULA === */
        .header {display: flex;align-items: center;padding: 1.5rem 2rem 0.5rem;max-width: 900px;margin-left: 4rem;}
        .header .logo {width: 60px;height: 60px;border-radius: 8px;margin-right: 1.5rem;display: flex;align-items: center;justify-content: center;}
        .header .logo img {max-width: 100%;max-height: 100%;object-fit: contain; border-radius: 8px; }
        .header .title-info h1 {margin: 0;font-size: 1.5rem;font-weight: 700;color: var(--text-dark);}
        .header .title-info p {margin: 0;font-size: 0.9rem;color: #666;}
        
        .navbar {
            padding: 0 0 0.5rem;
        }
        .navbar ul {
            list-style: none; 
            margin-left: 4rem; /* Mengembalikan posisi ke kiri seperti semula */
            padding: 0 0.5rem;
            display: inline-flex; 
            gap: 0.5rem;
            background-color: #F8F9FA; 
            border-radius: 99px; 
        }
        .navbar ul li a {text-decoration: none;color: var(--text-dark);font-weight: 500;padding: 0.75rem 1.5rem;border-radius: 99px;transition: all 0.3s ease;display: block;}
        .navbar ul li a:hover {background-color: #e2e6ea;}
        .navbar ul li a.active {background-color: var(--main-green);color: var(--text-light);font-weight: 600;}
        /* === AKHIR BAGIAN YANG DIPERBAIKI === */

        .content-section {margin-bottom: 4rem;}
        .content-section h2 {
            color: var(--main-green);
            margin-bottom: 0.5rem;
        }
        
        .content-section h2::after {
           display: none;
        }

        .section-divider {
            border: none;
            height: 4px;
            background-color: var(--main-green);
            border-radius: 2px;
            width: 100%;
            margin-top: 0;
            margin-bottom: 1.5rem;
        }

        .profil-content {display: flex;align-items: center;gap: 2rem;}
        .profil-image {flex: 0 0 200px;height: 200px;background-color: #e9ecef;border-radius: 12px;display: flex;align-items: center;justify-content: center;}
        .profil-image img {width: 60px;opacity: 0.5;}
        .profil-text {flex: 1;font-size: 0.95rem;line-height: 1.8;text-align: justify;}
        
        .lokasi-card {display: flex;align-items: center;gap: 2.5rem;background-color: #F0FAF8;border: 2px solid var(--light-green);border-radius: 16px;padding: 2rem;margin-top: 1.5rem;}
        .lokasi-icon {flex-shrink: 0;}
        .lokasi-icon img {width: 70px;}
        .lokasi-info h3 {margin: 0 0 0.25rem 0;font-size: 1.2rem;font-weight: 600;}
        .lokasi-info p {margin: 0 0 1rem 0;color: #555;}
        .lokasi-info a {text-decoration: none;color: var(--main-green);font-weight: 600;transition: text-decoration 0.2s;}
        .lokasi-info a:hover {text-decoration: underline;}
        
        .berita-grid {display: grid;grid-template-columns: repeat(3, 1fr);gap: 1.5rem;}
        .berita-card {border-radius: 12px;overflow: hidden;background-color: var(--bg-grey);box-shadow: 0 2px 8px rgba(0,0,0,0.07);position: relative;height: 250px;display: block;text-decoration: none;}
        .berita-card img {width: 100%;height: 100%;object-fit: cover;}
        .card-overlay {position: absolute;bottom: 0;left: 0;right: 0;padding: 1.5rem 1rem 1rem;background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);color: var(--text-light);}
        .card-overlay h3 {margin: 0 0 0.25rem 0;font-size: 1.1rem;}
        .card-overlay p {margin: 0;font-size: 0.8rem;opacity: 0.9;}

        .footer {background-color: var(--main-green);color: var(--text-light);padding: 2.5rem 2rem;width: 100%;box-sizing: border-box;}
        .footer-content-wrapper {display: grid;grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));gap: 2rem;max-width: 900px;margin: 0 auto;}
        .footer-col h4 {margin-top: 0;margin-bottom: 1rem;font-size: 1.1rem;font-weight: 600;text-transform: uppercase;letter-spacing: 0.5px;}
        .footer-col ul {list-style: none;margin: 0;padding: 0;}          
        .footer-col ul li {margin-bottom: 0.75rem;}
        .footer-col ul li a {text-decoration: none;color: #E0F2F1;transition: color 0.3s ease;}
        .footer-col ul li a:hover {color: #fff;text-decoration: underline;}
        
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
                <li><a href="#" class="active" >BERANDA</a></li>
                <li><a href="staff.php">STAFF</a></li>
                <li><a href="berita-dan-artikel.php">BERITA & ARTIKEL</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <main class="main-content">
            <section class="content-section" id="profil">
                <h2>PROFIL DESA</h2>
                <hr class="section-divider">
                <div class="profil-content">
                    <div class="profil-image"><img src="https://img.icons8.com/ios/100/000000/camera--v1.png" alt="Ikon Kamera"></div>
                    <div class="profil-text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
                </div>
            </section>
            <section class="content-section" id="lokasi">
                <h2>LOKASI DESA</h2>
                <hr class="section-divider">
                <div class="lokasi-card">
                    <div class="lokasi-icon"><img src="https://img.icons8.com/ios-filled/100/333333/marker.png" alt="Ikon Lokasi"></div>
                    <div class="lokasi-info">
                        <h3>Desa Sumowono</h3>
                        <p>Kecamatan Kaligesing, Kabupaten Purworejo, Provinsi Jawa Tengah</p>
                        <a href="#" target="_blank" rel="noopener noreferrer">Buka dengan Google Maps</a>
                    </div>
                </div>
            </section>
            <section class="content-section" id="berita">
                <h2>BERITA DAN ARTIKEL TERBARU</h2>
                <hr class="section-divider">
                <div class="berita-grid">
                    <a href="#" class="berita-card">
                        <img src="https://via.placeholder.com/400x300/CCCCCC/FFFFFF?text=Gambar+Berita+1" alt="Judul Berita 1">
                        <div class="card-overlay"><h3>Judul Berita atau Artikel</h3><p>Senin, 1 Januari 1999</p></div>
                    </a>
                    <a href="#" class="berita-card">
                        <img src="https://via.placeholder.com/400x300/CCCCCC/FFFFFF?text=Gambar+Berita+2" alt="Judul Berita 2">
                        <div class="card-overlay"><h3>Judul Berita atau Artikel</h3><p>Senin, 1 Januari 1999</p></div>
                    </a>
                    <a href="#" class="berita-card">
                        <img src="https://via.placeholder.com/400x300/CCCCCC/FFFFFF?text=Gambar+Berita+3" alt="Judul Berita 3">
                        <div class="card-overlay"><h3>Judul Berita atau Artikel</h3><p>Senin, 1 Januari 1999</p></div>
                    </a>
                </div>
            </section>
        </main>
    </div>
    <footer class="footer">
        <div class="footer-content-wrapper">
            <div class="footer-col"><h4>TENTANG SUMOWONO</h4><ul><li><a href="https://sumowono-kaligesing.purworejokab.go.id" target="_blank" rel="noopener noreferrer">Situs Pemerintah</a></li><li><a href="#" target="_blank" rel="noopener noreferrer">Link Google Map</a></li></ul></div>
            <div class="footer-col"><h4>SOSIAL MEDIA</h4><ul><li><a href="#">Link YouTube</a></li><li><a href="#">Link Instagram</a></li><li><a href="#">Link Tiktok</a></li></ul></div>
            <div class="footer-col"><h4>KONTAK</h4><ul><li><a href="#">+62 800 1234 5678</a></li><li><a href="#">alamat email</a></li><li><a href="#">link (opsional)</a></li></ul></div>
        </div>
    </footer>
</body>
</html>