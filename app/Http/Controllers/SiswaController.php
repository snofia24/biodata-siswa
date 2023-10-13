<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $siswas = DB::table('siswas')->get();
        return view('siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'agama' => 'required',
        ]);

        $query = DB::table('siswas')->insert([
            'nis' => $request['nis'],
            'nama' => $request['nama'],
            'alamat' => $request['alamat'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'jurusan' => $request['jurusan'],
            'agama' => $request['agama'],
        ]);
 
        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //SELECT * FROM siswas WHERE id = $id
        $siswas = DB::table('siswas')->where('id', $id)->get();
        return view('siswa.show', compact('siswas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $siswas = DB::table('siswas')->where('id', $id)->get();
        return view('siswa.edit', compact('siswas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'agama' => 'required',
        ]);

        $query = DB::table('siswas')->where('id', $id)->update([
            //'field yang ada di table' => $request['name yang dikirim dari form']
            'nis' => $request['nis'],
            'nama' => $request['nama'],
            'alamat' => $request['alamat'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'jurusan' => $request['jurusan'],
            'agama' => $request['agama'],
        ]);
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = DB::table('siswas')->where('id', $id)->delete();
        return redirect()->route('siswa.index');
    }
}