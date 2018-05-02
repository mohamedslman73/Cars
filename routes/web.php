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

Route::get('/homes', function () {
//    return view('website.home.index');
});




/*  ----------------   AdminPanel Route  ------------------*/

/*   ---------   Login controller   -----------------*/


//    Dashbord controller
Route::group(['prefix'=>'admins','middleware'=>'Admin'],function (){

//    Account controller

    Route::resource('/accounts', 'admin\Acounts_controller');

//    cars controller

    Route::resource('/cars', 'admin\CarsController');

// Main Content Controller

    Route::resource('/aboutcontent', 'admin\AboutContentController');

//    Cv  controller
    Route::resource('/Cv', 'admin\Job_cv_controller');

    Route::resource('/rentinfo', 'admin\RentinfoController');
//    slider controller

    Route::resource('/sliders', 'admin\Slider_controller');

//    Testimonials controller

    Route::resource('/Testimonials', 'admin\Testimonials_controller');

//    Blogs controller

    Route::resource('/Blogs', 'admin\Blogs_controller');

//     Team controller
    Route::resource('/Team', 'admin\Team_controller');

//    Contact us controller

    Route::resource('/contact-us', 'admin\Contact_Us_controller');


//    Services us controller

    Route::resource('/services', 'admin\Services_controller');

//    Subscribe controller

    Route::resource('/Subscribe', 'admin\Subscribe_controller');


//     Clients controller

    Route::resource('/Clients', 'admin\Client_controller');


//     Jobs controller

    Route::resource('/Jobs', 'admin\Jobs_controller');


//     Question controller

    Route::resource('/Question', 'admin\Question_controller');


//     Article controller

    Route::resource('/Article', 'admin\Article_controller');

//     Seeting controller

    Route::resource('/setting', 'admin\Setting_controller');


    /**      Product controller */

    Route::resource('/product', 'admin\Product_controller');
    Route::resource('/category', 'admin\Category_controller');

    //Footer Contetn Controller
    Route::resource('/footercontent','admin\FooterContentController');

    //Home Content Controller

    Route::resource('/homecontent','admin\HomeContentController');


/*Route::post('/addreplay','admin\CarsController@activate')->name('activate');*/

Route::get('/showcars/{id}','admin\CarsController@showcar');
Route::get('/showsold/{id}','admin\CarsController@showsold');
Route::get('/showrent/{id}','admin\CarsController@showrent');

    Route::get('/logout', 'admin\Logincontroller@logout')->name('logout1');
    Route::resource('/home', 'admin\HomePageController');
});
//Auth::routes();
$this->get('admins/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('admins/login', 'Auth\LoginController@login');
$this->post('admins/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

//Front Routes

Route::resource('/footer','front\FooterController');


Route::resource('/about','front\AboutController');

Route::resource('/service','front\ServiceController');
Route::resource('/filter','front\CarController');
Route::get('/specifications/{id}','front\CarController@show');
Route::get('/mod/{model}','front\CarController@showmodel');
Route::get('/rent/{id?}','front\CarController@rentcar');

Route::get('bodytype/{type}','front\CarController@getCarBody');

/*Route::get('/','front\CarController@getCarBody');*/

Route::get('/','front\CarController@getindex');

Route::get('/filter1','front\CarController@filterindex');

Route::get('/any','front\CarController@searchRent');


Route::resource('/contact','front\ContactController');
Route::get('/contact-us/{id?}','front\ContactController@contact');
Route::post('/contact-us/{id?}','front\ContactController@contactStore');

//Route::post('rentinfo','front\IndexController@rentInfo');

Route::resource('/test','front\IndexController');

Route::get('/404','front\IndexController@notfound')->name('notfound');

/*Route::get('/',function (){
   return view('website.index');
});*/



/*Route::get('/contact',function (){
    return view('website.contact');
});*/



/*Route::get('/filter',function (){
    return view('website.filter');
});*/

Route::get('/specifications',function (){
    return view('website.specifications');
});




