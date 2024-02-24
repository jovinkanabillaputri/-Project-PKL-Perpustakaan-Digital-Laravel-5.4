@extends('admin_template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Peminjaman</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('peminjaman.create') }}" class="btn btn-info">Tambah Data Peminjaman</a>
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Anggota</th>
                                                <th>Judul Buku</th>
                                                <th>Tanggal Pinjam</th>
                                                <th>Tanggal Kembali</th>
                                                <th>Jumlah Buku Dipinjam</th>
                                                <!-- <th>Created At</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($peminjaman as $i => $v)
                                                <tr>
                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $v->anggota->nama }}</td>
                                                    <td>{{ $v->buku->judul_buku }}</td>
                                                    <td>{{ $v->tanggal_pinjam }}</td>
                                                    <td>{{ $v->tanggal_kembali }}</td>
                                                    <td>{{ $v->jumlah_buku_dipinjam}}</td>
                                                    <!-- <td>{{ $v->created_at }}</td> -->
                                                    <td>
                                                        <form action="{{ route('peminjaman.destroy', $v->id) }}"
                                                            method="post">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <a href="{{ route('peminjaman.edit', $v->id) }}"
                                                                class="btn btn-primary btn-sm">Edit</a>
                                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <section>
    </div>
@endsection
