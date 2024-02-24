<a href="{{ route('cetak-anggota') }}" class="btn btn-warning m-2">Cetak Data Anggota<i class="fas fa-print"></i>
</a>
                                <div class="row">
                                    <table class="table table-bordered table-hover table-striped" id="table-data">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">No Handphone</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Tanggal Daftar</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($anggota as $i => $v)
                                                <tr>
                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $v->nama }}</td>
                                                    <td>{{ $v->jenis_kelamin }}</td>
                                                    <td>{{ $v->no_hp }}</td>
                                                    <td>{{ $v->email }}</td>
                                                    <td>{{ $v->alamat }}</td>
                                                    <td>{{ $v->tanggal_daftar }}</td>
                                                    <td>{{ $v->status }}</td>
                                                    <td>
                                                </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>