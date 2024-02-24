@extends('admin_template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Data Anggota</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <form action="{{ route('anggota.update', $anggota->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control"
                                            value="{{ $anggota->nama }}" required>
                                        <p class="text-danger">{{ $errors->first('nama') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin"
                                            class="custom-select @error('jenis_kelamin') is-invalid @enderror">
                                            <option value="">Silahkan Pilih</option>
                                            <option value="Laki-laki"
                                                {{ $anggota->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                                            </option>
                                            <option value="Perempuan"
                                                {{ $anggota->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No Handphone</label>
                                        <input type="text" name="no_hp" class="form-control"
                                            value="{{ $anggota->no_hp }}" required>
                                        <p class="text-danger">{{ $errors->first('no_hp') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control"
                                            value="{{ $anggota->email }}" required>
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="alamat" class="form-control" required>{{ $anggota->alamat }} </textarea>
                                        <p class="text-danger">{{ $errors->first('alamat') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_daftar">Tanggal Daftar</label>
                                        <input type="date" name="tanggal_daftar" class="form-control"
                                            value={{ $anggota->tanggal_daftar }} required>
                                        <p class="text-danger">{{ $errors->first('tanggal_daftar') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="status" class="custom-select @error('status') is-invalid @enderror">
                                            <option value="">Silahkan Pilih</option>
                                            <option value="aktif" {{ $anggota->status == 'aktif' ? 'selected' : '' }}>
                                                Aktif</option>
                                            <option value="tidak aktif"
                                                {{ $anggota->status == 'tidak aktif' ? 'selected' : '' }}>Tidak Aktif
                                            </option>
                                        </select>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary btn-sm">Ubah</button>
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
