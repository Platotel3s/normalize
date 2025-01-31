<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peserta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>

    <div class="container">
        <img src="{{ asset('gambar/logo_ubuntu.png') }}" alt="Logo ubuntu" class="ubuntu-logo">
        <h3>Edit Data Peserta</h3>
        <form action="{{ route('data.update',$pendaftar->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="instansi" class="form-label">Asal Instansi</label>
                <input type="text" class="form-control" name="asal_instansi" id="instansi" value="{{ $pendaftar->asal_instansi }}">
            </div>

            <div class="mb-3">
                <label for="nama_pendaftar" class="form-label">Nama Pendaftar</label>
                <input type="text" class="form-control" name="nama_pendaftar" id="nama_pendaftar" value="{{ $pendaftar->nama_pendaftar }}">
            </div>

            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jenis_kelamin" id="jk">
                    <option value="Pria" {{ $pendaftar->jenis_kelamin == 'Pria' ? 'selected' : '' }}>Pria</option>
                    <option value="Wanita" {{ $pendaftar->jenis_kelamin == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="alasan" class="form-label">Alasan Mengikuti Kegiatan</label>
                <input type="text" class="form-control" name="alasan" id="alasan" value="{{ $pendaftar->alasan }}">
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
    </div>

</body>
</html>
