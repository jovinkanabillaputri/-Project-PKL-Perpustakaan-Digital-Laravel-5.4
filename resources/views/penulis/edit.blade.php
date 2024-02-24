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
                                <form action="{{ route('penulis.update', $penulis->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group">
                                        <label for="nama_penulis">Nama Penulis</label>
                                        <input type="text" name="nama_penulis" class="form-control"
                                            value="{{ $penulis->nama_penulis }}" required>
                                        <p class="text-danger">{{ $errors->first('nama_penulis') }}</p>
                                    </div>
                                    <button class="btn btn-primary btn-sm">Ubah</button>
                                    <a class="btn btn-danger btn-sm" href="{{ route('penulis.index')}}" >Batal</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
