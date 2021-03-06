<?php

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

Route::get('Halo', function ()
 {
	return ("Halo Guys");
});
Route::get('/welcome', function () {
echo "Welcome";
});
Route::get('/show/{id}', function ($id) {
echo "Nilai Parameter Adalah ".$id;
});
Route::get('/show/{id?}', function ($id=1) {
echo "Nilai Parameter Adalah ".$id;
});
Route::get('/edit/{nama}', function ($nama) {
echo "Nilai Parameter Adalah ".$nama;
})->where('nama','[A-Za-z]+');
Route::get('/index', function () {
echo "<a href='".route('create')."'>Akses Route dengan nama </a>";
});
Route::get('/create', function () {
echo "Route diakses menggunakan nama";
})->name('create');

Route::get('/produk/show', 'produkController@show');
Route::get('/produk', 'produkController@index');

Route::get('/halaman',function(){
$title = 'Harry Pooter';
$konten = 'harry potter and the deathly hallows: part 2';
return view('konten.halaman',compact('title','konten'));
});

Route::get('/pelanggan', 'pelangganController@index');

Route::resource('produk','produkController1');

Route::get('/store', 'produkController1@store');

Route::get('/update', 'produkController1@update');

Route::get('/destroy', 'produkController1@destroy');