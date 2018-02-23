<?php

// Route::get('test',function(){

// 	return App\Tag::find(2)->posts;

// });

Route::get('/',[
	'uses' => 'ToursanakController@index',
	'as' => 'toursanak.index'
]);
Route::get('/about',[
	'uses' => 'ToursanakController@about',
	'as' => 'toursanak.about'
]);
Route::get('/blog',[
	'uses' => 'ToursanakController@blog',
	'as' => 'toursanak.blog'
]);
Route::get('/contact',[
	'uses' => 'ToursanakController@contact',
	'as' => 'toursanak.contact'
]);
Route::get('/faq',[
	'uses' => 'ToursanakController@faq',
	'as' => 'toursanak.faq'
]);
Route::get('/careers',[
	'uses' => 'ToursanakController@careers',
	'as' => 'toursanak.careers'
]);
Route::get('/{slug}',[
	'uses' => 'ToursanakController@single',
	'as' => 'toursanak.single'
]);

Auth::routes();

Route::group(['prefix' => 'admin','middleware' => 'auth'],function(){

	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/dashboard',[
		'uses' => 'HomeController@dashboard',
		'as' => 'dashboard'
	]);

	// Post Conotrller
	Route::get('/post/create',[
		'uses' => 'PostController@create',
		'as' => 'post.create'
	]);
	Route::get('/post/index',[
		'uses' => 'PostController@index',
		'as' => 'post.index'
	]);
	Route::post('/post/store',[
		'uses' => 'PostController@store',
		'as' => 'post.store'
	]);
	Route::post('/post/update/{id}',[
		'uses' => 'PostController@update',
		'as' => 'post.update'
	]);
	Route::get('/post/edit/{id}',[
		'uses' => 'PostController@edit',
		'as' => 'post.edit'
	]);
	Route::get('/post/delete/{id}',[
		'uses' => 'PostController@destroy',
		'as' => 'post.delete'
	]);

	// Category Controller
	Route::get('/category/index',[
		'uses' => 'CategoryController@index',
		'as' => 'category.index'
	]);
	Route::get('/category/create',[
		'uses' => 'CategoryController@create',
		'as' => 'category.create'
	]);
	Route::post('/category/store',[
		'uses' => 'CategoryController@store',
		'as' => 'category.store'
	]);
	Route::get('/category/edit/{id}',[
		'uses' => 'CategoryController@edit',
		'as' => 'category.edit'
	]);
	Route::get('/category/delete/{id}',[
		'uses' => 'CategoryController@destroy',
		'as' => 'category.delete'
	]);
	Route::post('/category/update/{id}',[
		'uses' => 'CategoryController@update',
		'as' => 'category.update'
	]);

	// Tag Controller
	Route::get('/tag/index',[
		'uses' => 'TagController@index',
		'as' => 'tag.index'
	]);
	Route::get('/tag/create',[
		'uses' => 'TagController@create',
		'as' => 'tag.create'
	]);
	Route::post('/tag/store',[
		'uses' => 'TagController@store',
		'as' => 'tag.store'
	]);
	Route::get('/tag/edit/{id}',[
		'uses' => 'TagController@edit',
		'as' => 'tag.edit'
	]);
	Route::get('/tag/delete/{id}',[
		'uses' => 'TagController@destroy',
		'as' => 'tag.delete'
	]);
	Route::post('/tag/update/{id}',[
		'uses' => 'TagController@update',
		'as' => 'tag.update'
	]);


	// Create Page
	Route::get('/page/index',[
		'uses' => 'PageController@index',
		'as' => 'page.index'
	]);
	Route::get('/page/create',[
		'uses' => 'PageController@create',
		'as' => 'page.create'
	]);
	Route::post('/page/store',[
		'uses' => 'PageController@store',
		'as' => 'page.store'
	]);
	Route::get('/page/edit/{id}',[
		'uses' => 'PageController@edit',
		'as' => 'page.edit'
	]);
	Route::get('/page/delete/{id}',[
		'uses' => 'PageController@destroy',
		'as' => 'page.delete'
	]);
	Route::post('/page/update/{id}',[
		'uses' => 'PageController@update',
		'as' => 'page.update'
	]);

	//Members
	Route::get('/member/index',[
		'uses' => 'MemberController@index',
		'as' => 'member.index'
	]);
	Route::get('/member/create',[
		'uses' => 'MemberController@create',
		'as' => 'member.create'
	]);
	Route::post('/member/store',[
		'uses' => 'MemberController@store',
		'as' => 'member.store'
	]);
	Route::get('/member/edit/{id}',[
		'uses' => 'MemberController@edit',
		'as' => 'member.edit'
	]);
	Route::get('/member/delete/{id}',[
		'uses' => 'MemberController@destroy',
		'as' => 'member.delete'
	]);
	Route::post('/member/update/{id}',[
		'uses' => 'MemberController@update',
		'as' => 'member.update'
	]);

	// All User

	Route::get('/user/index',[
		'uses' => 'HomeController@user',
		'as' => 'user.index'
	]);

});


