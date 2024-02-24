@extends('admin_template')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{$jumlah_anggota}}</h3>
                    <p>Anggota</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-contact"></i>
                </div>
                <a href="http://127.0.0.1:8000/anggota" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                <h3>{{$jumlah_buku}}</h3>
                    <p>Buku</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-briefcase-outline"></i>
                </div>
                <a href="http://127.0.0.1:8000/buku" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                <h3>{{$jumlah_penerbit}}</h3>
                    <p>Penerbit</p>
                </div>
                <div class="icon">
                    <i class="ion ion-location"></i>
                </div>
                <a href="http://127.0.0.1:8000/penerbit" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-blue">
                <div class="inner">
                <h3>{{$jumlah_penulis}}</h3>
                    <p>Penulis</p>
                </div>
                <div class="icon">
                    <i class="ion ion-location"></i>
                </div>
                <a href="http://127.0.0.1:8000/penulis" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@endsection
