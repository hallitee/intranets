<?php
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use App\link;
use App\depts;
use App\company;
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

Route::get('url/list', function(){
$l = link::with('dept')->paginate(5);
return view('url.list')->with(['url'=>$l]);
//return View::make('url.listings')
})->name('edit')->middleware('auth', 'admin');
Route::get('loaddepts', function(Request $request){
$data = depts::where('company_id', $request->id)->get();
return Response::json($data);
//return View::make('url.listings')
});
Auth::routes();
Route::resource('url', 'linksController', ['parameters' => [
    'url' => 'id'
]]);
Route::resource('loc', 'locationController', ['parameters'=>['loc'=>'id']]);
Route::resource('comp', 'companyController', ['parameters'=>['comp'=>'id']]);
Route::resource('config', 'configController', ['parameters'=>['config'=>'id']]);
Route::resource('dept', 'departmentController', ['parameters'=>['dept'=>'id']]);
Route::resource('user', 'userController', ['parameters'=>['user'=>'id']]);
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/', 'HomeController@index');