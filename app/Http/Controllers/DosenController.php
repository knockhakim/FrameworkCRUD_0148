<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dosen.index', [
            'dosens' => DB::table('dosens')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formsFields = $request->validate([
            'nid' => ['required', Rule::unique('dosens', 'nid')],
            'nama' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'golongan' => 'required'
        ], [
            'nid.required' => 'Nomor Induk Dosen harus diisi!',
            'nid.unique' => 'Nomor Induk Dosen sudah ada!',
            'nama.required' => 'Nama harus diisi!',
            'umur.required' => 'Umur harus diisi!',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'telepon.required' => 'Kota harus diisi!',
            'golongan.required' => 'Jurusan harus diisi!',
        ]);

        if ($request->hasFile('photo')){
            $formsFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        Dosen::create($formsFields);

        return redirect('/dosen')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', [
           'dosen' => $dosen
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        $formsFields = $request->validate([
            'nid' => 'required',
            'nama' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'golongan' => 'required'
        ], [
            'nid.required' => 'Nomor Induk Dosen harus diisi!',
            'nama.required' => 'Nama harus diisi!',
            'umur.required' => 'Umur harus diisi!',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'telepon.required' => 'Kota harus diisi!',
            'golongan.required' => 'Jurusan harus diisi!',
        ]);

        if ($request->hasFile('photo')){
            $formsFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $dosen->update($formsFields);

        return redirect('/dosen')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect('/dosen')->with('message', 'Data berhasil dihapus');
    }
}
