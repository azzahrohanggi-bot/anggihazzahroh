<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 1 Laravel 12</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 400px;
        }
        h1 { color: #1a73e8; margin-bottom: 0.5rem; }
        p { color: #5f6368; line-height: 1.6; }
        .badge {
            background: #e8f0fe;
            color: #1967d2;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Selamat Datang!</h1>
        <p><strong><?php echo e($nama); ?></strong></p>
        <p>Mata Kuliah: <span class="badge"><?php echo e($matkul); ?></span></p>
        <hr>
        <p>Ini adalah halaman pertama saya di Laravel 12 yang dibuat dengan bantuan asisten AI.</p>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\modul-web-lanjut-anggih3\resources\views/welcome_mahasiswa.blade.php ENDPATH**/ ?>