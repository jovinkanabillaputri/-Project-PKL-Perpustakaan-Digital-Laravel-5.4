@extends('admin_template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Data Pengembalian</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <form action="{{ route('pengembalian.update', $pengembalian->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group">
                                        <label for="peminjaman_id">Pengembalian</label>
                                        <select class="form-control" name="peminjaman_id">
                                            <option value="">Semua Data Peminjaman</option>
                                            @foreach ($peminjaman as $k)
                                                <option value="{{ $k->id }}"
                                                    @if ($pengembalian->peminjaman_id == $k->id) selected @endif>
                                                    {{ $k->nama }} - {{ $k->judul_buku }} - {{ $k->tanggal_pinjam }} - {{ $k->tanggal_kembali }} - {{ $k->jumlah_buku_dipinjam }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">{{ $errors->first('peminjaman_id') }}</p>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                                        <input type="date" name="tanggal_pengembalian" class="form-control"
                                            value="{{ $pengembalian->tanggal_pengembalian }}" required>
                                        <p class="text-danger">{{ $errors->first('tanggal_pengembalian') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_buku_dikembalikan">Jumlah Buku Dikembalikan</label>
                                        <input type="number" name="jumlah_buku_dikembalikan" class="form-control"
                                            value="{{ $pengembalian->jumlah_buku_dikembaikan }}" required>
                                        <p class="text-danger">{{ $errors->first('jumlah_buku_dikembalikan') }}</p>
                                    </div> -->
                                    <button class="btn btn-primary btn-sm">Ubah</button>
                                    <a class="btn btn-danger btn-sm" href="{{ route('peminjaman.index')}}" >Batal</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
