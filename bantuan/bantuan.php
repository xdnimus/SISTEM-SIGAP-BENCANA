<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Bantuan - SIGAP</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .hero {
            background: #007bff;
            color: white;
            padding: 60px 20px;
            text-align: center;
        }
        .hero h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .help-panel {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .help-section {
            margin-bottom: 20px;
        }
        .help-section h3 {
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        .help-item {
            margin: 15px 0;
            padding: 10px;
            background: #f8f9fa;
            border-left: 4px solid #007bff;
        }
        .faq-container {
            margin-top: 20px;
        }
        .faq-question {
            cursor: pointer;
            padding: 10px;
            background: #e7f3ff;
            border-radius: 4px;
            font-weight: bold;
            transition: background 0.3s;
        }
        .faq-question:hover {
            background: #d0e8ff;
        }
        .faq-answer {
            display: none;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 4px;
            margin-top: 5px;
        }
        .contact-info {
            text-align: center;
            margin-top: 30px;
        }
        .btn {
            background: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="hero">
        <h1>Selamat Datang di Panel Bantuan SIGAP</h1>
        <p>Temukan informasi dan bantuan yang Anda butuhkan.</p>
    </div>
    
    <div class="help-panel">
        <div class="help-section">
            <h3>📖 Panduan Umum</h3>
            <div class="help-item">
                <strong>Apa itu SIGAP?</strong>
                <p>SIGAP adalah Sistem Informasi Gawat Darurat yang membantu pengelolaan data pasien darurat.</p>
            </div>
            <div class="help-item">
                <strong>Cara Menggunakan Sistem</strong>
                <p>Gunakan menu navigasi di atas untuk mengakses berbagai fitur seperti Data Pasien, Riwayat, dan Laporan.</p>
            </div>
        </div>

        <div class="help-section">
            <h3>❓ FAQ (Pertanyaan Umum)</h3>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        Bagaimana cara menambah data pasien baru?
                    </div>
                    <div class="faq-answer">
                        Klik menu "Tambah Pasien" atau "Input Data Pasien", isi form dengan data lengkap, kemudian klik tombol Simpan.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        Bagaimana cara mencetak laporan?
                    </div>
                    <div class="faq-answer">
                        Pilih data yang ingin dicetak, klik tombol "Cetak" atau "Export PDF", dan pilih opsi print dari browser Anda.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        Bagaimana jika lupa password?
                    </div>
                    <div class="faq-answer">
                        Hubungi administrator sistem atau gunakan fitur "Lupa Password" di halaman login.
                    </div>
                </div>
            </div>
        </div>

        <div class="help-section">
            <h3>📞 Hubungi Kami</h3>
            <div class="help-item contact-info">
                <strong>Pusat Dukungan</strong>
                <p>Email: support@sigap.com</p>
                <p>Telepon: (021) 1234-5678</p>
                <p>Jam Operasional: 08:00 - 17:00 WIB</p>
            </div>
        </div>

        <div class="contact-info">
            <a href="../dashboard.php" class="btn">Kembali ke Dashboard</a>
        </div>
    </div>

    <script>
        function toggleFAQ(element) {
            const answer = element.nextElementSibling;
            answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>
</html>