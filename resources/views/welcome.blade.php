<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Ubuntu Indonesia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>
    <div class="container mt-4">
        <h1 class="header">Forum Ubuntu Indonesia</h1>
        
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('data.index') }}">
                <button class="btn btn-custom me-2">Data Peserta</button>
            </a>
            <a href="{{ route('data.create') }}">
                <button class="btn btn-custom">Tambah Peserta</button>
            </a>
        </div>
        
        <div class="row">
            <div class="col-md-6 position-relative">
                <img src="{{ asset('gambar/logo_ubuntu.png') }}" class="ubuntu-logo" alt="Ubuntu Logo">
                <p>
                    Ubuntu adalah salah satu distribusi Linux yang paling populer di dunia, dan telah digunakan oleh jutaan pengguna di seluruh dunia.
                    Ubuntu juga memiliki komunitas yang aktif dan besar, dengan banyak pengguna dan pengembang yang berkontribusi pada proyek ini.
                </p>
                <p>
                    Selain itu, Ubuntu juga digunakan oleh banyak organisasi dan perusahaan di seluruh dunia, termasuk di Indonesia.
                    Beberapa contoh penggunaan Ubuntu di Indonesia adalah:
                </p>
                <ul>
                    <li>Pemerintah Indonesia: Beberapa kementerian dan lembaga pemerintah Indonesia telah menggunakan Ubuntu sebagai sistem operasi resmi.</li>
                    <li>Universitas dan sekolah: Banyak universitas dan sekolah di Indonesia telah menggunakan Ubuntu sebagai sistem operasi untuk laboratorium komputer dan kelas.</li>
                    <li>Perusahaan: Beberapa perusahaan di Indonesia telah menggunakan Ubuntu sebagai sistem operasi untuk server dan klien.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('gambar/komunitas.jpg') }}" class="img-fluid rounded" alt="Ubuntu Indonesia Community">
            </div>
        </div>
    </div>
</body>
</html>