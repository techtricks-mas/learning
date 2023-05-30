<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::fallback(function () {
    return redirect('login');
});
Route::get('/category', function (Request $request) {
    return redirect('login?category='.$request->id);
});
Route::get('/course', function (Request $request) {
    return redirect('login?course='.$request->course);
});
Route::get('/post', function (Request $request) {
    return redirect('login?post='.$request->post);
});
Route::get('/sub', function (Request $request) {
    return redirect('login?sub='.$request->sub);
});
require __DIR__.'/auth.php';
