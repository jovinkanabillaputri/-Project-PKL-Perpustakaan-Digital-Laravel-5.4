@extends('admin_template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1> Data Penerbit</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('penerbit.create') }}" class="btn btn-info">Tambah Penerbit</a>
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Penerbit</th>
                                                <th scope="col">Created At</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($penerbit as $i => $v)
                                                <tr>
                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $v->nama_penerbit }}</td>
                                                    <td>{{ $v->created_at }}</td>
                                                    <td>
                                                        <form action="{{ route('penerbit.destroy', $v->id) }}"
                                                            method="post">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <a href="{{ route('penerbit.edit', $v->id) }}"
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
