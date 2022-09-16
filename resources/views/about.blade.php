@extends('layouts.layout')
@section('isi')
<div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Menu</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Profile</h1> 
                    </div>
                </div>
                </div>

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="{{asset('gambar/me.jpg')}}"
                                        class="rounded-circle" width="150" />
                                    <h4 class="card-title m-t-10">Ade Maria Ulfa</h4>
                                    <h6 class="card-subtitle">Politeknik Negeri Malang</h6>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6>ademariaulfaa@gmail.com</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>+62 899 5286 700</h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6>Malang, Jawa Timur, 65451</h6>
                                <div class="map-box">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.8995661803806!2d112.67747159165492!3d-7.968194762386028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd628f01cf8a1f1%3A0x65d369f13ea4c737!2sGempol%2C%20Sekarpuro%2C%20Pakis%2C%20Malang%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1663254745708!5m2!1sen!2sid"  width="100%" height="150" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                   
                                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br />
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-instagram"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-whatsapp"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <b><label class="col-md-12">Nama Lengkap</label></b>
                                        Ade Maria Ulfa
                                    </div>
                                    <div class="form-group">
                                        <b><label for="example-email" class="col-md-12">NIM</label></b>
                                        <div class="col-md-12">
                                            1931710168
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <b><label class="col-md-12">Tanggal</label></b>
                                        15 September 2022
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
</div>
@endsection