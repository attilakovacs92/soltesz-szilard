<?php
Route::get('sitemap.xml', 'SitemapsController@index');
Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localize']
], 
function()
{
	//Pages
	Route::get('/', ['as' => 'pages.home', 'uses' => 'PagesController@home']);
	
	Route::get(LaravelLocalization::transRoute('routes.about'), ['as' => 'pages.about', 'uses' => 'PagesController@about']);
	// Route::get('price', ['as' => 'pages.price', 'uses' => 'PagesController@price']);
	Route::get(LaravelLocalization::transRoute('routes.contact'), ['as' => 'pages.contact', 'uses' => 'PagesController@contact']);
	Route::get(LaravelLocalization::transRoute('routes.selfness-coaching'), ['as' => 'pages.selfless-coaching', 'uses' => 'PagesController@selflessCoaching']);
	Route::get('szervezet-es-munkalelektan', ['as' => 'pages.organization', 'uses' => 'PagesController@organization']);
	// Activities
	Route::get(LaravelLocalization::transRoute('routes.personal-coaching'), ['as' => 'activities.personal-coaching', 'uses' => 'ActivitiesController@personalCoaching']);
	Route::get(LaravelLocalization::transRoute('routes.guidance'), ['as' => 'activities.guidance', 'uses' => 'ActivitiesController@guidance']);
	Route::get(LaravelLocalization::transRoute('routes.group-trainings'), ['as' => 'activities.group-trainings', 'uses' => 'ActivitiesController@groupTrainings']);
	// Topics
	Route::get(LaravelLocalization::transRoute('routes.communication-techniques'), ['as' => 'topics.communication-techniques', 'uses' => 'TopicsController@communicationTechniques']);
	Route::get(LaravelLocalization::transRoute('routes.developing-competencies'), ['as' => 'topics.developing-competencies', 'uses' => 'TopicsController@developingCompetencies']);
	Route::get(LaravelLocalization::transRoute('routes.stress-sticking'), ['as' => 'topics.stress-sticking', 'uses' => 'TopicsController@stressSticking']);
	Route::get(LaravelLocalization::transRoute('routes.life-crises'), ['as' => 'topics.life-crises', 'uses' => 'TopicsController@lifeCrises']);
	Route::get(LaravelLocalization::transRoute('routes.reziliencia'), ['as' => 'topics.resilience', 'uses' => 'TopicsController@resilience']);
	// Blog
	Route::get(LaravelLocalization::transRoute('routes.blog.all'), ['as' => 'blog.index', 'uses' => 'BlogsController@index']);
	Route::get(LaravelLocalization::transRoute('routes.blog.show'), ['as' => 'blog.show', 'uses' => 'BlogsController@show']);
	// Trainings
	Route::get('esemenyek', ['as'	=> 'trainings.index', 'uses'	=> 'TrainingsController@index']);
	Route::get('esemenyek/{training}', ['as'	=> 'trainings.show', 'uses'	=> 'TrainingsController@show']);

    //Mail
	Route::post('tender', ['as'	=> 'mail.tender', 'uses' => 'MailController@sendTenderToSupport']);
	Route::post('contact', ['as'	=> 'mail.contact', 'uses' => 'MailController@sendMailToSupport']);
});
//Auth::routes();
Route::group(['middleware' => ['web']], function() {
// Login Routes...
    Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
    Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// Password Reset Routes...
    Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);
});

//Admin
Route::get('admin', [ 'as' => 'admin.index', 'uses' => 'HomeController@index']);
Route::resource('admin/olvasmanyok', 'Admin\BlogsController');
Route::resource('admin/esemenyek', 'Admin\TrainingsController');
Route::resource('admin/jelentkezok', 'Admin\ApplicantsController');

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
// Ignores notices and reports all other kinds... and warnings
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
// error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}
