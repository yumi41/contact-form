<?php

use Illuminate\Support\Facades\Route;
use App\Models\Person;
use App\Models\Product;
use App\Http\Controllers\PenController;

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
Route::get('/softdelete', function () {
    Person::find(1)->delete();
});
Route::get('softdelete/get', function () {
    $person = Person::onlyTrashed()->get();
    dd($person);
});
Route::get('softdelete/store', function () {
    $result = Person::onlyTrashed()->restore();
    echo $result;
});
Route::get('softdelete/absolute', function () {
    $result = Person::onlyTrashed()->forceDelete();
    echo $result;
});
Route::get('uuid',function() {
    $products = Product::all();
    foreach($products as $product){
    echo $product.'<br>';
    }
});
Route::get('fill', [PenController::class, 'fillPen']);
Route::get('create', [PenController::class, 'createPen']);
Route::get('insert', [PenController::class, 'insertPen']);