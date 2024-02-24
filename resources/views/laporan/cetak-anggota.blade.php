<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CETAK DATA ANGGOTA</title>
        <style>
            table.static {
                position: relative;
                border: 1px solid #543535;
            }
        </style>
    </head>
    <body>
        <div class="form-group">
            <p align="center"><b>Laporan Data Anggota</b></p>
            <p align="center"><b>Silahkan Tekan CTRL+P Untuk Mencetak</b></p>
            <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tanggal Daftar</th>
                    <th scope="col">Status</th>
                </tr>
        @foreach ($dtanggota as $item)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$item->nama}}</td>
          <td>{{$item->jenis_kelamin}}</td>
          <td>{{$item->no_hp}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->alamat}}</td>
          <td>{{$item->tanggal_daftar}}</td>
          <td>{{$item->status}}</td>
        </tr>
        @endforeach
        </table>
        </div>
    </body>
</html>