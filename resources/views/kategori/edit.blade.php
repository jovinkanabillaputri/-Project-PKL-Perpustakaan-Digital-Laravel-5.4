@extends('admin_template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Data Kategori</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="container mt-3mb-3">
                                    <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="form-group">
                                            <label for="kategori_buku">Kategori</label>
                                            <input type="text" name="kategori_buku" class="form-control"
                                                value="{{ $kategori->kategori_buku }}" required>
                                            <p class="text-danger">{{ $errors->first('kategori_buku') }}</p>
                                        </div>
                                        <button class="btn btn-primary btn-sm">Ubah</button>
                                        <a class="btn btn-danger btn-sm" href="{{ route('kategori.index')}}" >Batal</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
