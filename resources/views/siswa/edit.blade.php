@extends('layout.master')
@section('title', 'siswa')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Anggota</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Anggota</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Anggota</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('siswa.update', $siswas[0]->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nis">NIS</label>
                                    <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis" id="nis" placeholder="Masukan Kode" value="{{ $siswas[0]->nis }}">
                                </div>
                                @error('nis')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukan nama" value="{{ $siswas[0]->nama }}">
                                </div>
                                @error('nama')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="Tanggal lahir">Tanggal lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" id="kode" placeholder="Masukan Tanggal lahir" value="{{ $siswas[0]->nama }}" >
                                </div>
                                @error('Tanggal_lahir')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="custom-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ $siswas[0]->jenis_kelamin }}">
                                        <option selected disabled></option>
                                        <option value="L">LAKI-LAKI</option>
                                        <option value="P">PEREMPUAN</option>
                                    </select>
                                </div>
                                @error('jenis_kelamin')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" id="jurusan" placeholder="" value="{{ $siswas[0]->jurusan }}"> 
                                </div>
                                 @error('jurusan')
                                 <div class="alert alert-danger mt-1">{{ $message }}</div>
                                 @enderror
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" rows="3" name="alamat" placeholder="Masukan Alamat">{{ $siswas[0]->alamat }}</textarea>
                                </div>
                                @error('alamat')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Agama</label>
                                    <select class="custom-select @error('agama') is-invalid @enderror" name="agama" value="{{ $siswas[0]->agama }}">
                                        <option selected disabled>Pilih Agama</option>
                                        <option value="ISLAM">Islam</option>
                                        <option value="KRISTEN">Kristen</option>
                                    </select>
                                </div>
                                @error('agama')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('siswa.index') }}" class="btn btn-primary">Back</a>
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                            <!-- /.content -->
                        </form>
                    </div>
                    @endsection