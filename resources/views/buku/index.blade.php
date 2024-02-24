<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
@extends('admin_template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Buku</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('buku.create') }}" class="btn btn-info m-2">Tambah Data Buku</a>
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Cover</th>
                                                <th scope="col">ISBN_ISSN</th>
                                                <th scope="col">Judul Buku</th>
                                                 <!-- <th scope="col">Penulis</th> -->
                                                <!-- <th scope="col">Penerbit</th> -->
                                                <!-- <th scope="col">Tahun Terbit</th> -->
                                                <!-- <th scope="col">Tempat Terbit</th> -->
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Stok Buku</th>
                                                <!-- <th scope="col">Rak</th>  -->
                                                <th scope="col">Deskripsi</th>
                                                 <!-- <th scope="col">Created At</th> -->
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($buku as $i => $v)
                                                <tr>
                                                    <td>{{ $i + 1 }}</td>
                                                    <td><img width="150px" src="{{ url('/data_file/' . $v->cover) }}"></td>
                                                    <td>{{ $v->isbn_issn }}</td>
                                                    <td>{{ $v->judul_buku }}</td>
                                                    <!-- <<td>{{ $v->penulis->nama_penulis }}</td>
                                                    <td>{{ $v->penerbit->nama_penerbit }}</td>
                                                    <td>{{ $v->tahun_terbit }}</td>
                                                    <td>{{ $v->tempat_terbit }}</td> -->
                                                    <td>{{ $v->kategori->kategori_buku }}</td>
                                                    <td>{{ $v->stok_buku }}</td>
                                                     <!-- <td>{{ $v->rak->lokasi_rak }}</td> -->
                                                    <td>{{ $v->deskripsi }}</td>
                                                    <!-- <td>{{ $v->created_at }}</td> -->
                                                    <td>
                                                        <form action="{{ route('buku.destroy', $v->id) }}" method="post" onsubmit="return confirm('apakah data ingin dihapus')">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <a href="{{ route('buku.edit', $v->id) }}"
                                                                class="btn btn-primary btn-sm">Edit</a>
                                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                                        </form>
                                                </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

</body>
</html>