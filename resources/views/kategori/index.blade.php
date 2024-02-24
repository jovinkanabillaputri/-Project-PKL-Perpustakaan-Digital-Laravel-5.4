@extends('admin_template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Kategori</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('kategori.create') }}" class="btn btn-info">Tambah Data Kategori</a>
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Created At</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kategori as $i => $v)
                                                <tr>
                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $v->kategori_buku }}</td>
                                                    <td>{{ $v->created_at }}</td>
                                                    <td>
                                                        <form action="{{ route('kategori.destroy', $v->id) }}"
                                                            method="post">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <a href="{{ route('kategori.edit', $v->id) }}"
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
