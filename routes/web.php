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

Route::get('/','LoginController@Index');
Route::post('/','LoginController@checklogins');
Route::get('/','LoginController@destroy')->name('logout');





//admin access starts here


Route::get('/admindashboard','AdminController@Index')->name('Admin.admindashboard');
Route::get('/admindashboard/dataentry','AdminController@AddDataEntryEmployee')->name('DataEntryAdmin.add');
Route::post('/admindashboard/dataentry','AdminController@InsertDataEmployee');
Route::get('/admindashboard/dataentry/view','AdminController@viewDataEmployee')->name('DataEntryAdmin.view');
Route::get('/admindashboard/dataentry/delete/{id}','AdminController@DataEntryDestroy')->name('DeleteDataEmployee');
Route::get('/admindashboard/dataentry/edit/{id}','AdminController@EditDataEntryEmployee')->name('EditDataEntryEmployee');
Route::post('/admindashboard/dataentry/edit/{id}','AdminController@UpdateDataEntryEmployee');






Route::get('/admindashboard/operator','AdminController@AddOperatorEmployee')->name('OperatorAdmin.add');
Route::post('/admindashboard/operator','AdminController@InsertOperatorEmployee');
Route::get('/admindashboard/opertor/view','AdminController@viewOperatorEmployee')->name('OperatorAdmin.view');
Route::get('/admindashboard/opertor/delete/{id}','AdminController@OperatorDestroy')->name('Deleteoperator');
Route::get('/admindashboard/opertor/edit/{id}','AdminController@OperatorEdit')->name('OperatorEdit');
Route::post('/admindashboard/opertor/edit/{id}','AdminController@UpdateOperator');








Route::get('/admindashboard/Role','AdminController@AddRole')->name('Role.add');
Route::get('/admindashboard/opRole','AdminController@AddOpRole')->name('Role.operator');
Route::get('/admindashboard/Role/DataEntry/{id}','AdminController@addDataEntryRole')->name('addDataEntryRole');
Route::get('/admindashboard/Role/denyDataEntry/{id}','AdminController@denyDataEntryRole')->name('denyDataEntryRole');
Route::get('/admindashboard/Role/OperatorRole/{id}','AdminController@permitOperatorRole')->name('permitOperatorRole');
Route::get('/admindashboard/Role/denyOperatorRole/{id}','AdminController@denyOperatorRole')->name('denyOperatorRole');




Route::get('/admindashboard/stock','AdminController@createStock')->name('createStock');
Route::post('/admindashboard/stock','AdminController@InsertStock');
Route::get('/admindashboard/stock/{id}','AdminController@productFetch');

Route::get('/admindashboard/stock-vendor','AdminController@addVendor')->name('addvendor');
Route::post('/admindashboard/stock-vendor','AdminController@InsertVendor');


Route::get('/admindashboard/stock-manage','AdminController@ManageStock')->name('managestock');
Route::get('/admindashboard/stock-delete/{id}','AdminController@deleteStock')->name('deleteStock');
Route::get('/admindashboard/stock-edit/{id}','AdminController@editStock')->name('editStock');
Route::post('/admindashboard/stock-edit/{id}','AdminController@updatestock');

Route::get('/admindashboard/stock-damaged','AdminController@damangeStock')->name('damangeStock');
Route::post('/admindashboard/stock-damaged','AdminController@insertDamageStock');
Route::get('/admindashboard/stock-current','AdminController@currentStock')->name('currentStock');











//admin access ends here





//data entry access starts Here

Route::get('/dataentrydashboard/addproduct','DataEntryController@AddProduct')->name('addproduct');
Route::post('/dataentrydashboard/addproduct','DataEntryController@StoreProduct');
Route::get('/dataentrydashboard/editproduct/{id}','DataEntryController@editProduct');

Route::get('/dataentrydashboard/viewproduct','DataEntryController@viewProduct')->name('viewProduct');


Route::get('/dataentrydashboard/addcatagory','DataEntryController@AddCatagory')->name('addcatagory');
Route::post('/dataentrydashboard/addcatagory','DataEntryController@StoreCatagory');



















Route::get('/dataentrydashboard','DataEntryController@Index')->name('DataEntry.dataentryDashboard');





Route::get('/operatordashboard','OperatorController@Index')->name('Operator.operatorDashboard');
