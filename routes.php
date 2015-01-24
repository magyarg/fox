<?php 
/**
*	Home page, returning the posts
*	@param 	$app(Instance), $dbh (source)
*	@return array
*/
$app->get('/home', function () use ($app) {
	$posts = Posts::all();

	return $app['twig']->render('home.twig', array(
		'posts' => $posts,
	));
})->bind('home');

/**
*	Welcome page
*	@param 	$app(Instance)
*	@return void
*/
$app->get('/', function () use ($app) {
	return $app['twig']->render('welcome.twig');
})->bind('welcome');

/**
*	Show page
*	@param 	$app(Instance), $dbh (source)
*	@return void
*/
$app->get('/page/{id}', function($id) use ($app)
{

});
 ?>