<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\siswa;

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
    public function store(Request $siswa)
    {
        //
        $siswa->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'jurusan' => 'required',
            'agama' => 'required',
        ]);

        $query = DB::table('siswa')->insert([
            $table->string('nama', 45),
            $table->text('alamat'),
            $table->date('tanggal_lahir'),
            $table->enum('jenis_kelamin'),
            $table->string('jurusan', 30),
            $table->string('agama', 20),
        ]);
 
        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //SELECT * FROM siswas WHERE id = $id
        $siswas = DB::table('siswa')->where('id', $id)->get();
        return view('siswa.show', compact('siswa'));
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
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'jurusan' => 'required',
            'agama' => 'required',
        ]);

        $query = DB::table('siswa')->where('id', $id)->update([
            //'field yang ada di table' => $request['name yang dikirim dari form']
            $table->string('nama', 45),
            $table->text('alamat'),
            $table->date('tanggal_lahir'),
            $table->enum('jenis_kelamin'),
            $table->string('jurusan', 30),
            $table->string('agama', 20),
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