@extends('layouts.pages')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route("klinik.index")}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="/klinikdel/public/pegawai">Data Pegawai</a></li>
                        <li class="breadcrumb-item active">Tambah Data Pegawai</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="container">
            <h2 class="text-center">Form Tambah Data Pegawai</h2>
            <a href="{{ route('pegawai.index') }}" class="btn btn-primary mb-2">Data Pegawai</a>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label for="propesi" class="col-sm-2 col-form-label">Profesi</label>
                            <div class="col-sm-2">
                                <select class="form-select form-control" name="propesi" id="propesi">
                                    <option value="Dokter">Dokter</option>
                                    <option value="Perawat">Perawat</option>
                                    <option value="Bidan">Bidan</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="alamat" id="alamat">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="telepon" id="telepon">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="harimulai" class="col-sm-2 col-form-label">Hari Mulai</label>
                            <div class="col-sm-2">
                                <select class="form-select form-control" name="harimulai" id="harimulai">
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="hariakhir" class="col-sm-2 col-form-label">Hari Akhir</label>
                            <div class="col-sm-2">
                                <select class="form-select form-control" name="hariakhir" id="hariakhir">
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jammulai" class="col-sm-2 col-form-label">Jam Mulai Kerja</label>
                            <div class="col-sm-7">
                                <input type="time" class="form-control" name="jammulai" id="jammulai">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jamakhir" class="col-sm-2 col-form-label">Jam Akhir Kerja</label>
                            <div class="col-sm-7">
                                <input type="time" class="form-control" name="jamakhir" id="jamakhir">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-2">
                                <select class="form-select form-control" name="status" id="status">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="foto" class="col-sm-2 col-form-label">Upload Foto</label>
                            <div class="col-sm-7">
                                <input type="file" name="foto" id="foto" accept="image/*"
                                       onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                        </div>
                        <div class="ml-5"><img src="" id="output" width="150px"></div>
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
