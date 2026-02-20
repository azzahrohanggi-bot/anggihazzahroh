<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Tambah Mahasiswa</h2>

<form action="<?php echo e(route('mahasiswa.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <input type="text" name="nim" placeholder="NIM" class="form-control mb-2">
    <input type="text" name="nama" placeholder="Nama" class="form-control mb-2">
    <input type="text" name="kelas" placeholder="Kelas" class="form-control mb-2">
    <input type="text" name="matakuliah" placeholder="Matakuliah" class="form-control mb-2">

    <button type="submit" class="btn btn-success">Simpan</button>
</form>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\modul-web-lanjut-anggih-C\resources\views/mahasiswa/create.blade.php ENDPATH**/ ?>