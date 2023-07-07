<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\DDocumentController;
use App\Http\Controllers\QPDocumentController;
use App\Http\Controllers\SDocumentController;

use App\Http\Controllers\SarokNumberController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\OfficeNameController;
use App\Http\Controllers\YearController;

use App\Http\Controllers\SuchiOneController;
use App\Http\Controllers\SuchiTwoController;
use App\Http\Controllers\SuchiThreeController;
use App\Http\Controllers\SuchiFourController;
use App\Http\Controllers\CatalogRegistarController;
use App\Http\Controllers\CopyDeedController;
use App\Http\Controllers\SearchRelationController;
use App\Http\Controllers\DonarDetailsController;
use App\Http\Controllers\RecieverDetailsController;
use App\Http\Controllers\DeedDetailsController;
use App\Http\Controllers\UncopiedDeedDetailsController;
use App\Http\Controllers\DeliveryDeedDetailController;
use App\Http\Controllers\StoreDetailsController;
use App\Http\Controllers\DeedNoticeController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminDeedCopyController;

use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\ThanaController;
use App\Http\Controllers\UnionController;
use Illuminate\Support\Facades\DB;

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
    $notices  = DB::table('deed_notices')->where('status','1')->get();
    return view('welcome', compact('notices'));
});

Route::get('/markAsRead', function(){

	auth()->user()->unreadNotifications->markAsRead();
	return redirect()->back();

})->name('mark');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*** User Route ****/
Route::get('/user/SDocuments', [HomeController::class, 'SDocument'])->name('user.SDocument');
Route::get('/user/QPdocuments', [HomeController::class, 'QPdocument'])->name('user.QPdocument');
Route::get('/user/DDocuments', [HomeController::class, 'DDocument'])->name('user.DDocument');

Route::post('/getDistrict', [HomeController::class,'getDistrict']);
Route::post('/getThana', [HomeController::class,'getThana']);
Route::post('/getUnion', [HomeController::class,'getUnion']);
// Route::post('/getCity', [HomeController::class,'getCity']);

/*** User Suchi  Route ****/
Route::get('/user-suchione', [HomeController::class, 'suchione'])->name('user.suchione');
Route::get('/user-suchitwo', [HomeController::class, 'suchitwo'])->name('user.suchitwo');


Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'loginsubmit'])->name('admin.login.submit');
Route::get('admin/logout', [AdminController::class, 'adminlogout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => 'authAdmin'], function () {

    Route::get('/dashboard', [AdminController::class, 'adminHome'])->name('admin.home');

    // Add Document Name
    Route::resource('document', DocumentController::class , ['names'=>'admin.document']);
    Route::resource('office-name', OfficeNameController::class , ['names'=>'admin.office']);
    Route::resource('saroknumber', SarokNumberController::class , ['names'=>'admin.saroknumber']);
    // Add SaroK Name

    // admin add route
    Route::resource('catalog-registar', CatalogRegistarController::class, ['names'=>'admin.catalog']);
    Route::resource('schedule-one', SuchiOneController::class, ['names'=>'admin.suchione']);
    Route::resource('schedule-two', SuchiTwoController::class, ['names'=>'admin.suchitwo']);
    Route::resource('schedule-three', SuchiThreeController::class, ['names'=>'admin.suchithree']);
    Route::resource('schedule-four', SuchiFourController::class, ['names'=>'admin.suchifour']);
    Route::resource('search-deed-relation', SearchRelationController::class, ['names'=>'admin.searchRelation']);
    Route::resource('donar-details', DonarDetailsController::class , ['names'=>'admin.donar']);
    Route::resource('reciver-details', RecieverDetailsController::class , ['names'=>'admin.reciver']);
    Route::resource('deed-details', DeedDetailsController::class , ['names'=>'admin.deed']);
    Route::resource('uncopied-deed-details', UncopiedDeedDetailsController::class , ['names'=>'admin.uncopied']);
    Route::resource('delivery-deed-details', DeliveryDeedDetailController::class , ['names'=>'admin.delivery']);
    Route::resource('store-details', StoreDetailsController::class , ['names'=>'admin.store']);
    Route::resource('deed-notice', DeedNoticeController::class, ['names'=>'admin.deednotice']);
    Route::resource('year', YearController::class, ['names'=>'admin.year']);
    // admin add route

    // Address route
    Route::resource('division', DivisionController::class , ['names'=>'admin.division']);
    Route::resource('district', DistrictController::class , ['names'=>'admin.district']);
    Route::resource('thana', ThanaController::class , ['names'=>'admin.thana']);
    Route::resource('union', UnionController::class , ['names'=>'admin.union']);
    // Address route

    // DDocument Application route
    Route::get('/DDcoument/index', [DDocumentController::class, 'index'])->name('admin.DDcoument.index');
    Route::post('DDcoument/store',[DDocumentController::class, 'store'])->name('admin.DDcoument.store');
    Route::get('/DDcoument/edit/{id}', [DDocumentController::class, 'edit'])->name('admin.DDcoument.edit');
    Route::post('DDcoument/update/{id}',[DDocumentController::class, 'update'])->name('admin.DDcoument.update');
    Route::get('/DDcoument/show/{id}', [DDocumentController::class, 'show'])->name('admin.DDcoument.show');
    Route::post('DDcoument/destroy/{id}',[DDocumentController::class, 'destroy'])->name('admin.DDcoument.destroy');
    // DDocument Application route

    // QPDocument Application route
    Route::get('/QPDcoument/index', [QPDocumentController::class, 'index'])->name('admin.QPDcoument.index');
    Route::post('/QPDcoument/store', [QPDocumentController::class, 'store'])->name('admin.QPDcoument.store');
    Route::get('/QPDcoument/show/{id}', [QPDocumentController::class, 'show'])->name('admin.QPDcoument.show');
    Route::get('/QPDcoument/edit/{id}', [QPDocumentController::class, 'edit'])->name('admin.QPDcoument.edit');
    Route::post('/QPDcoument/update/{id}', [QPDocumentController::class, 'update'])->name('admin.QPDcoument.update');
    // QPDocument Application route

    // SDocument Application route
    Route::get('/SDcoument/index', [SDocumentController::class, 'index'])->name('admin.SDcoument.index');
    Route::post('SDcoument/store', [SDocumentController::class, 'store'])->name('admin.SDcoument.store');
    Route::get('/SDcoument/show/{id}', [SDocumentController::class, 'show'])->name('admin.SDcoument.show');
    Route::get('/SDcoument/edit/{id}', [SDocumentController::class, 'edit'])->name('admin.SDcoument.edit');
    Route::post('/SDcoument/update/{id}', [SDocumentController::class, 'update'])->name('admin.SDcoument.update');
    //SDocument Application route

    // user create route
    Route::get('/user/list', [UserController::class, 'list'])->name('userlist');
    // Route::get('/user/create', [UserController::class, 'create'])->name('usercreate');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('useredit');
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('userupdate');
    // user create route

    // SubAdmin create route
    Route::get('subadmin/list', [SubAdminController::class, 'list'])->name('subadmin');
    Route::get('subadmin/create', [SubAdminController::class, 'create'])->name('subadmincreate');
    Route::post('subadmin/store', [SubAdminController::class, 'store'])->name('subadminstore');
    Route::get('/subadmin/edit/{id}', [SubAdminController::class, 'edit'])->name('subadminedit');
    Route::post('/subadmin/update/{id}', [SubAdminController::class, 'update'])->name('subadminupdate');
    // SubAdmin create route

    // Admin Part Route
    Route::get('/All-Deed-Copy', [AdminDeedCopyController::class, 'DeedCopyEdtor'])->name('DeedCopyTypes');

    Route::get('/DeedCopyEdit/{$id}', [AdminDeedCopyController::class, 'editCopy'])->name('editCopy');
    Route::post('/DeedCopyUpdate/{$id}', [AdminDeedCopyController::class, 'updateCopy'])->name('updateCopy');
    Route::post('/DeedCopyDelete/{$id}', [AdminDeedCopyController::class, 'deleteCopy'])->name('DeedCopyDelete');
});

/**** Notifation Sending Route ** */
// Route::get('/send-notification', [QPDocumentController::class,'showNotificaton']);

//subadmin route

Route::middleware(['auth','subAdmin'])->group(function(){
Route::get('subadmin/dashboard', [CopyDeedController::class, 'home'])->name('subadmin.index');
Route::resource('subadmin/copy-deed', CopyDeedController::class , ['names'=>'subadmin.copydeed']);

});
