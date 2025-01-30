<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loby utama</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
</head>
<body>
    <div class="notifikasi">
        @if (session('success'))
            <i class="fas fa-check"></i>
            <span>Berhasil</span>
        @endif
    </div>

    <a href="{{ route('data.create') }}">
        <i class="fas fa-add"></i>
    </a>
    {{ $pendaftar->links() }}
    <div class="data-peserta">
        <table>
             <thead>
                <tr>
                    <th>Asal instansi</th>
                    <th>Nama peserta</th>
                    <th>Gender</th>
                    <th>Angkatan</th>
                    <th>Jurusan</th>
                    <th>Semester</th>
                    <th>Alasan mengikuti kegiatan</th>
                </tr>
             </thead>
             <tbody>
                @foreach ($pendaftar as $pendaftars)
                    <tr>
                        <td>{{ $pendaftars->asal_instansi }}</td>
                        <td>{{ $pendaftars->nama_pendaftar }}</td>
                        <td>{{ $pendaftars->jenis_kelamin }}</td>
                        <td>{{ $pendaftars->angkatan }}</td>
                        <td>{{ $pendaftars->jurusan }}</td>
                        <td>{{ $pendaftars->semester }}</td>
                        <td>{{ $pendaftars->alasan }}</td>
                    </tr>
                @endforeach
             </tbody>
        </table>
    </div>


</body>
</html>