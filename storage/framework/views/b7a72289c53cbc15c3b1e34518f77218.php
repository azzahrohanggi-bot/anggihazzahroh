<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #dff5ea; /* hijau mint */
            margin: 0;
            padding: 0;
        }

        .container {
            width: 800px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.12);
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #2f6f5f;
        }

        hr {
            border: none;
            height: 3px;
            background-color: #5fb3a2;
            width: 220px;
            margin: 10px auto 30px;
            border-radius: 5px;
        }

        .profile {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .profile img {
            width: 180px;
            height: 220px;
            object-fit: cover;
            border-radius: 12px;
            border: 4px solid #5fb3a2;
        }

        .data p {
            margin: 8px 0;
            font-size: 16px;
            color: #333;
        }

        .data strong {
            color: #2f6f5f;
            width: 180px;
            display: inline-block;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Profil Mahasiswa</h1>
        <hr>

        <div class="profile">
            <!-- Foto Diri -->
            <img src="images/anggih.jpg" alt="Foto Mahasiswa">

            <!-- Data Identitas -->
            <div class="data">
                <p><strong>Nama</strong> : Anggih Az-zahroh</p>
                <p><strong>NIM</strong> : 32241619</p>
                <p><strong>Program Studi</strong> : D3 Komputerisasi Akuntansi</p>
                <p><strong>Fakultas</strong> : Ekonomi dan Bisnis</p>
                <p><strong>Mata Kuliah</strong> : Pemrograman Web Lanjut</p>
                <p><strong>Tahun Akademik</strong> : 2025 / 2026</p>
                <p><strong>Tempat, Tgl Lahir</strong> : Cirebon, 11 Juni 2005</p>
                <p><strong>Alamat</strong> : Desa Cirebon Girang, Kec. Talun, Kab. Cirebon</p>
                <p><strong>Email</strong> : azzahrohanggi@gmail.com</p>
            </div>
        </div>
    </div>

</body>
</html><?php /**PATH C:\xampp\htdocs\latihan_anggih\resources\views/profil.blade.php ENDPATH**/ ?>