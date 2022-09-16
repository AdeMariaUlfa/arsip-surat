@extends('layouts.layout')
@section('isi')
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Arsip</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Unggah Arsip Surat</h1> 
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                         <!-- Notifikasi menggunakan flash session data -->
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if (session('error'))
                        <div class="alert alert-error">
                            {{ session('error') }}
                        </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <h3>Arsip Surat >> Unggah</h3>
                                <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan
                                    </br>
                                    Catatan :
                                <ul>
                                    <li>Gunakan file berformat PDF</li>
                                </ul>
                                </p>
                                <form action="{{ route('arsip.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="noSurat" class="col-sm-2 col-form-label">No Surat</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control @error('nomorSurat') is-invalid @enderror" name="nomorSurat" value="{{ old('nomorSurat') }}" required>

                                <!-- error message untuk title -->
                                @error('nomorSurat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-4">
                                <select name="kategori" class="form-control" required>
                                    <option>Undangan</option>
                                    <option>Pengumuman</option>
                                    <option>Nota Dinas</option>
                                    <option>Pemberitahuan</option>
                                </select>
                                @error('kategori')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required>

                                <!-- error message untuk content -->
                                @error('judul')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="upload" class="col-sm-2 col-form-label">File Surat(PDF)</label>
                            <div class="col-sm-4">

                                <input class="form-control-file" type="file" name="upload">

                            </div>
                            @error('upload')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        </br>
                        </br>
                        <a href="{{ route('arsip.index') }}" class="btn btn-md btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-md btn-primary">Simpan</button>


                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection