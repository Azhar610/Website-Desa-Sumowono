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
        /* CSS Reset & Basic Styling */
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
            /* PERUBAHAN: Menyesuaikan padding atas agar pas dengan header yang lebih ramping */
            padding-top: 155px; 
        }

        /* BARU: Wrapper untuk header dan navbar yang akan tetap di atas (sticky/fixed) */
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
            /* PERUBAHAN: Mengembalikan container ke tengah */
            margin: 0 auto 2rem;
        }
        
        /* Header Section */
        .header {
            display: flex;
            align-items: center;
            /* PERUBAHAN: Mengurangi padding bawah untuk memperkecil jarak */
            padding: 1.5rem 2rem 0.5rem;
            max-width: 900px;
            margin-left: 4rem;
        }

        .header .logo {
            width: 60px;
            height: 60px;
            background-color: var(--border-grey);
            border-radius: 8px;
            margin-right: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            color: #888;
            text-align: center;
        }

        .header .title-info h1 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .header .title-info p {
            margin: 0;
            font-size: 0.9rem;
            color: #666;
        }

        /* Navigation Bar */
        .navbar {
            /* PERUBAHAN: Mengurangi padding untuk memperkecil jarak */
            padding: 0 0 0.5rem;
        }

        .navbar ul {
            list-style: none;
            margin-left: 4rem;
            padding: 0 0.5rem;
            display: inline-flex; 
            gap: 0.5rem;
            background-color: #F8F9FA; 
            border-radius: 99px; 
        }

        .navbar ul li a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            padding: 0.75rem 1.5rem;
            border-radius: 99px;
            transition: all 0.3s ease;
            display: block;
        }
        
        .navbar ul li a:hover {
            background-color: #e2e6ea;
        }

        .navbar ul li a.active {
            background-color: var(--main-green);
            color: var(--text-light);
            font-weight: 600;
        }

        /* Main Content Area */
        .main-content {
            padding: 2rem;
        }

        /* Tabs Switcher */
        .tabs-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 3px solid var(--main-green);
            padding-bottom: 0.5rem;
            margin-bottom: 2rem;
        }
        
        .tabs {
            display: flex;
            gap: 0.5rem; 
        }

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
        }

        .tab-button.active {
            background-color: var(--main-green);
            color: var(--text-light);
        }
        
        /* Search Bar */
        .search-bar {
            display: flex;
            align-items: center;
        }
        
        .search-bar input {
            border: 1px solid var(--border-grey);
            border-radius: 99px;
            padding: 0.6rem 1rem;
            font-size: 0.9rem;
            width: 200px;
        }

        /* Content Display */
        .content-section {
            display: none; 
        }

        .content-section.active {
            display: block;
        }
        
        .post-grid {
            display: grid;
            gap: 2rem;
        }

        .post-card {
            background-color: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            border: 1px solid var(--border-grey);
            transition: all 0.3s ease;
        }

        .post-card:hover {
            transform: translateY(-5px); 
            box-shadow: 0 8px 20px rgba(0,0,0,0.12); 
        }

        .post-card img {
            width: 100%;
            height: auto;
            display: block;
            background-color: var(--light-green);
        }

        .post-card-content {
            padding: 1rem 1.5rem;
        }

        .post-card-content h3 {
            margin: 0 0 0.25rem 0;
            font-size: 1.25rem;
        }

        .post-card-content p {
            margin: 0;
            font-size: 0.9rem;
            color: #666;
        }
        
        /* Pagination */
        .pagination-container {
            border-top: 1px solid var(--border-grey);
            padding-top: 2rem;
            margin-top: 2.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem; 
        }

        .pagination-info {
            font-size: 0.9rem;
            color: #666;
        }

        .pagination-nav {
            display: flex;
            gap: 0.5rem;
        }

        .pagination-nav a {
            text-decoration: none;
            color: var(--text-dark);
            background-color: #fff;
            border: 1px solid var(--border-grey);
            border-radius: 8px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .pagination-nav a:hover {
            border-color: var(--main-green);
            color: var(--main-green);
        }

        .pagination-nav a.active {
            background-color: var(--main-green);
            color: var(--text-light);
            border-color: var(--main-green);
            font-weight: 600;
        }

        /* Footer */
        .footer {
            background-color: var(--main-green);
            color: var(--text-light);
            padding: 2.5rem 2rem;
            width: 100%;
            box-sizing: border-box;
        }

        .footer-content-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            max-width: 900px;
            margin: 0 auto;
        }

        .footer-col h4 {
            margin-top: 0;
            margin-bottom: 1rem;
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .footer-col ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        .footer-col ul li {
            margin-bottom: 0.75rem;
        }

        .footer-col ul li a {
            text-decoration: none;
            color: #E0F2F1;
            transition: color 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="sticky-header-wrapper">
        <header class="header">
            <div class="logo">Gambar</div>
            <div class="title-info">
                <h1>DESA SUMOWONO</h1>
                <p>Kecamatan Kaligesing, Kabupaten Purworejo, Jawa Tengah</p>
            </div>
        </header>

        <nav class="navbar">
            <ul>
                <li><a href="index.php" >BERANDA</a></li>
                <li><a href="#" class="active" >STAFF</a></li>
                <li><a href="berita-dan-artikel.php">BERITA & ARTIKEL</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <main class="main-content">
            
        </main>
    </div>

    <footer class="footer">
        <div class="footer-content-wrapper">
            <div class="footer-col">
                <h4>TENTANG SUMOWONO</h4>
                <ul>
                    <li><a href="https://sumowono-kaligesing.purworejokab.go.id" target="_blank" rel="noopener noreferrer">Situs Pemerintah</a></li>
                    <li><a href="https://www.google.com/maps/place/Sumowono,+Kec.+Kaligesing,+Kabupaten+Purworejo,+Jawa+Tengah/@-7.6928525,110.1202885,3670m/data=!3m2!1e3!4b1!4m6!3m5!1s0x2e7aed99af436afb:0x5027a76e3555ec0!8m2!3d-7.6910613!4d110.1209019!16s%2Fg%2F121_z_7f?entry=ttu&g_ep=EgoyMDI1MDkxNy4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer">Link Google Map</a></li>
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
            // Sembunyikan semua section konten
            document.getElementById('berita-content').classList.remove('active');
            document.getElementById('artikel-content').classList.remove('active');
            
            // Non-aktifkan semua tombol tab
            const tabButtons = document.querySelectorAll('.tab-button');
            tabButtons.forEach(button => button.classList.remove('active'));

            // Tampilkan konten dan aktifkan tombol yang sesuai
            document.getElementById(contentType + '-content').classList.add('active');
            // Menargetkan tombol berdasarkan fungsi onclick-nya
            document.querySelector(`.tab-button[onclick="showContent('${contentType}')"]`).classList.add('active');
        }
    </script>

</body>
</html>

