<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loby Utama</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> --}}

</head>
<body>
    <div class="container">
        <img src="{{ asset('gambar/logo_ubuntu.png') }}" alt="" class="ubuntu-logo">
        <nav>
            <h1>Data Peserta Kegiatan</h1>
            <div class="sub-nav">
                <a href="{{ route('welcome') }}">
                    <i class="fas fa-home"></i> Beranda
                </a>
                <a href="{{ route('data.create') }}">
                    <i class="fas fa-user-plus"></i> Tambah Peserta
                </a>
            </div>
        </nav>
        <div class="data-peserta">
            <table>
                @if (session('success'))
                    <div class="notifikasi">
                        <i class="fas fa-check"></i> {{ session('success') }}
                    </div>
                @endif
                <thead>
                    <tr>
                        <th>Asal Instansi</th>
                        <th>Nama Peserta</th>
                        <th>Gender</th>
                        <th>Alasan Mengikuti Kegiatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pendaftar as $pendaftars)
                        <tr>
                            <td>{{ $pendaftars->asal_instansi }}</td>
                            <td>{{ $pendaftars->nama_pendaftar }}</td>
                            <td>{{ $pendaftars->jenis_kelamin }}</td>
                            <td>{{ $pendaftars->alasan }}</td>
                            <td class="action-buttons">
                                <a href="{{ route('data.edit',$pendaftars->id) }}" class="edit-btn">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('data.delete',$pendaftars->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-btn">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $pendaftar->links() }}

        <br>
        
    </div>
</body>
</html>
