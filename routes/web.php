<?php
Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localize']
], 
function()
{
	//Pages
	Route::get('/', ['as' => 'pages.home', 'uses' => 'PagesController@home']);
	
	Route::get('about', ['as' => 'pages.about', 'uses' => 'PagesController@about']);
	Route::get('price', ['as' => 'pages.price', 'uses' => 'PagesController@price']);
	Route::get('contact', ['as' => 'pages.contact', 'uses' => 'PagesController@contact']);
	Route::get('selfless-coaching', ['as' => 'pages.selfless-coaching', 'uses' => 'PagesController@selflessCoaching']);
	// Activities
	Route::get('personal-coaching', ['as' => 'activities.personal-coaching', 'uses' => 'ActivitiesController@personalCoaching']);
	Route::get('guidance', ['as' => 'activities.guidance', 'uses' => 'ActivitiesController@guidance']);
	Route::get('group-trainings', ['as' => 'activities.group-trainings', 'uses' => 'ActivitiesController@groupTrainings']);
	// Topics
	Route::get('communication-techniques', ['as' => 'topics.communication-techniques', 'uses' => 'TopicsController@communicationTechniques']);
	Route::get('developing-competencies', ['as' => 'topics.developing-competencies', 'uses' => 'TopicsController@developingCompetencies']);
	Route::get('stress-sticking', ['as' => 'topics.stress-sticking', 'uses' => 'TopicsController@stressSticking']);
	Route::get('life-crises', ['as' => 'topics.life-crises', 'uses' => 'TopicsController@lifeCrises']);
	Route::get('reziliencia', ['as' => 'topics.resilience', 'uses' => 'TopicsController@resilience']);
	// Blog
	Route::get(LaravelLocalization::transRoute('routes.blog.all'), ['as' => 'blog.index', 'uses' => 'BlogsController@index']);
	Route::get(LaravelLocalization::transRoute('routes.blog.show'), ['as' => 'blog.show', 'uses' => 'BlogsController@show']);
	// Trainings
	Route::get('trainings', ['as'	=> 'trainings.index', 'uses'	=> 'TrainingsController@index']);
});
Auth::routes();

// Route::get('/home', 'HomeController@index');
