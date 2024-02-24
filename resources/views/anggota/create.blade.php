@extends('admin_template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data Anggota</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <form action="{{ route('anggota.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" name="nama" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select name="jenis_kelamin"
                                                class="custom-select @error('jenis_kelamin') is-invalid @enderror">
                                                <option value="">Silahkan Pilih</option>
                                                <option value="laki-laki">Laki-laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp">No Handphone</label>
                                            <input type="text" name="no_hp" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" class="form-control" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_daftar">Tanggal Daftar</label>
                                            <input type="date" name="tanggal_daftar" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label fzor="status">Status</label>
                                            <select name="status"
                                                class="custom-select @error('status') is-invalid @enderror">
                                                <option value="">Silahkan Pilih</option>
                                                <option value="aktif" require>Aktif</option>
                                                <option value="tidak aktif" require>Tidak Aktif</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-sm">Tambah</button>
                                            <a class="btn btn-danger btn-sm" href="{{ route('anggota.index')}}" >Batal</a>
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
