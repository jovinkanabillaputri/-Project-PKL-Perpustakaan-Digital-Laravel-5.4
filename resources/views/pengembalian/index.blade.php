@extends('admin_template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Pengembalian</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('pengembalian.create') }}" class="btn btn-info">Tambah Data Pengembalian</a>
                                <div class="row">
                                    <table class="table">
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Anggota</th>
                                                <th scope="col">Judul Buku</th>
                                                <th scope="col">Tanggal Pinjam</th>
                                                <th scope="col">Tanggal Kembali</th>
                                                <th scope="col">Jumlah Buku Dipinjam</th>
                                                <th scope="col">Jumah Buku</th>
                                                <!-- <th scope="col">Semua Data Peminjaman</th> -->
                                                <!-- <th scope="col">Tanggal Pengembalian</th>
                                                <th scope="col">Jumlah Buku Dikembalikan</th> -->
                                                <!-- <th scope="col">Created At</th> -->
                                                <th scope="col">Aksi</th>
                                            </tr>
                                            </thead>
                                        <tbody>
                                            @foreach ($pengembalian as $i => $v)
                                                <tr>
                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $v->peminjaman->nama }}</td>
                                                    <td>{{ $v->peminjaman->judul_buku }}</td>
                                                    <td>{{ $v->peminjaman->tanggal_pinjam }}</td>
                                                    <td>{{ $v->peminjaman->tanggal_kembali }}</td>
                                                    <td>{{ $v->peminjaman->jumlah_buku_dipinjam }}</td>
                                                    <td>{{ $v->peminjaman->jumlah_buku_dikembalikan }}</td>
                                                    <td>{{ $v->created_at }}</td>
                                                    <td>
                                                        <form action="{{ route('pengembalian.destroy', $v->id) }}"
                                                            method="post">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <a href="{{ route('pengembalian.edit', $v->id) }}"
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
        </section>
    </div>
@endsection
