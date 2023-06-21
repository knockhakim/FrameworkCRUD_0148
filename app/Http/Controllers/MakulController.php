<?php

namespace App\Http\Controllers;

use App\Models\Makul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class MakulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('makul.index', [
           'makuls' => DB::table('makuls')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('makul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formsFields = $request->validate([
            // Aturan validasi untuk inputan
            'code' => ['required', Rule::unique('makuls', 'code')],
            'name' => 'required',
            'sks' => 'required',
            'prodi' => 'required',
        ], [
            'code.required' => 'Kode mata kuliah harus diisi!',
            'code.unique' => 'Kode mata kuliah sudah ada!',
            'name.required' => 'Nama harus diisi!',
            'sks.required' => 'SKS mata kuliah harus diisi!',
            'prodi.required' => 'Prodi harus diisi!',
        ]);

        Makul::create($formsFields);

        return redirect('/makul')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Makul $makul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Makul $makul)
    {
        return view('makul.edit', [
           'makul' => $makul
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Makul $makul)
    {
        $formsFields = $request->validate([
            // Aturan validasi untuk inputan
            'code' => 'required',
            'name' => 'required',
            'sks' => 'required',
            'prodi' => 'required',
        ], [
            'code.required' => 'Kode mata kuliah harus diisi!',
            'name.required' => 'Nama harus diisi!',
            'sks.required' => 'SKS mata kuliah harus diisi!',
            'prodi.required' => 'Prodi harus diisi!',
        ]);

        $makul->update($formsFields);

        return redirect()->route('makul.index')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Makul $makul)
    {
        $makul->delete();

        return redirect('/makul')->with('message', 'Data berhasil dihapus');
    }
}
