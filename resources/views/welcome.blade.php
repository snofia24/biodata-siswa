@extends('layout.master')
@section('title', 'Home')
@section('content')

<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">SMKN 1 KARAWANG</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
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
                            
                        <!-- /.col-md-6 -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="m-0">Visi</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Terwujudnya lembaga pendidikan dan pelatihan</h6>

                                    <p class="card-text">bertaraf internasional yang menghasilkan lulsan kreatif,inonatif dan profesional serta berdaya saing tinggi berlandaskan iman dan taqwa</p>
                                    <a href="/cast" class="btn btn-primary">Click me</a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="m-0">Misi</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Mengambangkan bidang ilmu pengetahuan dan teknologi </h6>
                                    <p class="card-text">berdasarkan perkembangan zaman dan membentuk lingkungan belajar yang berkarakter dan berbudaya lokal</p>
                                    <a href="/genre" class="btn btn-primary">Click me</a>
                                </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
@endsection