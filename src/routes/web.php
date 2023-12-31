
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;

Route::get('/', [AllController::class, 'index']);
Route::get('/attendance', [AllController::class, 'saveAttendance']);
// Route::get('/attendance', [AllController::class, 'attendance']);
// Route::get('/leavingwork', [AllController::class, 'leavingwork']);
Route::get('/admin', [AllController::class, 'admin']);
Route::delete('/admin/{id}', [AllController::class, 'deleteRecord']);
