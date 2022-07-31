<?php

use Illuminate\Support\Facades\Route;

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
    
    //-----------------------------------------------------------
        Route::get('/', function () {
            return redirect()->route('Home.index');
        });

        Route::resource('Home', HomeController::class);
        Route::resource('Dashboard', DashboardController::class);

	        Route::get('Bencana/{Bencana}/deletedata', 'BencanaController@deletedata')
	            ->name('Bencana.deletedata');
        Route::resource('Bencana', BencanaController::class);
        
            Route::get('Bantukami/{Bantukami}/deletedata', 'BantukamiController@deletedata')
                ->name('Bantukami.deletedata');
        Route::resource('Bantukami', BantukamiController::class);
        
        Route::resource('Updateinfo', UpdateinfoController::class);
        Route::resource('Timbantuan', TimbantuanController::class);

            Route::get('Rekeningdonasi/{Rekeningdonasi}/createsub', 'RekeningdonasiController@createsub')
                ->name('Rekeningdonasi.createsub');
            Route::get('Rekeningdonasi/{Rekeningdonasi}/deletedata', 'RekeningdonasiController@deletedata')
                ->name('Rekeningdonasi.deletedata');
        Route::resource('Rekeningdonasi', RekeningdonasiController::class);
        
        Route::resource('Donasi', DonasiController::class);

            Route::get('Pembelanjaandana/{Pembelanjaandana}/createsub', 'PembelanjaandanaController@createsub')
                ->name('Pembelanjaandana.createsub');
            Route::get('Pembelanjaandana/{Pembelanjaandana}/deletedata', 'PembelanjaandanaController@deletedata')
                ->name('Pembelanjaandana.deletedata');
        Route::resource('Pembelanjaandana', PembelanjaandanaController::class);

            Route::get('Korbanbencana/{Korbanbencana}/createsub', 'KorbanbencanaController@createsub')
                ->name('Korbanbencana.createsub');
            Route::get('Korbanbencana/{Korbanbencana}/deletedata', 'KorbanbencanaController@deletedata')
                ->name('Korbanbencana.deletedata');
        Route::resource('Korbanbencana', KorbanbencanaController::class);

            Route::get('Titikpengungsian/{Titikpengungsian}/createsub', 'TitikpengungsianController@createsub')
                ->name('Titikpengungsian.createsub');
            Route::get('Titikpengungsian/{Titikpengungsian}/deletedata', 'TitikpengungsianController@deletedata')
                ->name('Titikpengungsian.deletedata');
        Route::resource('Titikpengungsian', TitikpengungsianController::class);
        
            Route::get('Titikblokir/{Titikblokir}/createsub', 'TitikblokirController@createsub')
                ->name('Titikblokir.createsub');
            Route::get('Titikblokir/{Titikblokir}/deletedata', 'TitikblokirController@deletedata')
                ->name('Titikblokir.deletedata');
        Route::resource('Titikblokir', TitikblokirController::class);

            Route::get('Bantukamiapproval/{Bantukamiapproval}/approve', 'BantukamiapprovalController@approve')
                ->name('Bantukamiapproval.approve');
        Route::resource('Bantukamiapproval', BantukamiapprovalController::class);

        Route::resource('Terimakasih', TerimakasihController::class);
        
        Route::resource('Detailbantukami', DetailbantukamiController::class);
        Route::resource('Detailtimbantuan', DetailtimbantuanController::class);
        Route::resource('Detailupdateinfo', DetailupdateinfoController::class);
        Route::resource('Detailrekeningdonasi', DetailrekeningdonasiController::class);
        Route::resource('Detaildonasi', DetaildonasiController::class);
        Route::resource('Detailpembelanjaandana', DetailpembelanjaandanaController::class);
        Route::resource('Detailkorbanbencana', DetailkorbanbencanaController::class);
        Route::resource('Detailtitikpengungsian', DetailtitikpengungsianController::class);
        Route::resource('Detailtitikblokir', DetailtitikblokirController::class);

        
Route::group(['middleware' => ['auth']], function() { 
   Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
