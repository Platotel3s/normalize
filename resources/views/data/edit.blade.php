<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Peserta</title>
</head>
<body>
    <form action="{{ route('data.update',$pendaftar->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h3>Halaman edit data</h3>
        <label for="instansi">Asal instansi</label>
        <input type="text" name="asal_instansi" id="instansi" value="{{ $pendaftar->asal_instansi }}">

        <label for="nama_pendaftar">Nama pendaftar</label>
        <input type="text" name="nama_pendaftar" id="nama_pendaftar" value="{{ $pendaftar->nama_pendaftar }}">

        <label for="jk">Jenis kelamin</label>
        <select name="jenis_kelamin" id="jk">
            <option value="Pria" {{ $pendaftar->jenis_kelamin == 'Pria' ? 'selected' : '' }}>Pria</option>
            <option value="Wanita" {{ $pendaftar->jenis_kelamin == 'Wanita' ? 'selected' : '' }}>Wanita</option>
        </select>

        <label for="alasan">Alasan mengikuti kegiatan</label>
        <input type="text" name="alasan" id="alasan" value="{{ $pendaftar->alasan }}">

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>