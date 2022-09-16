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
                        <h1 class="mb-0 fw-bold">Lihat Arsip Surat</h1> 
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                       
                        <div class="card">
                            <div class="card-body">
                            <p>
                    <ul>
                        <li>No Surat : {{$arsips->nomorSurat}}</li>
                        <li>Kategori : {{$arsips->kategori}}</li>
                        <li>Judul : {{$arsips->judul}}</li>
                        <li>Waktu Uanggah : {{$arsips->created_at}}</li>
                    </ul>
                    </p>
                    <iframe src="{{asset('file/'.$arsips->upload) }}" height="400" width="100%" frameborder="0" scrolling="auto"></iframe>
                    <br>
                    <br>
                    <a href="{{ route('arsip.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    <a href="{!! route('download', $arsips->upload) !!}" class="btn btn-sm btn-warning">Unduh</a>
                    <a href="/edit/{{ $arsips->nomorSurat }}" class="btn btn-sm btn-secondary">Edit/Ganti File</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection