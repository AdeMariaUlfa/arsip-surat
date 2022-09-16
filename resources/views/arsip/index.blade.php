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
                        <h1 class="mb-0 fw-bold">Arsip Surat</h1> 
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
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
                                <h4 class="card-title">Arsipkan Surat</h4>
                                <h6 class="card-subtitle">
                                    Berikut ini adalah surat-surat yang telah terbit dan diarsipkakn
                                    </br>
                                    Klik "Lihat" pada kolom aksi untuk menampilkan surat.
                                </h6>
                                <div class="table-responsive m-t-20">
                                <a href="{{ route('arsip.create') }}" class="btn btn-md btn-primary mb-3 float-left">Arsipkan Surat</a>
                                
                                <form action="" method="GET">
                                <input type="search" name="search" class="form-control" placeholder="Search judul arsip &amp; enter"> 
                                <a class="srh-btn"></a>
                                </form><br>
                        
                                <table class="table table-bordered table-responsive-lg">
                                    <thead>
                                        <tr>
                                            <th scope="col">No Surat</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Tanggal Post</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>

                                <tbody>
                                @forelse ($arsips as $a)
                                <tr>
                                    <td>{{ $a->nomorSurat }}</td>
                                    <td>{{ $a->kategori }}</td>
                                    <td>{{ $a->judul }}</td>
                                    <td>{{ $a->created_at }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('detail',$a->nomorSurat) }}" class="btn btn-sm btn-primary">Lihat>>></a>
                                        <a href="{!! route('download', $a->upload) !!}" class="btn btn-sm btn-warning">Unduh</a>
                                        <a href="/destroy/{{ $a->nomorSurat }}" class="btn btn-danger btn-sm" onclick="return confirm('yakin mau dihapus?')">Hapus</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                <td class="text-center text-mute" colspan="4">Tidak ada surat yang di arsipkan!</td>
                                </tr>
                                @endforelse
                               </tbody>
                                </table>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection