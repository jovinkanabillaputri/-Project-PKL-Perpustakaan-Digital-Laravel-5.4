@extends('admin_template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data Pengembalian</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <form action="{{ route('pengembalian.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                                                <label class="control-label col-sm-2">ID Peminjaman</label>
                                                                <div class="col-sm-10">
                                                                    <select class="col-sm-12 form-control" name="id_peminjaman"
                                                                        id="ID-dropdown">
                                                                        <option value="0" aria-readonly="true" aria-required>
                                                                            -- Select ID Peminjaman --</option>
                                                                        @foreach ($peminjaman as $key => $val)
                                                                            <option value="{{ $val['id'] }}">
                                                                                {{ $val['id'] }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @if ($errors->has('id_peminjaman'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('id_peminjaman') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                    <div class="form-group">
                                        <label for="anggota_id">Nama Anggota</label>
                                        <input type='text' class="form-control" 
                                        id="namepeminjaman" disabled placeholder>
                                    </div>
                                            <div class="form-group">
                                        <label for="buku_id">Judul buku</label>
                                        <input type='text' class="form-control" name='namepeminjaman' id='namepeminjaman' disabled>
                                    </div>
                                            <!-- @foreach ($buku as $k)
                                                 @if ($k->stok_buku != 0)<option value="{{ $k->id }}">{{ $k->judul_buku }}</option> @endif
                                            @endforeach
                                        </select>
                                        <p class="text-danger">{{ $errors->first('buku_id') }}</p> -->
                                    <div class="form-group">
                                        <label for="tanggal_pinjam">Tanggal Pinjam</label>
                                        <input type='text' class="form-control" name='namepeminjaman' id='namepeminjaman' disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_kembali">Tanggal Kembali</label>
                                        <input type='text' class="form-control" name='namepeminjaman' id='namepeminjaman' disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_buku_dipinjam">Jumlah Buku Dipinjam</label>
                                        <input type='text' class="form-control" name='namepeminjaman' id='namepeminjaman' disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_buku_dikembalikan">Jumlah Buku Dikembalikan</label>
                                        <input type='text' class="form-control" name='namepeminjaman' id='namepeminjaman' disabled>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="peminjaman_id">Pengembalian</label>
                                        <select class="form-control" name="peminjaman_id">
                                            <option value="">Semua Data Peminjaman</option>
                                            @foreach ($peminjaman as $k)
                                                <option value="{{ $k->id }}">{{ $k->nama }} - {{ $k->judul_buku }} - {{ $k->tanggal_pinjam }} - {{ $k->tanggal_kembali }} - {{ $k->jumlah_buku_dipinjam }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">{{ $errors->first('peminjaman_id') }}</p>
                                    </div> -->
                                    <!-- <div class="form-group">
                                        <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                                        <input type="date" name="tanggal_pengembalian" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_buku_dikembalikan">Jumlah Buku Dikembalikan</label>
                                        <input type="number" name="jumlah_buku_dikembalikan" class="form-control" required>
                                    </div> -->
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm">Pengembalian</button>
                                        <a class="btn btn-danger btn-sm" href="{{ route('pengembalian.index')}}" >Batal</a>
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
    <script src="{{ asset ('/bower_components/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#ID-dropdown').on('change', function() {
            var id_peminjaman = this.value;
            console.log(id_peminjaman);
            $("#name-dropdown").html('');
           
            $.ajax({
                url: "{{ url('api/fetchnamepeminjaman') }}",
                type: "GET",
                data: {
                    id: id_peminjaman
                },
                dataType: "json",
                success: function(result) {
                    $('#namepeminjaman').val(result[0].tanggal_pinjam);
                }
            });
        });
    });
</script>
