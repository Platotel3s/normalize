<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftar baru</title>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <a href="{{ route('data.index') }}">
        <i class="fas fa-home"></i>
    </a>

    <form action="{{ route('data.store') }}" method="POST">
        @csrf
        <h3>Form registrasi</h3>
        <label for="instansi">Asal instansi</label>
        <input type="text" name="asal_instansi" id="instansi">

        <label for="nama_pendaftar">Nama pendaftar</label>
        <input type="text" name="nama_pendaftar" id="nama_pendaftar">

        <label for="jk">Jenis kelamin</label>
        <select name="jenis_kelamin" id="jk">
            <option value="Pria">Pria</option>
            <option value="wanita">Wanita</option>
        </select>

        <label for="angkatan">Angkatan</label>
        <input type="text" name="angkatan" id="angkatan">

        <label for="jurusan">jurusan</label>
        <input type="text" name="jurusan" id="jurusan">

        <label for="semester">semester</label>
        <input type="number" name="semester" id="semester">

        <button type="submit">Tambah</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>