<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('landing');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/company-signup', [App\Http\Controllers\FrontController::class, 'companyRegister'])->name('company.register');
Route::post('/company-signup', [App\Http\Controllers\FrontController::class, 'companyRegisterSubmit'])->name('company.register.submit');
Route::get('/company-login', [App\Http\Controllers\FrontController::class, 'companyLogin'])->name('company.login');

Route::post('/company-login', [App\Http\Controllers\FrontController::class, 'companyLoginSubmit'])->name('company.login.submit');

Auth::routes(['verify' => true, 'register' => false, 'login' => false]);
Route::get('/login', function(){
    return redirect(route('company.login'));
})->name('login');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('client', App\Http\Controllers\ClientController::class);
    // Route::resource('form', App\Http\Controllers\ClientController::class);

    Route::resource('entity', App\Http\Controllers\EntityController::class);
    Route::post('/alot-attribute-field', [App\Http\Controllers\EntityController::class, 'alotAttributeField'])->name('entity.alot.attribute');
    Route::post('/update-attribute-field', [App\Http\Controllers\EntityController::class, 'updateAttributeField'])->name('entity.update.attribute');
    Route::get('/list-entity-records/{entityid}', [App\Http\Controllers\EntityController::class, 'listEntityRecords'])->name('list.entity.records');
    Route::get('/add-entity-records/{entityid}', [App\Http\Controllers\EntityController::class, 'addEntityRecords'])->name('add.entity.records');
    Route::get('/edit-entity-records/{entityid}/{recordid}', [App\Http\Controllers\EntityController::class, 'editEntityRecords'])->name('edit.entity.records');
    Route::post('/save-entity-records/{entityid}', [App\Http\Controllers\EntityController::class, 'saveEntityRecords'])->name('save.entity.records');
    Route::post('/update-entity-records/{entityid}/{recordid}', [App\Http\Controllers\EntityController::class, 'updateEntityRecords'])->name('update.entity.records');
    Route::post('/tempUploads', [App\Http\Controllers\HomeController::class, 'tempUploads'])->name('tempuploads');
    Route::get('/get-external-api-data', [App\Http\Controllers\HomeController::class, 'getExternalApiData'])->name('external.api.data');

    Route::resource('form', App\Http\Controllers\FormController::class);

    Route::resource('field', App\Http\Controllers\FieldController::class);

    Route::resource('fieldset', App\Http\Controllers\FieldsetController::class);


    Route::resource('client', App\Http\Controllers\ClientController::class);

    Route::resource('entity', App\Http\Controllers\EntityController::class);

    // Route::resource('form', App\Http\Controllers\FormController::class);

    Route::resource('field', App\Http\Controllers\FieldController::class);

    Route::resource('fieldset', App\Http\Controllers\FieldsetController::class);


    Route::resource('client', App\Http\Controllers\ClientController::class);

    Route::resource('entity', App\Http\Controllers\EntityController::class);

    // Route::resource('form', App\Http\Controllers\FormController::class);

    Route::resource('field', App\Http\Controllers\FieldController::class);

    Route::resource('fieldset', App\Http\Controllers\FieldsetController::class);


    Route::resource('client', App\Http\Controllers\ClientController::class);

    Route::resource('entity', App\Http\Controllers\EntityController::class);

    // Route::resource('form', App\Http\Controllers\FormController::class);

    Route::resource('field', App\Http\Controllers\FieldController::class);

    Route::resource('fieldset', App\Http\Controllers\FieldsetController::class);


    Route::resource('client', App\Http\Controllers\ClientController::class);

    Route::resource('entity', App\Http\Controllers\EntityController::class);

    // Route::resource('form', App\Http\Controllers\FormController::class);

    Route::resource('field', App\Http\Controllers\FieldController::class);

    Route::resource('fieldset', App\Http\Controllers\FieldsetController::class);


    Route::resource('client', App\Http\Controllers\ClientController::class);

    Route::resource('entity', App\Http\Controllers\EntityController::class);

    // Route::resource('form', App\Http\Controllers\FormController::class);

    Route::resource('field', App\Http\Controllers\FieldController::class);

    Route::resource('fieldset', App\Http\Controllers\FieldsetController::class);


    Route::resource('client', App\Http\Controllers\ClientController::class);

    Route::resource('entity', App\Http\Controllers\EntityController::class);

    // Route::resource('form', App\Http\Controllers\FormController::class);

    Route::resource('field', App\Http\Controllers\FieldController::class);

    Route::resource('fieldset', App\Http\Controllers\FieldsetController::class);
});


Route::resource('client', App\Http\Controllers\ClientController::class);

Route::resource('entity', App\Http\Controllers\EntityController::class);

// Route::resource('form', App\Http\Controllers\FormController::class);

Route::resource('field', App\Http\Controllers\FieldController::class);

Route::resource('fieldset', App\Http\Controllers\FieldsetController::class);


Route::resource('client', App\Http\Controllers\ClientController::class);

Route::resource('entity', App\Http\Controllers\EntityController::class);

// Route::resource('form', App\Http\Controllers\FormController::class);

Route::resource('field', App\Http\Controllers\FieldController::class);

Route::resource('fieldset', App\Http\Controllers\FieldsetController::class);
