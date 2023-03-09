<?php

use App\Models\Account;
use App\Models\Locality;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoadController;
use App\Http\Controllers\UnitController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PenaltyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GoodListController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\ManfistoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PenaltyTypeController;
use App\Http\Controllers\StockReciptController;
use App\Http\Controllers\TransporterController;
use App\Http\Controllers\CustomReportController;
use App\Http\Controllers\ManfistoListController;
use App\Http\Controllers\PenaltyOwnerController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\PrintCustomCertController;
use App\Http\Controllers\CustomCertReportController;
use App\Http\Controllers\RiskCategoryController;
use App\Http\Controllers\RiskTypeController;
use App\Http\Controllers\UserManagement\RoleController;
use App\Http\Controllers\UserManagement\UserController;


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

//Route::get('logout', [LoginController::class, 'logout'])->name('logout');

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
Route::resource('unit', UnitController::class);
Route::resource('category', CategoryController::class);
Route::resource('item', ItemController::class);
Route::resource('track', TrackController::class);
Route::resource('load', LoadController::class);
Route::resource('setupmanfisto', ManfistoListController::class);
Route::resource('setupgood', GoodListController::class);
Route::resource('stockrecipt', StockReciptController::class);
Route::resource('risk-category', RiskCategoryController::class);
Route::resource('risk-type', RiskTypeController::class);

Route::resource('manfisto', ManfistoController::class);
Route::resource('account', AccountController::class);
Route::resource('custom', CustomController::class);
Route::resource('custom_report', CustomReportController::class);
Route::get('custom-pdf', [CustomReportController::class,'custom_pdf'])->name('custom-pdf');
Route::resource('cert_report', CustomCertReportController::class);
Route::resource('print-cert', PrintCustomCertController::class);
Route::resource('pass', PasswordController::class);
Route::get('search_custom', [CustomReportController::class,'search_custom'])->name('search_custom');
Route::get('search_cert', [CustomCertReportController::class,'get_custom_cert'])->name('search_cert');
Route::get('print-cert-pdf/{custom_cert}', [PrintCustomCertController::class,'print_cert_pdf'])->name('print-cert-pdf');
//Route::get('pass', [PasswordController::class,'update'])->name('update_password');
Route::get('pass', [PasswordController::class,'index'])->name('index_password');
/*Route::get('cert_report', [CustomCertReportController::class,'index'])->name('search_custom_cert');
Route::get('search_custom_cert/{custom_id}', [CustomCertReportController::class,'get_custom_cert'])->name('get_certs');*/

Route::get('/{page}', [AdminController::class, 'index']);
