<?php

use App\Http\Controllers\AccessoryCategoryController;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\AdminProfileController;
// use App\Http\Controllers\AdoptPetController;
use App\Http\Controllers\AdorptionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BreedController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PetCategoryController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\UserController;
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



Route::get('/', [GuestController::class, 'welcome']);

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/about', [GuestController::class, 'about'])->name('about');

Route::get('/accessories', [AccessoryController::class, 'index'])->name('accessories');
Route::get('/pets', [PetsController::class, 'index'])->name('pets');


Route::get('/accessory-items', [AccessoryController::class, 'home'])->name('accessory-items');
// admin routes

// pet categories
Route::resource('/pet-categories', PetCategoryController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['admin', 'auth', 'verified']);

// Accessory categories
Route::resource('/accessory-categories', AccessoryCategoryController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['admin', 'auth', 'verified']);

Route::resource('/users', UserController::class)
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy'])
    ->middleware(['admin', 'auth', 'verified']);


Route::resource('/accessories', AccessoryController::class)
    ->only(['index', 'store', 'update', 'edit', 'create', 'destroy'])
    ->middleware(['admin', 'auth', 'verified']);

Route::get('/accessories/{accessory}', [AccessoryController::class, 'show'])->name('show-accessory');

Route::resource('/purchases', PurchaseController::class)
    ->only(['index', 'create', 'show'])
    ->middleware(['admin', 'auth', 'verified']);

Route::resource('/pets', PetsController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['admin', 'auth', 'verified']);

Route::get('/pets/{pet}', [PetsController::class, 'show'])->name('show-pet');


Route::resource('/adorption', AdorptionController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

// breeds
Route::resource('/breeds', BreedController::class)
    ->only(['create', 'show', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['admin', 'auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/admin-profile', AdminProfileController::class)
    ->only(['index', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'admin']);

// adopt pet
Route::get('/adopt', [AdorptionController::class, 'adopt'])->name('adopt');

Route::get('/manage-adorptions', [AdorptionController::class, 'manage_adorptions'])
    ->name('manage-adorptions')->middleware(['auth', 'verified']);


Route::get('/adorpt/{pet}', [PetsController::class, 'adorpt_form'])
    ->name('adorpt-pet')
    ->middleware(['auth', 'verified']);

// cart
Route::get('add-to-cart/{id}', [AccessoryController::class, 'addToCart'])->name('add-to-cart')->middleware(['auth', 'verified']);
Route::get('cart', [AccessoryController::class, 'cart'])->name('cart')->middleware(['auth', 'verified']);
Route::patch('update_cart', [AccessoryController::class, 'update_cart'])->name('update_cart')->middleware(['auth', 'verified']);
Route::delete('remove_from_cart', [AccessoryController::class, 'removeFromCart'])->name('remove_from_cart')->middleware(['auth', 'verified']);

// checkout
Route::post('/session', [StripeController::class, 'session'])->name('session')->middleware(['auth', 'verified']);
Route::get('/success', [StripeController::class, 'success'])->name('success')->middleware(['auth', 'verified']);
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel')->middleware(['auth', 'verified']);


// contact
Route::resource('/contact', ContactController::class)
    ->only(['index', 'edit', 'update', 'destroy'])->middleware(['admin', 'auth', 'verified']);

Route::get('/contact-us', [GuestController::class, 'contact_us'])->name('contact-us');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// invoices
Route::resource('/invoices', InvoiceController::class)
    ->only(['index', 'create', 'edit', 'update', 'destroy'])->middleware(['admin', 'auth', 'verified']);

// print order invoice
Route::get('print-order-invoice/{adorption}', [AdorptionController::class, 'print_invoice_html'])->name('print_invoice');


require __DIR__ . '/auth.php';
