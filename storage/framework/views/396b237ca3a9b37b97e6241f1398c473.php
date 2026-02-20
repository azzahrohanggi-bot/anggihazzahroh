<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Edit Mahasiswa</h2>

<form action="<?php echo e(route('mahasiswa.update', $mahasiswa->nim)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <input type="text" value="<?php echo e($mahasiswa->nim); ?>" class="form-control mb-2" disabled>
    <input type="text" name="nama" value="<?php echo e($mahasiswa->nama); ?>" class="form-control mb-2">
    <input type="text" name="kelas" value="<?php echo e($mahasiswa->kelas); ?>" class="form-control mb-2">
    <input type="text" name="matakuliah" value="<?php echo e($mahasiswa->matakuliah); ?>" class="form-control mb-2">

    <button type="submit" class="btn btn-success">Update</button>
</form>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\modul-web-lanjut-anggih-C\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>