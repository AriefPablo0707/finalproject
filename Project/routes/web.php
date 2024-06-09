    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;

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