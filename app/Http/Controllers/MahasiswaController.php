<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mahasiswa.index', [
           'mahasiswas' => DB::table('mahasiswas')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formsFields = $request->validate([
            // Aturan validasi untuk inputan
            'nim' => ['required', Rule::unique('mahasiswas', 'nim')],
            'nama' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
        ], [
            'nim.required' => 'Nomor Induk Mahasiswa harus diisi!',
            'nim.unique' => 'Nomor Induk Mahasiswa sudah ada!',
            'nama.required' => 'Nama harus diisi!',
            'umur.required' => 'Umur harus diisi!',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'kota.required' => 'Kota harus diisi!',
            'jurusan.required' => 'Jurusan harus diisi!',
            'kelas.required' => 'Kelas harus diisi!',
        ]);

        if ($request->hasFile('photo')){
            $formsFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        Mahasiswa::create($formsFields);

        return redirect('/mahasiswa')->with('message', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', [
           'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $formsFields = $request->validate([
            // Aturan validasi untuk inputan
            'nim' => 'required',
            'nama' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
        ], [
            'nim.required' => 'Nomor Induk Mahasiswa harus diisi!',
            'nama.required' => 'Nama harus diisi!',
            'umur.required' => 'Umur harus diisi!',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'kota.required' => 'Kota harus diisi!',
            'jurusan.required' => 'Jurusan harus diisi!',
            'kelas.required' => 'Kelas harus diisi!',
        ]);

        if ($request->hasFile('photo')){
            $formsFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $mahasiswa->update($formsFields);

        return redirect('/mahasiswa')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect('/mahasiswa')->with('message', 'Data berhasil dihapus');
    }
}
