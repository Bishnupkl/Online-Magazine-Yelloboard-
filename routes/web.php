<?php

Auth::routes();
Route::get('/', 'Front\FrontUserController@index')->name('front.index');
Route::get('/getMe', 'Front\FrontUserController@getMe')->name('front.getme');



//****************************************comnt it march 7
//Route::get('/home', 'HomeController@index');

//****************************march7 cmnt it


Route::get('/user/home', 'UserController@index'); //for user controller and it is not needed===changed as user/visitor
Route::get('/user/visitor', 'VisitorController@index')->name('visitor.chooseCat');

Route::get('/changeCategory', 'VisitorController@change')->name('visitor.change');


Route::post('/user/visitor/profile', 'VisitorController@profile')->name('visitor.profile');

Route::get('/visitor/home', 'VisitorController@home')->name('visitor.home');


//for  publisher
Route::get('/publisher_dashboard', 'PublisherController@index')->name('publisher.dashboard');//
Route::get('/published_through_link', 'PublisherController@throughLink')->name('publisher.link');
Route::get('/customize_publishing', 'PublisherController@publishing')->name('publisher.publishing');
Route::get('/publisher_posts_show', 'PublisherController@show')->name('publisher.show');
Route::get('/publisher_posts_recent', 'PublisherController@recent')->name('publisher.recent');

//for kjfhdsaksjhdf march 5
Route::post('/customize_publishing/store', 'PublisherController@store')->name('publisher.storePost');

Route::get('/post/{id}/edit',     'PublisherController@publisher_edit')->name('publisher_post.edit');
Route::put('/post/{id}/',         'PublisherController@publisher_update')->name('publisher_post.update');
Route::delete('/post/{id}',         'PublisherController@publisher_destroy')->name('publisher_post.delete');


//march 5

Route::get('/index', 'PublisherController@index')->name('publisher.index');

//publisher add
Route::get('/publisher_add', 'PublisherController@indexAuthor')->name('publisher.add');
Route::post('/publisher_store', 'PublisherController@storeAuthor')->name('publisher.store');



//profile
Route::get('/myprofile', 'PublisherController@myProfile')->name('user.profile');
Route::get('/myprofile/{id}/edit', 'PublisherController@editmyProfile')->name('myprofile.edit');
Route::post('/myprofile/{id}', 'PublisherController@updatemyProfile')->name('myprofile.update');



//author list
Route::get('/authorlist',   'PublisherController@authorList')->name('publisher.authors');
Route::get('/authorlist/{id}/edit',   'PublisherController@authorEdit')->name('publisher.authoredit');
Route::get('/authorlist/{id}',   'PublisherController@updateAuthor')->name('publisher.authorupdate');


//for sponsor
Route::get('/publisher/post/{id}/sponsored',    'PublisherController@sponsor')->name('publisher.post.sponsor');
Route::get('/publisher/post/{id}/sponsoredCancel',      'PublisherController@sponsorCancel')->name('publisher.post.sponsorCancel');


//for  publisher
Route::get('/user/login', 'UserAuth\LoginController@showLoginForm')->name('user.login');
Route::post('/user/login', 'UserAuth\LoginController@login')->name('user.login');

Route::post('/user/logout', 'UserAuth\LoginController@userLogout')->name('user.logout');

Route::post('/user/password/email', 'UserAuth\ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');
Route::get('/user/password/reset', 'UserAuth\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');

Route::post('/user/password/reset', 'UserAuth\ResetPasswordController@reset');
Route::get('/user/password/reset/{token}', 'UserAuth\ResetPasswordController@showResetForm')->name('user.password.reset');



Route::get('/user/register', 'UserAuth\RegisterController@showRegistrationForm')->name('user.register');
Route::get('/user/publisher-register', 'UserAuth\RegisterController@showRegistrationFormPublisher')->name('user.publisher-register');
Route::post('/user/register', 'UserAuth\RegisterController@register')->name('user.data.register');


//use middleware as user
Route::group(['prefix'=>'front','as'=>'front.','namespace'=>'Front\\'],function (){

    //front user
    Route::get('/user/login',               ['as'=>'user.showLogin',        'uses'=>'FrontUserController@showLoginForm']);
    Route::post('/user/login',              ['as'=>'user.login',            'uses'=>'FrontUserController@login']);
    Route::get('/user/signup',              ['as'=>'user.signup',           'uses'=>'FrontUserController@signup']);

});


//post details
Route::get('/postdetail/{id}', 'Front\FrontUserController@postdetail')->name('postdetail.index');

//comnt reply store

Route::post('/comments/', 'Front\FrontUserController@commentReplyStore')->name('commentReplyStore.store');

//category pages
Route::get('/categorypage/{id}', 'Front\FrontUserController@categorydetail')->name('categorydetail.index');



//subcategory pages
Route::get('/subcategorypage/{id}', 'Front\FrontUserController@subcategorydetail')->name('subcategorydetail.index');


//comment
Route::post('/comments/{id}', 'Front\FrontUserController@store')->name('front.comment.store');

//Search
Route::get('/search', 'Front\FrontUserController@NewsSearch')->name('news_search.index');






// looking for admin
//**********************************************************//
//all is done down
Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'Admin\\','middleware'=>'auth'],function (){

    //Route::get('/home',        ['as'=>'home',         'uses'=>'DashBoardController@index']);
    Route::get('/dashboard',        ['as'=>'dashboard.index',         'uses'=>'DashBoardController@index']);

    //CATEGORY
    Route::get('/category/create',          ['as'=>'category.create',   'uses'=>'CategoryController@create']);
    Route::get('/category',                 ['as'=>'category.index',    'uses'=>'CategoryController@index']);
    Route::post('/category',                ['as'=>'category.store',    'uses'=>'CategoryController@store']);
    Route::delete('/category/{id}',         ['as'=>'category.delete',   'uses'=>'CategoryController@destroy']);
    Route::get('/category/{id}/edit',       ['as'=>'category.edit',     'uses'=>'CategoryController@edit']);
    Route::put('/category/{id}/',           ['as'=>'category.update',   'uses'=>'CategoryController@update']);


    //SUB-CATEGORY
    Route::get('/subcategory/create',          ['as'=>'subcategory.create',   'uses'=>'SubcategoryController@create']);
    Route::get('/subcategory',                 ['as'=>'subcategory.index',    'uses'=>'SubcategoryController@index']);
    Route::post('/subcategory',                ['as'=>'subcategory.store',    'uses'=>'SubcategoryController@store']);
    Route::delete('/subcategory/{id}',         ['as'=>'subcategory.delete',   'uses'=>'SubcategoryController@destroy']);
    Route::get('/subcategory/{id}/edit',       ['as'=>'subcategory.edit',     'uses'=>'SubcategoryController@edit']);
    Route::put('/subcategory/{id}/',           ['as'=>'subcategory.update',   'uses'=>'SubcategoryController@update']);

    //posts
    Route::get('/post/create',          ['as'=>'post.create',      'uses'=>'PostController@create']);
    Route::get('/post',                 ['as'=>'post.index',       'uses'=>'PostController@index']);

    Route::post('/post',                ['as'=>'post.store',       'uses'=>'PostController@store']);

    Route::delete('/post/{id}',         ['as'=>'post.delete',      'uses'=>'PostController@destroy']);
    Route::get('/post/{id}/edit',       ['as'=>'post.edit',        'uses'=>'PostController@edit']);
    Route::put('/post/{id}/',           ['as'=>'post.update',      'uses'=>'PostController@update']);

    Route::get('/post/{id}/show', ['as'=>'post.show',     'uses'=>'PostController@show']);


    Route::get('/post/{id}/sponsored',       ['as'=>'post.sponsor','uses'=>'PostController@sponsor']);
    Route::get('/post/{id}/sponsoredCancel',       ['as'=>'post.sponsorCancel','uses'=>'PostController@sponsorCancel']);

    //breaking news
    Route::get('/breakingnews/create',          ['as'=>'bnews.create',      'uses'=>'BnewsController@create']);
    Route::post('/breakingnews',                ['as'=>'bnews.store',       'uses'=>'BnewsController@store']);


    //admin-user
    Route::get('/user/create',          ['as'=>'user.create','uses'=>'UserController@create']);
    Route::post('/user/store',          ['as'=>'user.store','uses'=>'UserController@store']);
    Route::get('/user',                 ['as'=>'user.index','uses'=>'UserController@index']);

    Route::get('/user/{id}/edit',       ['as'=>'user.edit','uses'=>'UserController@edit']);
    Route::put('/user/{id}/',           ['as'=>'user.update','uses'=>'UserController@update']);

    //publisher
    Route::get('/publisher',                 ['as'=>'publisher.index','uses'=>'PublisherController@index']);
    Route::get('/publisher/{key}/verification',       ['as'=>'publisher.edit','uses'=>'PublisherController@edit']);

});
//*******************88admin done here


//for ajax
Route::post('/getSubcategories', 'Admin\SubCategoryController@getSubcat')->name('get.category');
Route::post('/publisher_getSubcategories', 'PublisherController@getSubcat')->name('get.category');

//about
Route::get('/about', 'Front\FrontUserController@about')->name('about.index');



//about poster details
Route::get('/about_uploader/{id}/', 'Front\FrontUserController@about_uploader')->name('about_uploader.index');


//contact us
Route::get('/contact', 'Front\FrontUserController@contact')->name('contact.index');

//march 7
Route::get('/redirection', 'RedirectionController@redirection')->name('redirection');//


//reset password for bublisher and visitor
//Routr::post('user-password/email','UserAuth/ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');



//today done
//verifyEmailFirst
Route::get('/verifyEmailFirst', 'UserAuth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('/verify/{email}/{verification_key}', 'UserAuth\RegisterController@sendEmailDone')->name('sendEmailDone');

//Route::get('/info',function(){
//   echo phpinfo();
//});