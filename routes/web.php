<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\StoreController;
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

// SAMPLE ROUTES

// Route definitions
/*
    1. Basic Route
    2. Route Parameter
    3. Name  Routes
    4. Group Routes
    5. Route Prefixes
    6. Route Middleware
    7. Resourceful Routes
    8. API Routes
*/

// ====== Basic Route 
Route::get('/Basic/sample1', [PageController::class, 'showSamplePage']);

// ====== Route Parameters
Route::get('/RouteParameters/{id}', [PageController::class, 'showSamplePage']);
Route::get('/RouteParameters/{id}/{page}', [PageController::class, 'showSamplePage']);

// ====== Named Routes
Route::get('/NamedRoutes/Sample', function () {
    return redirect(route('NamedRoutes1'));
});
Route::get('/NamedRoutes/Sample1', [PageController::class, 'showSamplePage'])->name('NamedRoutes1');

// ====== Group Route
Route::middleware(['tester'])->group(function () {
    Route::get('/GroupRoute/Sample1', [PageController::class, 'showSamplePage']);
});

// ======= Route Prefixes
Route::middleware(['tester'])->prefix('RoutePrefix')->group(function () {
    Route::get('/Sample1', [PageController::class, 'showSamplePage']);
    Route::get('/Sample2', [PageController::class, 'showSamplePage']);
});

// Route Middleware
Route::get('/RouteMiddleWare/Sample1', [PageController::class, 'showSamplePage'])->middleware('tester');

// API Routes - this is used for API routes
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Application Routes
Route::get('/Store/{StoreId?}', [PageController::class, 'showStoreFormPage'])->name('StoreFormPage');

Route::post('/App/Store/Create', [StoreController::class, 'createStore']);