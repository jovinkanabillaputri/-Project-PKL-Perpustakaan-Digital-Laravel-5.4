<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//route registrasi/login
Route::get('/login', 'AdminAuthcontroller@login')->name('login');
Route::post('/postlogin', 'AdminAuthcontroller@postlogin')->name('postlogin');
Route::get('/registrasi', 'AdminAuthcontroller@registrasi')->name('registrasi');
Route::post('/simpanregistrasi', 'AdminAuthcontroller@simpanregistrasi')->name('simpanregistrasi');
Route::get('/logout', 'AdminAuthcontroller@logout')->name('logout');


// //batas hak akses
route::group(['middleware' => ['auth', 'admin:admin,anggota']], function () {
route::get('/dashboard', 'dashboardcontroller@index');

  
//Route untuk anggota
Route::get('anggota', 'anggotacontroller@index')->name('anggota.index');
Route::get('anggota/create', 'anggotacontroller@create')->name('anggota.create');
Route::post('anggota', 'anggotacontroller@store')->name('anggota.store');
Route::get('anggota/{id}/edit', 'anggotacontroller@edit')->name('anggota.edit');
Route::put('anggota/{id}', 'anggotacontroller@update')->name('anggota.update');
Route::delete('anggota/{id}', 'anggotacontroller@destroy')->name('anggota.destroy');
Route::get('cetak-anggota', 'anggotacontroller@cetakanggota')->name('cetak-anggota');

//Route untuk buku
Route::get('buku', 'bukucontroller@index')->name('buku.index');
Route::get('buku/create', 'bukucontroller@create')->name('buku.create');
Route::post('buku', 'bukucontroller@store')->name('buku.store');
Route::get('buku/{id}/edit', 'bukucontroller@edit')->name('buku.edit');
Route::put('buku/{id}', 'bukucontroller@update')->name('buku.update');
Route::delete('buku/{id}', 'bukucontroller@destroy')->name('buku.destroy');



//Route untuk jenis
Route::get('jenis', 'jeniscontroller@index')->name('jenis.index');
Route::get('jenis/create', 'jeniscontroller@create')->name('jenis.create');
Route::post('jenis', 'jeniscontroller@store')->name('jenis.store');
Route::get('jenis/{id}/edit', 'jeniscontroller@edit')->name('jenis.edit');
Route::put('jenis/{id}', 'jeniscontroller@update')->name('jenis.update');
Route::delete('jenis/{id}', 'jeniscontroller@destroy')->name('jenis.destroy');

//Route untuk peminjaman
Route::get('peminjaman', 'peminjamancontroller@index')->name('peminjaman.index');
Route::get('peminjaman/create', 'peminjamancontroller@create')->name('peminjaman.create');
Route::post('peminjaman', 'peminjamancontroller@store')->name('peminjaman.store');
Route::get('peminjaman/{id}/edit', 'peminjamancontroller@edit')->name('peminjaman.edit');
Route::put('peminjaman/{id}', 'peminjamancontroller@update')->name('peminjaman.update');
Route::delete('peminjaman/{id}', 'peminjamancontroller@destroy')->name('peminjaman.destroy');

//Route untuk pengembalian
Route::get('pengembalian', 'pengembaliancontroller@index')->name('pengembalian.index');
Route::get('pengembalian/create', 'pengembaliancontroller@create')->name('pengembalian.create');
Route::post('pengembalian', 'pengembaliancontroller@store')->name('pengembalian.store');
Route::get('pengembalian/{id}/edit', 'pengembaliancontroller@edit')->name('pengembalian.edit');
Route::put('pengembalian/{id}', 'pengembaliancontroller@update')->name('pengembalian.update');
// Route::get('pengembalian/{peminjaman_id}', 'pengembaliancontroller@showForm')->name('pengembalian.index');
Route::delete('pengembalian/{id}', 'pengembaliancontroller@destroy')->name('pengembalian.destroy');
Route::get('/api/fetchnamepeminjaman', 'pengembalianController@fetchnamepeminjaman');

//Route untuk rak
Route::get('rak', 'rakcontroller@index')->name('rak.index');
Route::get('rak/create', 'rakcontroller@create')->name('rak.create');
Route::post('rak', 'rakcontroller@store')->name('rak.store');
Route::get('rak/{id}/edit', 'rakcontroller@edit')->name('rak.edit');
Route::put('rak/{id}', 'rakcontroller@update')->name('rak.update');
Route::delete('rak/{id}', 'rakcontroller@destroy')->name('rak.destroy');

//Route untuk admin auth
// Route::get('/login', function (){
//     return view('anggota.login');
// });

//Route untuk penulis
Route::get('penulis', 'penuliscontroller@index')->name('penulis.index');
Route::get('penulis/create', 'penuliscontroller@create')->name('penulis.create');
Route::post('penulis', 'penuliscontroller@store')->name('penulis.store');
Route::get('penulis/{id}/edit', 'penuliscontroller@edit')->name('penulis.edit');
Route::put('penulis/{id}', 'penuliscontroller@update')->name('penulis.update');
Route::delete('penulis/{id}', 'penuliscontroller@destroy')->name('penulis.destroy');

//Route untuk penerbit
Route::get('penerbit', 'penerbitcontroller@index')->name('penerbit.index');
Route::get('penerbit/create', 'penerbitcontroller@create')->name('penerbit.create');
Route::post('penerbit', 'penerbitcontroller@store')->name('penerbit.store');
Route::get('penerbit/{id}/edit', 'penerbitcontroller@edit')->name('penerbit.edit');
Route::put('penerbit/{id}', 'penerbitcontroller@update')->name('penerbit.update');
Route::delete('penerbit/{id}', 'penerbitcontroller@destroy')->name('penerbit.destroy');

//Route untuk kategori
Route::get('kategori', 'kategoricontroller@index')->name('kategori.index');
Route::get('kategori/create', 'kategoricontroller@create')->name('kategori.create');
Route::post('kategori', 'kategoricontroller@store')->name('kategori.store');
Route::get('kategori/{id}/edit', 'kategoricontroller@edit')->name('kategori.edit');
Route::put('kategori/{id}', 'kategoricontroller@update')->name('kategori.update');
Route::delete('kategori/{id}', 'kategoricontroller@destroy')->name('kategori.destroy');


// //route untuk dahsboard
// Route::get('/dashboard', 'dashboardcontroller@index');

});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');