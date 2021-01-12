<?php
Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

// Registration Routes..
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
$this->post('register', 'Auth\RegisterController@register')->name('auth.register');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/help', 'HomeController@help');
    Route::get('/contact', 'HomeController@contact');

    Route::resource('subscriptions', 'Admin\SubscriptionsController');
    Route::resource('payments', 'Admin\PaymentsController');
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::resource('batches', 'Admin\BatchesController');
    Route::resource('courses', 'Admin\CoursesController');
    Route::get('users/teachers','Admin\UsersController@teachers')->name('users.teachers');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('students', 'Admin\StudentController');
    Route::resource('teachers', 'Admin\TeacherController');
    Route::resource('courseteacher', 'Admin\CourseTeacherController');
    Route::resource('studentcourse', 'Admin\StudentCoursesController');
    Route::resource('folders', 'Admin\FoldersController');
    Route::resource('posts', 'Admin\PostsController');
    Route::get('/folders/course/{course_id}','Admin\FoldersController@stdcourse')->name('folders.stdcourse');
    Route::post('folders_mass_destroy', ['uses' => 'Admin\FoldersController@massDestroy', 'as' => 'folders.mass_destroy']);
    Route::post('folders_restore/{id}', ['uses' => 'Admin\FoldersController@restore', 'as' => 'folders.restore']);
    Route::delete('folders_perma_del/{id}', ['uses' => 'Admin\FoldersController@perma_del', 'as' => 'folders.perma_del']);
    Route::resource('files', 'Admin\FilesController');
    Route::get('/{uuid}/download', 'Admin\DownloadsController@download');
    Route::get('/{uuid}/preview', 'Admin\DownloadsController@preview');
    Route::post('files_mass_destroy', ['uses' => 'Admin\FilesController@massDestroy', 'as' => 'files.mass_destroy']);
    Route::post('files_restore/{id}', ['uses' => 'Admin\FilesController@restore', 'as' => 'files.restore']);
    Route::delete('files_perma_del/{id}', ['uses' => 'Admin\FilesController@perma_del', 'as' => 'files.perma_del']);
    Route::post('/spatie/media/upload', 'Admin\SpatieMediaController@create')->name('media.upload');
    Route::post('/spatie/media/remove', 'Admin\SpatieMediaController@destroy')->name('media.remove');
});
