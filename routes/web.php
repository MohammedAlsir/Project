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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/order', 'record.order')->name('order');




// Forms
Route::view('/form', 'forms.form_controls_md')->name('form');
Route::view('/form2', 'forms.form_controls')->name('form2');
Route::view('/form3', 'forms.form_dropzone')->name('form3');
Route::view('/form4', 'forms.form_editable')->name('form4');

Route::view('/form5', 'forms.form_fileupload')->name('form5');
Route::view('/form6', 'forms.form_icheck')->name('form6');

Route::view('/form7', 'forms.form_image_crop')->name('form7');
Route::view('/form8', 'forms.form_layouts')->name('form8');

Route::view('/form9', 'forms.form_validation')->name('form9');

Route::view('/form10', 'forms.form_wizard')->name('form10');
