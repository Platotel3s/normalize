<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftar=Pendaftar::paginate(10);
        return view('data.index',compact('pendaftar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { // fungsi ini berfungsi memproses input data dari formulir. $request adalah variabel untuk menyimpan validasi yang disyaratkan.  
        $request->validate([
            'asal_instansi'=>'required|string|max:255', // required artinya wajib terisi.
            'nama_pendaftar'=>'required|string|max:255',
            'jenis_kelamin'=>'required|in:Pria,Wanita',
            'angkatan'=>'required|string',
            'jurusan'=>'required|string',
            'semester'=>'required|integer',
            'alasan'=>'required|string|max:255',
        ]); 
        Pendaftar::create($request->only([
            'asal_instansi',
            'nama_pendaftar',
            'jenis_kelamin',
            'angkatan',
            'jurusan',
            'semester',
            'alasan',
        ])); // Baris ini berfungsi memasukkan inputan dari variabel $request ke database. 
        return redirect()->route('data.index')->with('success','berhasil input peserta'); // Baris ini berfungsi untuk mengarahkan aplikasi ke loby setelah berhasil memasukkan data ke database. 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pendaftar=Pendaftar::findOrFail($id);
        return view('data.show',compact('pendaftar'));
        // Fungsi menampilkan data
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pendaftar=Pendaftar::findOrFail($id);
        return view('data.edit',compact('pendaftar'));
        // Fungsi mengarahkan ke halaman edit data
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'asal_instansi'=>'required|string|max:255', // required artinya wajib diisi.
            'nama_pendaftar'=>'required|string|max:255',
            'jenis_kelamin'=>'required',
            'angkatan'=>'required|string',
            'jurusan'=>'required|string',
            'semester'=>'required|integer',
            'alasan'=>'required|string|max:255',
        ]);
        $pendaftar=Pendaftar::findOrFail($id);
        $pendaftar->update($request->all());
        return redirect()->route('data.index')->with('success','Berhasil memperbarui data');

        /** Penjelasan : 
         * Untuk menggunakan fungsi ini,website harus mendapatkan id dari suatu record.
         * Kemudian data peserta dari id tersebut ditampilkan. 
         * Laravel mewajibkan semua record yang tersimpan dalam variabel $request harus terisi. 
         * Jika sudah terisi maka laravel akan memperbarui data yang telah diperbarui (baris 80)
         */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pendaftar=Pendaftar::findOrFail($id);
        $pendaftar->delete();
        return redirect()->route('data.index')->with('success','Berhasil dihapus');
    }
}

/**
 * 
 * 
 */
