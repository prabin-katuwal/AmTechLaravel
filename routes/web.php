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
	Route::get('/', [
		'uses' => 'FrontendController@index',
		'as' => 'index'
	]);

	Route::get('/about', function () {
		return view('front.about');
	})->name('about');

	Route::get('/overview', function () {
		return view('front.overview');
	})->name('overview');


		
	Route::get('/guiding_policies', function () {
		return view('front.guiding_policies');
	})->name('guiding_policies');
	
	Route::get('/team', function () {
		return view('front.team');
	})->name('team');


	Route::get('/gallery', [
		'uses' => 'FrontendController@gallery',
		'as' => 'gallery1'
	]);


	Route::get('/mrp', [
		'uses' => 'FrontendController@mrp',
		'as' => 'mrp1'
	]);

	
	Route::get('/vacancy', [
		'uses' => 'FrontendController@vacancy',
		'as' => 'vacancy'
	]);

	Route::get('/new_product', [
		'uses' => 'FrontendController@new_product',
		'as' => 'new_product'
	]);


	
	Route::get('/inquiry', [
		'uses' => 'FrontendController@inquiry',
		'as' => 'inquiry'
	]);

	Route::post('/inquiry', [
		'uses' => 'FrontendController@inquirystore',
		'as' => 'inquiry.store'
	]);


	Route::get('/qad', function () {
		return view('front.qad');
	})->name('qad');


	Route::get('/qcd', function () {
		return view('front.qcd');
	})->name('qcd');

	Route::get('/research', function () {
		return view('front.research');
	})->name('research');



	Route::get('/production', function () {
		return view('front.production');
	})->name('production');

	Route::get('/distributor', function () {
		return view('front.distributor');
	})->name('distributor');


Route::get('/news', [
	'uses' => 'FrontendController@news',
	'as' => 'news'
]);


Route::get('/product', [
	'uses' => 'FrontendController@product',
	'as' => 'product1'
]);


Route::get('/news/{slug}', [
	'uses' => 'FrontendController@newsSingle',
	'as' => 'news.single'
]);

Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');



Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

	Route::get('/dashboard', [
	'uses' => 'HomeController@index',
	'as' => 'home'
    ]);


	Route::get('/posts', [
		'uses' => 'PostsController@index',
	    'as' => 'posts'
	]);

	Route::get('/post/create', [
		'uses' => 'PostsController@create',
		'as' => 'post.create'
	]);

	Route::post('/post/store', [
		'uses' => 'PostsController@store',
		'as' => 'post.store'
	]);

	Route::get('/post/edit/{id}', [
		'uses' => 'PostsController@edit',
		'as' => 'post.edit'
	]);

	Route::post('/post/update/{id}', [
		'uses' => 'PostsController@update',
		'as' => 'post.update'
	]);

	Route::get('/post/delete/{id}', [
		'uses' => 'PostsController@destroy',
		'as' => 'post.delete'
	]);

	Route::get('/posts/trashed', [
		'uses' => 'PostsController@trashed',
	    'as' => 'posts.trashed'
	]);

	Route::get('/post/kill/{id}', [
		'uses' => 'PostsController@kill',
	    'as' => 'post.kill'
	]);

	Route::get('/post/restore/{id}', [
		'uses' => 'PostsController@restore',
		'as' => 'post.restore'
	]);



	Route::get('/categories',[
		'uses' => 'CategoriesController@index',
		'as' => 'categories'
	]);

	Route::get('/category/create', [
		'uses' => 'CategoriesController@create',
		'as' => 'category.create'
	]);

	Route::post('/category/store', [
		'uses' => 'CategoriesController@store',
		'as' => 'category.store'
	]);

	Route::get('/category/edit/{id}', [
		'uses' => 'CategoriesController@edit',
		'as' =>'category.edit'
	]);

	Route::post('/category/update/{id}', [
		'uses' => 'CategoriesController@update',
		'as' => 'category.update'
	]);

	Route::get('/category/delete/{id}', [
		'uses' => 'CategoriesController@destroy',
		'as' => 'category.delete'
	]);



	Route::get('/gallery', [
		'uses' => 'GpostController@index',
	    'as' => 'gallery'
	]);

	Route::get('/gallery/create', [
		'uses' => 'GpostController@create',
		'as' => 'gallery.create'
	]);

	Route::post('/gallery/store', [
		'uses' => 'GpostController@store',
		'as' => 'gallery.store'
	]);

	Route::get('/gallery/edit/{id}', [
		'uses' => 'GpostController@edit',
		'as' => 'gallery.edit'
	]);

	Route::post('/gallery/update/{id}', [
		'uses' => 'GpostController@update',
		'as' => 'gallery.update'
	]);

	Route::get('/gallery/delete/{id}', [
		'uses' => 'GpostController@destroy',
		'as' => 'gallery.delete'
	]);




	Route::get('/nproduct', [
		'uses' => 'NproductController@index',
	    'as' => 'nproduct'
	]);

	Route::get('/nproduct/create', [
		'uses' => 'NproductController@create',
		'as' => 'nproduct.create'
	]);

	Route::post('/nproduct/store', [
		'uses' => 'NproductController@store',
		'as' => 'nproduct.store'
	]);

	Route::get('/nproduct/edit/{id}', [
		'uses' => 'NproductController@edit',
		'as' => 'nproduct.edit'
	]);

	Route::post('/nproduct/update/{id}', [
		'uses' => 'NproductController@update',
		'as' => 'nproduct.update'
	]);

	Route::get('/nproduct/delete/{id}', [
		'uses' => 'NproductController@destroy',
		'as' => 'nproduct.delete'
	]);



	Route::get('/product', [
		'uses' => 'ProductController@index',
	    'as' => 'product'
	]);

	Route::get('/product/create', [
		'uses' => 'ProductController@create',
		'as' => 'product.create'
	]);

	Route::post('/product/store', [
		'uses' => 'productController@store',
		'as' => 'product.store'
	]);

	Route::get('/product/edit/{id}', [
		'uses' => 'productController@edit',
		'as' => 'product.edit'
	]);

	Route::post('/product/update/{id}', [
		'uses' => 'productController@update',
		'as' => 'product.update'
	]);

	Route::get('/product/delete/{id}', [
		'uses' => 'productController@destroy',
		'as' => 'product.delete'
	]);




	Route::get('/mrp', [
		'uses' => 'MrpController@index',
	    'as' => 'mrp'
	]);

	Route::get('/mrp/create', [
		'uses' => 'MrpController@create',
		'as' => 'mrp.create'
	]);

	Route::post('/mrp/store', [
		'uses' => 'MrpController@store',
		'as' => 'mrp.store'
	]);

	Route::get('/mrp/edit/{id}', [
		'uses' => 'MrpController@edit',
		'as' => 'mrp.edit'
	]);

	Route::post('/mrp/update/{id}', [
		'uses' => 'MrpController@update',
		'as' => 'mrp.update'
	]);

	Route::get('/mrp/delete/{id}', [
		'uses' => 'MrpController@destroy',
		'as' => 'mrp.delete'
	]);




	Route::get('/pcategory', [
		'uses' => 'PcategoryController@index',
	    'as' => 'pcategory'
	]);

	Route::get('/pcategory/create', [
		'uses' => 'PcategoryController@create',
		'as' => 'pcategory.create'
	]);

	Route::post('/pcategory/store', [
		'uses' => 'PcategoryController@store',
		'as' => 'pcategory.store'
	]);

	Route::get('/pcategory/edit/{id}', [
		'uses' => 'PcategoryController@edit',
		'as' => 'pcategory.edit'
	]);

	Route::post('/pcategory/update/{id}', [
		'uses' => 'PcategoryController@update',
		'as' => 'pcategory.update'
	]);

	Route::get('/pcategory/delete/{id}', [
		'uses' => 'PcategoryController@destroy',
		'as' => 'pcategory.delete'
	]);



	
	Route::get('/mrpcategory', [
		'uses' => 'MrpcategoryController@index',
	    'as' => 'mrpcategory'
	]);


	Route::get('/mrpcategory/create', [
		'uses' => 'MrpcategoryController@create',
		'as' => 'mrpcategory.create'
	]);

	Route::post('/mrpcategory/store', [
		'uses' => 'MrpcategoryController@store',
		'as' => 'mrpcategory.store'
	]);

	Route::get('/mrpcategory/edit/{id}', [
		'uses' => 'MrpcategoryController@edit',
		'as' => 'mrpcategory.edit'
	]);

	Route::post('/mrpcategory/update/{id}', [
		'uses' => 'MrpcategoryController@update',
		'as' => 'mrpcategory.update'
	]);

	Route::get('/mrpcategory/delete/{id}', [
		'uses' => 'MrpcategoryController@destroy',
		'as' => 'mrpcategory.delete'
	]);




	Route::get('/job', [
		'uses' => 'JobController@index',
	    'as' => 'job'
	]);

	Route::get('/job/create', [
		'uses' => 'JobController@create',
		'as' => 'job.create'
	]);

	Route::post('/job/store', [
		'uses' => 'JobController@store',
		'as' => 'job.store'
	]);

	Route::get('/job/edit/{id}', [
		'uses' => 'JobController@edit',
		'as' => 'job.edit'
	]);

	Route::post('/job/update/{id}', [
		'uses' => 'JobController@update',
		'as' => 'job.update'
	]);

	Route::get('/job/delete/{id}', [
		'uses' => 'JobController@destroy',
		'as' => 'job.delete'
	]);





	
	Route::get('/njob', [
		'uses' => 'NjobController@index',
	    'as' => 'njob'
	]);

	Route::get('/njob/create', [
		'uses' => 'NjobController@create',
		'as' => 'njob.create'
	]);

	Route::post('/njob/store', [
		'uses' => 'NjobController@store',
		'as' => 'njob.store'
	]);

	Route::get('/njob/edit/{id}', [
		'uses' => 'NjobController@edit',
		'as' => 'njob.edit'
	]);

	Route::post('/njob/update/{id}', [
		'uses' => 'NjobController@update',
		'as' => 'njob.update'
	]);

	Route::get('/njob/delete/{id}', [
		'uses' => 'NjobController@destroy',
		'as' => 'njob.delete'
	]);





	Route::get('/fproduct', [
		'uses' => 'FproductController@index',
	    'as' => 'fproduct'
	]);

	Route::get('/fproduct/create', [
		'uses' => 'FproductController@create',
		'as' => 'fproduct.create'
	]);

	Route::post('/fproduct/store', [
		'uses' => 'FproductController@store',
		'as' => 'fproduct.store'
	]);

	Route::get('/fproduct/edit/{id}', [
		'uses' => 'FproductController@edit',
		'as' => 'fproduct.edit'
	]);

	Route::post('/fproduct/update/{id}', [
		'uses' => 'FproductController@update',
		'as' => 'fproduct.update'
	]);

	Route::get('/fproduct/delete/{id}', [
		'uses' => 'FproductController@destroy',
		'as' => 'fproduct.delete'
	]);


	


	Route::get('/features',[
		'uses' => 'FeaturesController@index',
		'as' => 'features'
	]);

	Route::get('/features/create', [
		'uses' => 'FeaturesController@create',
		'as' => 'features.create'
	]);

	Route::post('/features/store', [
		'uses' => 'FeaturesController@store',
		'as' => 'features.store'
	]);

	Route::get('/features/edit/{id}', [
		'uses' => 'FeaturesController@edit',
		'as' =>'features.edit'
	]);

	Route::post('/features/update/{id}', [
		'uses' => 'FeaturesController@update',
		'as' => 'features.update'
	]);

	Route::get('/features/delete/{id}', [
		'uses' => 'FeaturesController@destroy',
		'as' => 'features.delete'
	]);



	

	Route::get('/teacher',[
		'uses' => 'TeacherController@index',
		'as' => 'teacher'
	]);

	Route::get('/teacher/create', [
		'uses' => 'TeacherController@create',
		'as' => 'teacher.create'
	]);

	Route::post('/teacher/store', [
		'uses' => 'TeacherController@store',
		'as' => 'teacher.store'
	]);

	Route::get('/teacher/edit/{id}', [
		'uses' => 'TeacherController@edit',
		'as' =>'teacher.edit'
	]);

	Route::post('/teacher/update/{id}', [
		'uses' => 'TeacherController@update',
		'as' => 'teacher.update'
	]);

	Route::get('/teacher/delete/{id}', [
		'uses' => 'TeacherController@destroy',
		'as' => 'teacher.delete'
	]);



	Route::get('/users', [
		'uses' => 'UsersController@index',
		'as' => 'users'
	]);

	Route::get('/user/create', [
		'uses' => 'UsersController@create',
		'as' => 'user.create'
	]);

	Route::post('/user/store', [
		'uses' => 'UsersController@store',
		'as' => 'user.store'
	]);

	Route::get('/user/admin/{id}', [
		'uses' => 'UsersController@admin',
		'as' => 'user.admin'
    ]);

	Route::get('/user/not-admin/{id}', [
		'uses' => 'UsersController@not_admin',
		'as' => 'user.not.admin'

	]);

	Route::get('/user/profile', [
		'uses' => 'ProfilesController@index',
		'as' => 'user.profile'
	]);

	Route::get('/user/delete/{id}', [
		'uses' => 'UsersController@destroy',
		'as' => 'user.delete'
	]);

	Route::post('/user/profile/update', [
		'uses' => 'ProfilesController@update',
		'as' => 'user.profile.update'
	]);

	Route::get('change-password', 'ChangepasswordController@index')->name('password.form');
	
	Route::post('change-password', 'ChangepasswordController@update')->name('password.update');


	Route::get('/settings', [
		'uses' => 'SettingsController@index',
		'as' => 'settings'
	]);

	Route::post('/settings/update', [
		'uses' => 'SettingsController@update',
		'as' => 'settings.update'
	]);





});
