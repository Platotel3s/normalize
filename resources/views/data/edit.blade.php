<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Peserta</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <label for="instansi">Asal instansi</label>
        <input type="text" name="asal_instansi" id="instansi" value="{{ $pendaftar->asal_instansi }}">

        <label for="nama_pendaftar">Nama pendaftar</label>
        <input type="text" name="nama_pendaftar" id="nama_pendaftar" value="{{ $pendaftar->nama_pendaftar }}">

        <label for="jk">Jenis kelamin</label>
        <select name="jenis_kelamin" id="jk">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>

        <label for="angkatan">Angkatan</label>
        <input type="text" name="angkatan" id="angkatan" value="{{ $pendaftar->angkatan }}">

        <label for="jurusan">jurusan</label>
        <input type="text" name="jurusan" id="jurusan" value="{{ $pendaftar->jurusan }}">

        <label for="semester">semester</label>
        <input type="number" name="semester" id="semester" value="{{ $pendaftar->semester }}">

        <label for="alasan">Alasan mengikuti kegiatan</label>
        <input type="text" name="alasan" id="alasan" value="{{ $pendaftar->alasan }}">
    </form>
</body>
</html>