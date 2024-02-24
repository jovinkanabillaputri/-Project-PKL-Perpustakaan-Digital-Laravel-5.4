@extends('admin_template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data Peminjaman</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <form action="{{ route('peminjaman.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="anggota_id">Nama Anggota</label>
                                        <select class="form-control" name="anggota_id">
                                            <option value="">Pilih Anggota</option>
                                            @foreach ($anggota as $k)
                                                <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">{{ $errors->first('anggota_id') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="buku_id">Judul Buku</label>
                                        <select class="form-control" name="buku_id">
                                            <option value="">Judul Buku</option>
                                            @foreach ($buku as $k)
                                                 @if ($k->stok_buku != 0)<option value="{{ $k->id }}">{{ $k->judul_buku }}</option> @endif
                                            @endforeach
                                        </select>
                                        <p class="text-danger">{{ $errors->first('buku_id') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_pinjam">Tanggal Pinjam</label>
                                        <input type="text" name="tanggal_pinjam" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_kembali">Tanggal Kembali</label>
                                        <input type="text" name="tanggal_kembali" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->addDays(6)->toDateString())) }}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_buku_dipinjam">Jumlah Buku Dipinjam</label>
                                        <input type="number" name="jumlah_buku_dipinjam" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm">Tambah</button>
                                        <a class="btn btn-danger btn-sm" href="{{ route('peminjaman.index')}}" >Batal</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
