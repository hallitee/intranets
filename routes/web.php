<?php
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use App\link;

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


Route::get('config', function(){
 return view('admin.index');
//Browsershot::html('Foo')->setIncludePath('C:\Users\Taofik\Downloads');
echo "success";
})->name('gadmin')->middleware('auth', 'admin');
Route::get('url/list', function(){
$l = link::paginate(5);
return view('url.list')->with(['url'=>$l]);
//return View::make('url.listings')
})->name('edit')->middleware('auth', 'admin');
Auth::routes();
Route::resource('url', 'linksController', ['parameters' => [
    'url' => 'id'
]]);
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/', 'HomeController@index');