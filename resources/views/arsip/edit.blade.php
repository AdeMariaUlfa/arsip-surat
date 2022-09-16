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
                        <h1 class="mb-0 fw-bold">Edit Arsip Surat</h1> 
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                       
                        <div class="card">
                            <div class="card-body">
                            <form action="/edit/{{ $arsips->nomorSurat }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    <option selected>{{ $arsips->kategori }}</option>
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

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $arsips->judul }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Upload</label>
                                <input type="file" name="upload"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $arsips->upload }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>

@endsection