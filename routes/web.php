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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::prefix('admin')->group(function () {
    // Login Routes...
    Route::get('login', 'admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'admin\Auth\LoginController@login')->name('admin.login');

    // Logout Routes...
    Route::post('logout', 'admin\Auth\LoginController@logout')->name('admin.logout');

    // Registration Routes...
    Route::get('register', 'admin\Auth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'admin\Auth\RegisterController@register')->name('admin.register');

    // Password Reset Routes...
    Route::get('password/reset', 'admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email', 'admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}', 'admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'admin\Auth\ResetPasswordController@reset')->name('admin.password.update');

    // Password Confirmation Routes...
    Route::get('password/confirm', 'admin\Auth\ConfirmPasswordController@showConfirmForm')->name('admin.password.confirm');
    Route::post('password/confirm', 'admin\Auth\ConfirmPasswordController@confirm')->name('admin.password.confirm');

    // Email Verification Routes...
    Route::get('email/verify', 'admin\Auth\VerificationController@show')->name('admin.verification.notice');
    Route::get('email/verify/{id}/{hash}', 'admin\Auth\VerificationController@verify')->name('admin.verification.verify');
    Route::post('email/resend', 'admin\Auth\VerificationController@resend')->name('admin.verification.resend');


    Route::get('home', 'admin\HomeController@index')->name('admin.home');

     //Role Routes
     Route::resource('role','admin\PostController');
     Route::get('role/delete/{id}','admin\RoleController@delete')->name('post.delete');


     //Post routes for admin
     Route::resource('post','admin\PostController');
     Route::get('post/delete/{id}','admin\PostController@destroy')->name('post.delete');
     Route::get('post/status/change/{id}','admin\PostController@changeStatus')->name('post.status.change');





      //Permission Routes
      Route::get('manage/permissions','admin\PermissionController@managePermission')->name('permissions');


      //Permission Routes
      Route::get('administrative-user/create','admin\AdministrativerUserController@createUser')->name('administrative.user.create');
      Route::post('administrative-user/store','admin\AdministrativerUserController@storeUser')->name('administrative.user.store');
      Route::get('administrative-user/edit/{id}','admin\AdministrativerUserController@editUser')->name('administrative.user.edit');
      Route::post('administrative-user/update/{id}','admin\AdministrativerUserController@updateUser')->name('administrative.user.update');
      Route::get('administrative-users','admin\AdministrativerUserController@index')->name('administrative.users');
      Route::get('administrative-user/delete/{id}','admin\AdministrativerUserController@deleteUser')->name('administrative.user.delete');


    Route::get('assign/permission/{permission}/{role}','admin\PermissionController@assignPermission')->name('assign.permission');
    Route::get('remove/permission/{permission}/{role}','admin\PermissionController@removePermission')->name('remove.permission');


});


    //Category Controller
    Route::resource('category','CategoryController');
    Route::get('category/delete/{id}','CategoryController@delete')->name('category.delete');

    //Topic Controller
    Route::resource('topic','TopicController');
    Route::get('topic/delete/{id}','TopicController@delete')->name('topic.delete');





 //MemberShipPlan Controller
 Route::resource('member','MembershipPlanController');
 Route::get('member/delete/{id}','MembershipPlanController@delete')->name('member.delete');

 //AddSubscription Controller
 Route::resource('subscription','AdSubscriptionController');
 Route::get('subscription/delete/{id}','AdSubscriptionController@delete')->name('subscription.delete');

 Route::get('permissions/create','admin\AdministrativerUserController@createPermissions')->name('permissions.create');
 Route::get('permissions/delete','admin\AdministrativerUserController@removeAllPermissions')->name('permissions.delete');
 Route::get('role/add/permissions','admin\AdministrativerUserController@addAllPermissionForRoles')->name('role.add.permissions');





//UserAddSubscription Controller
    Route::resource('user_subscription','UserAdSubscriptionController');
    Route::get('user_subscription/delete/{id}','UserAdSubscriptionController@delete')->name('user_subscription.delete');
