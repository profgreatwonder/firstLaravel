<?php

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

// use Symfony\Component\Routing\Annotation\Route;


// These below is a long method for writing your route.
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('contact', function() {
//     return view('contact');
// });

// Route::get('about', function() {
//     return view('about');
// });

Route::view('/', 'home')->name('index');

Route::get('contact', 'ContactFormController@create')->name('contact.create');

Route::post('contact', 'ContactFormController@store')->name('contact.store');

//the contact below is replaced by the one above
// Route::view('contact', 'contact');


// Route::view('about', 'about')->middleware('test');
Route::view('about', 'about')->name('about');

// The above format is not a good option when you have to pass data into your route.

// Route::get('customers', function() {

//         $customers = [
//             'John Doe',
//             'Jane Doe',
//             'Bob the Builder'
//         ];
//         return view('internals.customers', [
//             'customers' => $customers,
//         ]);
// });

// It is more professional to put the code above in a controller file created in a controller folder found in the app.

Route::get('customers', 'CustomersController@index')->name('customers.index');

Route::get('customers/create', 'CustomersController@create')->name('customers.create');

Route::post('customers', 'CustomersController@store')->name('customers.store');

Route::get('customers/{customer}','CustomersController@show')->middleware('can:view,customer');

Route::get('customers/{customer}/edit','CustomersController@edit')->name('customers.edit');

Route::patch('customers/{customer}','CustomersController@update')->name('customers.update');

Route::delete('customers/{customer}','CustomersController@destroy')->name('customers.destroy');

//the commented lines of code can be re-written into the short code below

// Route::resource('customers', 'CustomersController');

// the code below is a way to authorize what page a user sees. The second method is to do it the CustomerController.
// Route::resource('customers', 'CustomersController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');
// ->name('home');





//"Route [customers.store] not defined. (View: C:\laragon\www\firstLaravel\resources\views\customers\create.blade.php)"
// the error above can be fixed by adding
// ->name('customers.edit') at the end of a route
