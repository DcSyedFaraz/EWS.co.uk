<?php

use App\Http\Controllers\Web\BlogController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes([
    //'register'  => true,     // Registration Routes...
    //'verify'    => true,       // Email Verification Routes...
    //'reset'     => true,        // Password Reset Routes...

]);




Route::group(['middleware' => ['auth','verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function(){

    Route::get('/', 'DashboardController@index')->name('home');
    Route::post('/get-slug', 'DashboardController@getSlug')->name('getSlug');

    // Contacts
    Route::get('get-contacts', 'ContactController@getContacts')->name('contacts.get');
    Route::resource('contacts', 'ContactController');

    //OrderQueries
    //Route::get('/order-queries', 'OrdersController@query')->name('order.query');
    //Route::get('/order-queries/{id}', 'OrdersController@queryShow')->name('order.query.show');

    //Orders
    //Route::get('/orders', 'OrdersController@index')->name('orders.index');
    //Route::get('/orders/{id}', 'OrdersController@show')->name('orders.show');
    //Route::post('/orders/{id}/complete', 'OrdersController@complete')->name('orders.complete');
    Route::get('get-orders', 'OrdersController@getOrders')->name('orders.get');
    Route::resource('orders', 'OrdersController');

    //Category
    Route::resource('categories', 'CategoryController');

    //Tags
    Route::resource('tags', 'TagsController');

    //Services
     Route::resource('services', 'ServicesController');

     // Invoices
    Route::resource('invoices', 'InvoicesController');

    // Customers
    Route::resource('customers', 'CustomersController');

    Route::resource('setting', 'WebSettingController');

    //Blogs
     Route::resource('blogs', 'BlogsController');

    //Fare
     Route::resource('fare', 'FareController');

    //Web Setting
    Route::resource('web-setting', 'WebSettingController', ['only' => ['index', 'edit', 'update']]);

    //Web Menus
    Route::resource('menus',             'MenuController');

    //Pages
    Route::resource('pages',             'PageController');

    //Change Password
    Route::get('/change-password', 'ProfileController@changePassword')->name('change.password');
    Route::post('/change-password', 'ProfileController@changePasswordUpdate')->name('change.password.update');

});


Route::group(['prefix' => 'customer', 'as' => 'customer.', 'namespace' => 'Customer', 'middleware' => [ 'auth', 'verified', 'customer']], function () {

    Route::get('/', 'HomeController@index')->name('home');

    // Orders
    Route::resource('orders', 'OrdersController');

    // Invoices
    Route::resource('invoices', 'InvoicesController');

    // Profile
    Route::resource('profile', 'ProfileController')->only(['index', 'update']);
    // Change
    Route::get('change-password', 'ProfileController@changePassword')->name('profile.change-password');
    Route::post('change-password', 'ProfileController@changePasswordUpdate')->name('profile.change-password.change');
});



// Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
//     // Change password
//     if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
//         Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
//         Route::post('password', 'ChangePasswordController@update')->name('password.update');
//         Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
//         Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
//     }
// });

// web routes;

Route::group(['namespace'=> 'Web'], function(){
    Route::get('/',                          "PagesController@index")->name('home');
Route::get('/about',                     "PagesController@about")->name('about');
Route::get('/refund-policy',             "PagesController@refundPolicy")->name('refund.policy');
Route::get('/revision-policy',           "PagesController@revisionPolicy")->name('revision.policy');
Route::get('/terms-and-conditions',      "PagesController@termsAndConditions")->name('terms.and.conditions');
Route::get('/guarantees',                "PagesController@guarantees")->name('guarantees');
Route::get('/privacy-policy',            "PagesController@privacyPolicy")->name('privacy.policy');
Route::get('/sitemap',                   "PagesController@sitemap")->name('sitemap');
Route::get('/pricing-plans',             "PagesController@plans")->name('plans');
Route::get('/reviews',                   "PagesController@reviews")->name('reviews');
Route::get('/samples',                   "PagesController@samples")->name('samples');

    // ContactController
    Route::get('/contact',    "ContactController@create")->name('contact');
    Route::post('/contact',   "ContactController@store")->name('contact.store');

    //Order
    Route::get('/order' , 'OrderController@create')->name('order');
    Route::post('/order' , 'OrderController@store')->name('order.store');

    // invoice
    Route::get('invoice', 'OrderController@invoice')->name('invoice');


    // Route::get('/terms-and-conditions', "PoliciesController@termsAndConditions")->name('policy.terms-and-conditions');


    // Blogs"
    Route::get('/blogs', 'BlogController@create')->name('blogs');
    Route::get('/blogs/{slug}', 'BlogController@show')->name('blogs.show');

    // Services
    // Route::get('/services', 'ServiceController@create');
    Route::get('/{slug}' , 'ServiceController@show')->name('service.show');




});


