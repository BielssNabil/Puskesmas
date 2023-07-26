    <?php

    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('home', [
            "title" => "Home"
        ]);
    });

    Route::post('/tambah/antrian','DaftarController@daftartambah');

    Route::get('/daftar', 'DaftarController@antriantampil');

    Route::get('/search', 'DaftarController@search');

    Route::get('/daftar/hapus/{nik}', 'DaftarController@daftarhapus');

    Route::put('/edit/antrian/{nik}','DaftarController@daftaredit');

    Route::get('/umum', function () {
        return view('umum', [
            "title" => "umum"
        ]);
    });

    Route::get('/BPJS', function () {
        return view('BPJS', [
            "title" => "BPJS"
        ]);
    });

    Route::get('/dinas', function () {
        return view('dinas', [
            "title" => "dinas"
        ]);
    });

    Route::get('/lansia', function () {
        return view('lansia', [
            "title" => "lansia"
        ]);
    });


    Route::get('/about', function () {
        return view('about', [
            "title" => "About"
        ]);
    });
