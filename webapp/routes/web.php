<?php

//CONTROLLER
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardInfokeluhanController;
use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\AdminKuesionerController;
use App\Http\Controllers\AdminInfokeluhanController;
use App\Http\Controllers\AdminKuesionerViewController;
use App\Http\Controllers\UserUpdateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\API\RegisterAPIController;
use App\Http\Controllers\NotiffController;
use App\Http\Controllers\NotifMasyarakatController;
//MODELS
use App\Models\User;
use App\Models\Opd;
use App\Models\Category;
use App\Models\Infokeluhan;
use App\Models\Kuesioner;
use App\Models\Models\NilaiKuesioner;


use GuzzleHttp\Middleware;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//WELCOME SIKEMAS

Route::get('/login', function () {
    return view('index');
});
Route::get('/a', function () {
    return view('A/a');
});



//LOGIN USER
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'authenticate']);


//REGISTER  USER
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

//Auth::routes(['verify'=>true]);

//PROFILE
//Route::get('dashboard/accound/edit-profile','ProfileController@edit_profile')->name('edit_profile');
//Route::put('dashboard/accound/edit-profile','ProfileController@update_profile')->name('edit_profile');
Route::get('/dashboard/accound/', [ProfileController::class, 'index'])->name('dashboard.accound.index');
Route::get('/dashboard/accound/edit-profile', [ProfileController::class, 'edit_profile'])->name('dashboard.accound.edit_profile');
Route::put('/dashboard/accound/edit-profile', [ProfileController::class, 'update_profile'])->name('dashboard.accound.update_profile');
//DASHBOARD
Route::get('/dashboard',function(){
    return view ('dashboard.index');

})->middleware('auth','verified');


    


//INFO KELUHAN
Route::resource('/dashboard/infokeluhan', DashboardInfokeluhanController::class)
->middleware('auth');
//notif
Route::resource('/dashboard/notif', NotiffController::class)
->middleware('auth');

//notif
Route::resource('/dashboard/notifmasya', NotifMasyarakatController::class)
->middleware('auth');
//KUESIONER

Route::get('/kuesioner/create-step1', [KuesionerController::class, 'createStep1'])->name('kuesioner.createStep1')
->middleware('auth');
Route::post('/kuesioner/create-step1', [KuesionerController::class, 'store'])->name('kuesioner.postCreateStep1')
->middleware('auth');

Route::get('/kuesioner/create-step2', [KuesionerController::class, 'createStep2'])->name('kuesioner.createStep2')
->middleware('auth');
Route::post('/kuesioner/create-step2', [KuesionerController::class, 'store2'])->name('kuesioner.postCreateStep2')
->middleware('auth');


Route::get('/categories/{category:slug}', function(Category $category){
    return view('category',[
        'title' =>$category->name,
        'infokeluhans' => $category->infokeluhans,
        'infokeluhanadmins' => $category->infokeluhanadmins,
        'kuesioners'=>$category->kuesioners,
        'category'=> $category->name
    ]);
});



Route::get('/categories',function(){
    return view('Categories',[
        'title' =>'Infokeluhan Categories',
        'title' =>'Kuesioner Categories',
        'title' =>'Infokeluhanadmin Categories',
        'categories' => Category::all()

    ]);
});



Route::get('/opd/{opd:slug}', function(Opd $opd){
    return view('opd',[
        'title' =>$opd->name,
        'infokeluhans' => $opd->infokeluhans,
        'infokeluhanadmins' => $opd->infokeluhanadmins,
        'infokeluhanadmins' => $opd->infokeluhanadmins,
        'kuesioners'=>$opd->kuesioners,
        'category'=> $opd->name
    ]);
});



Route::get('/opd',function(){
    return view('Opd',[
        'title' =>'Infokeluhan Opdes',
        'title' =>'Infokeluhaanadmin Opdes',
        'title' =>'Kuesioner Opdes',
        'opdes' => Opd::all()

    ]);
});


Route::get('/kuesioneres/{kuesioner:id}', function(Kuesioner $kuesioner){
    return view('kuesioner',[
        'title' =>$kuesioner->name,
        'infokeluhans' => $kuesioner->infokeluhans,
        'categories'=>$kuesioner->category(),
        'kuesioner'=> $kuesioner->name
    ]);
});



Route::get('/kuesioneres',function(){
    return view('kuesioneres',[
        'title' =>'Infokeluhan Categories',
        'title' =>'Kuesioner Categories',
        'kuesioneres' => Kuesioner::all()

    ]);
});

Route::get('/useres/{user:email}', function(User $user){
    return view('user',[
        'title' =>$user->name,
        'infokeluhans' => $user->infokeluhans,
        'infokeluhanadmins' => $user->infokeluhanadmins,
        'kuesioners'=>$user->kuesioners,
        'user'=> $user->name
    ]);
});



Route::get('/useres',function(){
    return view('Useres',[
        'title' =>'Infokeluhan Users',
        'title' =>'Kuesioner Useres',
        'title' =>'Infokeluhanadmin Users',
        'useres' => Category::all()

    ]);
});



//ADMIN


//ADMIN KUESIONER CONTROL
Route::get('/dashboard/kuesioners', [AdminKuesionerController::class, 'index'])->middleware('admin');
Route::get('/dashboard/kuesioners/create', [AdminKuesionerController::class, 'create'])->middleware('admin');
Route::post('/dashboard/kuesioners', [AdminKuesionerController::class, 'store'])->middleware('admin');
Route::get('/dashboard/kuesioners/create2', [AdminKuesionerController::class, 'createStep2'])->middleware('admin');
Route::post('/dashboard/kuesioners2', [AdminKuesionerController::class, 'store2'])->middleware('admin');
Route::get('/dashboard/kuesioners/delete/{id}',[AdminKuesionerController::class,'delete'])->middleware('admin');
Route::get('/dashboard/kuesioners/delete2/{id}',[AdminKuesionerController::class,'delete2'])->middleware('admin');


//ADMIN KUESIONER VIEW

Route::resource('/dashboard/adminviewkuesioner', AdminKuesionerViewController::class)
->middleware('admin');

//ADMIN INFO KELUHAN VIEW
Route::get('/dashboard/infokeluhanadmin', [AdminInfokeluhanController::class, 'index'])->middleware('admin');
Route::get('/dashboard/infokeluhanadmin/show/{slug}', [AdminInfokeluhanController::class, 'show'])->middleware('admin');
Route::get('/dashboard/infokeluhanadmin/delete3/{slug}',[AdminInfokeluhanController::class,'delete3'])->middleware('admin');

Route::get('/dashboard/notif', [NotiffController::class, 'index'])->middleware('admin');
Route::get('/dashboard/notif/delete4/{id}',[NotiffController::class,'delete4'])->middleware('admin');
Route::get('/dashboard/notif/create', [NotiffController::class, 'create'])->middleware('admin');
Route::post('/dashboard/notif/create', [NotiffController::class, 'store'])->middleware('admin');
Route::get('/dashboard/notif/edit-pengumuman', [NotiffController::class, 'edit_pengumuman'])->name('dashboard.notif.edit');
Route::put('/dashboard/notif/edit-pengumuman', [NotiffController::class, 'update_pengumuman'])->name('dashboard.notif.update_pengumuman');

//LOGOUT
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

























































