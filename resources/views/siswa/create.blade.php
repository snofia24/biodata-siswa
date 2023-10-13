@extends('layout.master')
@section('title', 'siswa')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Siswa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Siswa</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Data Siswa</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('siswa.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="NIS">NIS</label>
                            <input type="numer" class="form-control" name="nis" id="NIS" placeholder="Masukkan NIS">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="Nama" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="Tanggal lahir">Tanggal lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" id="kode" placeholder="Masukan Tanggal lahir">
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select class="custom-select" name="jenis_kelamin">
                                <option selected disabled>Pilih Jenis Kelamin</option>
                                <option value="L">LAKI-LAKI</option>
                                <option value="P">PEREMPUAN</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select class="custom-select" name="jurusan">
                                <option selected disabled>Pilih Jurusan</option>
                                <option value="RPL">RPL</option>
                                <option value="DPIB">DPIB</option>
                                <option value="TP">TP</option>
                                <option value="TFLM">TFLM</option>
                                <option value="TEI">TEI</option>
                                <option value="TITL">TITL</option>
                                <option value="TKJ">TKJ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select class="custom-select" name="agama">
                                <option selected disabled>Pilih Agama</option>
                                <option value="ISLAM">Islam</option>
                                <option value="KRISTEN">Kristen</option>
                            </select>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
@endsection