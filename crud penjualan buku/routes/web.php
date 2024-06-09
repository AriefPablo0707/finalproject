    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\Pelanggancontroller;
use App\Http\Controllers\Ordercontroller;
use App\Http\Controllers\Kategoricontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [homeController::class, 'index']);

Route::get('/register', [homeController::class, 'register']);

Route::post('/send', [homeController::class, 'send']);

Route ::get('/master', function() {
    return view('layouts.master');
});

Route::resource('pelanggan', PelangganController::class);
Route::resource('order', OrderController::class);
Route::resource('kategori', KategoriController::class);