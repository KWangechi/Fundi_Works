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


Route::get('/', 'HomeController@index');

   Route::get('/' ,function(){
return view('welcome');

   });

   
   Route::get('Contact' ,function(){
    //return 'This is my first code in Laravel';
    return 'Contact us';
   });
   
   Route::get('about' ,function(){
    
    return 'You can learn more about us by simply sending us an email at rkaranja303@gmail.com';
   });

   Route::get('/contact' ,function(){
    return view('/contact');
   });
   */
  

   //Route::get('/', 'HomeController@index');
   /*
   Route::get('contact', 'HomeController@contacts');
   Route::get('about-us' , 'HomeController@aboutus');
   */


  // Route::view('welcome', 'welcome');
  
  /* Route::get('customers', function(){
       return view('internals.customers');
   });



   
   Route::get('customers', 'CustomersController@list');
Route::post('customers', 'CustomersController@store');
 

/*
Route::get('adminfundi', 'FundiController@list');
Route::post('adminfundi', 'FundiController@store');

*/


/* Route::get('welcome' ,function(){
   return view('welcome');
   
      }); */
      
      Route::get('/' ,function(){
         return view('welcome');
         
            });
      
            /* Route::get('customers', function(){
               return view('internals.customers');
            }); */





Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']], function(){
   
   Route::get('dashboard', function(){
      return view('admin.dashboard');
   });

   
   Route::get('users' ,'Admin\DashboardController@index');
   Route::get('adminedit/{id}' ,'Admin\DashboardController@userEdit');

Route::put("adminupdate/{id}", 'Admin\DashboardController@userUpdate');
Route::delete('admindelete/{id}', 'Admin\DashboardController@userDelete');

//Fundi Editting
Route::get('adminfundi', 'FundiController@index');
Route::get('fundi', 'FundiController@list');

Route::post('adminfundi', 'FundiController@store');
Route::get('fundiedit/{id}', 'FundiController@fundiEdit');
Route::put("fundiupdate/{id}", 'FundiController@fundiUpdate');
Route::delete('fundidelete/{id}', 'FundiController@delete');



//Customers Module
Route::get('customers', 'CustomersController@index')->name('customers');
Route::post('customers', 'CustomersController@index')->name('customers');
Route::get('orders', 'CustomersController@showOrders');





});





