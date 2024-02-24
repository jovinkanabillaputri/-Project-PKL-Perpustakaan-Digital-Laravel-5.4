@extends('admin_template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Data Rak</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <form action="{{ route('rak.update', $rak->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group">
                                        <label for="lokasi_rak">Lokasi Rak</label>
                                        <input type="text" name="lokasi_rak" class="form-control"
                                            value="{{ $rak->lokasi_rak }}" required>
                                        <p class="text-danger">{{ $errors->first('lokasi_rak') }}</p>
                                    </div>
                                    <button class="btn btn-primary btn-sm">Ubah</button>
                                    <a class="btn btn-danger btn-sm" href="{{ route('rak.index')}}" >Batal</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
