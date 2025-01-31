<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftar Baru</title>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <div class="container">
        <img src="{{ asset('gambar/logo_ubuntu.png') }}" alt="Logo Ubuntu" class="ubuntu-logo">
        <nav>
            <h1>Tambah Peserta</h1>
            <div class="sub-nav">
                <a href="{{ route('data.index') }}">
                    <i class="fas fa-list"></i> Data Keanggotaan
                </a>
                <a href="{{ route('welcome') }}">
                    <i class="fas fa-home"></i> Beranda
                </a>
            </div>
        </nav>
        <form action="{{ route('data.store') }}" method="POST">
            @csrf
            <h3>Form Registrasi</h3>
            <label for="instansi">Asal Instansi</label>
            <input type="text" name="asal_instansi" id="instansi" required>
            <label for="nama_pendaftar">Nama Pendaftar</label>
            <input type="text" name="nama_pendaftar" id="nama_pendaftar" required>
            <label for="jk">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jk" required>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
            <label for="alasan">Alasan Mengikuti Kegiatan</label>
            <input type="text" name="alasan" id="alasan" required>
            <button type="submit">Tambah</button>
            <button type="reset">Reset</button>
        </form>
    </div>
</body>
</html>