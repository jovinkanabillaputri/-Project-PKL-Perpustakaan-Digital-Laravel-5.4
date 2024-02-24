@extends('admin_template')

@section('content')
<div class="main-content">
     <section class="section">
         <div class="section-header">
             <h1>Tambah Data Penerbit</h1>
         </div>
         <div class="section-body">
             <div class="row">
                 <div class="col-xl-12">
                     <div class="card">
                         <div class="card-header">
                                <form action="{{ route('penerbit.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="nama_penerbit">Nama Penerbit</label>
                                        <input type="text" name="nama_penerbit" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm">Tambah</button>
                                        <a class="btn btn-danger btn-sm" href="{{ route('penerbit.index')}}" >Batal</a>
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
