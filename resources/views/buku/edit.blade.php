@extends('admin_template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Data Buku</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <form action="{{ route('buku.update', $buku->id) }}" enctype="multipart/form-data"
                                    method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group">
                                        <label for="cover">cover</label>
                                        <input type="file" name="cover" class="form-control"
                                            value="{{ $buku->cover }}">
                                        <p class="text-danger">{{ $errors->first('cover') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="isbn_issn">Isbn_Issn</label>
                                        <input type="text" name="isbn_issn" class="form-control"
                                            value="{{ $buku->isbn_issn }}" required>
                                        <p class="text-danger">{{ $errors->first('isbn_issn') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="judul_buku">Judul Buku</label>
                                        <input type="text" name="judul_buku" class="form-control"
                                            value="{{ $buku->judul_buku }}" required>
                                        <p class="text-danger">{{ $errors->first('judul_buku') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="penulis_id">Penulis</label>
                                        <select class="form-control" name="penulis_id">
                                            <option value="">Pilih Penulis</option>
                                            @foreach ($penulis as $k)
                                                <option value="{{ $k->id }}"
                                                    @if ($buku->penulis_id == $k->id) selected @endif>
                                                    {{ $k->nama_penulis }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">{{ $errors->first('penulis_id') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="penerbit_id">Penerbit</label>
                                        <select class="form-control" name="penerbit_id">
                                            <option value="">Pilih Penerbit</option>
                                            @foreach ($penerbit as $k)
                                                <option value="{{ $k->id }}"
                                                    @if ($buku->penerbit_id == $k->id) selected @endif>
                                                    {{ $k->nama_penerbit }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">{{ $errors->first('penerbit_id') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun_terbit">Tahun Terbit</label>
                                        <input type="date" name="tahun_terbit" class="form-control"
                                            value="{{ $buku->tahun_terbit }}" required>
                                        <p class="text-danger">{{ $errors->first('tahun_terbit') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_terbit">Tempat Terbit</label>
                                        <input type="text" name="tempat_terbit" class="form-control"
                                            value="{{ $buku->tempat_terbit }}" required>
                                        <p class="text-danger">{{ $errors->first('tempat_terbit') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori_id">Kategori Buku</label>
                                        <select class="form-control" name="kategori_id">
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($kategori as $k)
                                                <option value="{{ $k->id }}"
                                                    @if ($buku->kategori_id == $k->id) selected @endif>
                                                    {{ $k->kategori_buku }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">{{ $errors->first('kategori_id') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok_buku">Stok Buku</label>
                                        <input type="number" name="stok_buku" class="form-control"
                                            value="{{ $buku->stok_buku }}" required>
                                        <p class="text-danger">{{ $errors->first('stok_buku') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="rak_id">Rak Buku</label>
                                        <select class="form-control" name="rak_id">
                                            <option value="">Pilih Rak</option>
                                            @foreach ($rak as $k)
                                                <option value="{{ $k->id }}"
                                                    @if ($buku->rak_id == $k->id) selected @endif>
                                                    {{ $k->lokasi_rak }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">{{ $errors->first('rak_id') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" required>{{ $buku->deskripsi }} </textarea>
                                        <p class="text-danger">{{ $errors->first('deskripsi') }}</p>
                                    </div>
                                    <button class="btn btn-primary btn-sm">Ubah</button>
                                    <a class="btn btn-danger btn-sm" href="{{ route('buku.index')}}" >Batal</a>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
