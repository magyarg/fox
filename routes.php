<?php 
/**
*	Home page, returning the posts
*	@param 	$app(Instance), $dbh (source)
*	@return array
*/
$app->get('/home', function () use ($app, $dbh) {
	
	$result = $dbh->query("SELECT * FROM posts");

	return $app['twig']->render('home.twig', array(
		'posts' => $result,
	));
	$dbh = null;
})->bind('home');

/**
*	Welcome page
*	@param 	$app(Instance)
*	@return void
*/
$app->get('/', function () use ($app) {
	return $app['twig']->render('welcome.twig');
})->bind('welcome');

 ?>