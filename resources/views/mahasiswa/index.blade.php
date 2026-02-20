<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Data Mahasiswa</h2>

<a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">
    Tambah Data
</a>

<table class="table table-bordered">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Matakuliah</th>
        <th>Aksi</th>
    </tr>

    @foreach ($mahasiswas as $mhs)
    <tr>
        <td>{{ $mhs->nim }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->kelas }}</td>
        <td>{{ $mhs->matakuliah }}</td>
        <td>
            <a href="{{ route('mahasiswa.edit', $mhs->nim) }}" class="btn btn-warning btn-sm">Edit</a>

            <form action="{{ route('mahasiswa.destroy', $mhs->nim) }}" 
                  method="POST" 
                  style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>
