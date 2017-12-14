<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('getcustomers','ReactController@getAllCustomers');
Route::post('deleteCustomer','ReactController@deleteCustomer');
Route::post('updateCustomerName','ReactController@updateCustomerName');
Route::post('addNewCustomer','ReactController@addNewCustomer'); 
