<?php

use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PenaltyController;
use App\Http\Controllers\ManfistoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\PenaltyTypeController;
use App\Http\Controllers\TransporterController;
use App\Http\Controllers\PenaltyOwnerController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserManagement\RoleController;
use App\Http\Controllers\UserManagement\UserController;
use App\Models\Locality;

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
    return view('auth.login');
});



Auth::routes(['register' => false]);

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('penaltyreport', [ReportController::class, 'penaltyreport'])->name('penaltyreport');
Route::get('manfistoreport', [ReportController::class, 'manfistoreport'])->name('manfistoreport');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

Route::get('/markAsRead', function () {

    auth()->user()->unreadNotifications->markAsRead();

    return redirect()->back();
})->name('mark');


Route::get('/sweet', function () {

    Alert::success('Success Title', 'Success Message');
});

Route::get('/old_date', function () {

    session()->flash('thedate', 'old');
    return view('account.index');
})->name('account.old');

Route::resource('transporter', TransporterController::class);
Route::resource('penaltytype', PenaltyTypeController::class);
Route::resource('penaltyowner', PenaltyOwnerController::class);
Route::resource('penalty', PenaltyController::class);
Route::resource('locality', LocalityController::class);
Route::resource('city', CityController::class);

Route::resource('manfisto', ManfistoController::class);
Route::resource('account', AccountController::class);
Route::resource('custom', CustomController::class);

Route::get('/{page}', [AdminController::class, 'index']);
