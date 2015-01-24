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
	$page = Pages::find($id);

	return $app['twig']->render('page.twig', array(
		'page' => $page,
	));
})->bind('page');

/**
*	Show post
*	@param 	$app(Instance), $id (int)
*	@return array
*/
$app->get('/post/{id}', function($id) use ($app)
{
	$post = Posts::find($id);

	return $app['twig']->render('post.twig', array(
		'post' => $post,
	));
})->bind('post');

 ?>