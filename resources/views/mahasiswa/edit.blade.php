<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Edit Mahasiswa</h2>

<form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" value="{{ $mahasiswa->nim }}" class="form-control mb-2" disabled>
    <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control mb-2">
    <input type="text" name="kelas" value="{{ $mahasiswa->kelas }}" class="form-control mb-2">
    <input type="text" name="matakuliah" value="{{ $mahasiswa->matakuliah }}" class="form-control mb-2">

    <button type="submit" class="btn btn-success">Update</button>
</form>

</body>
</html>
