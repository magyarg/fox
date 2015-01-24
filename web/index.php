<?php 
/*
* @file 	Index.php
* @desc 	Simple index file for bootstrap the framework	
* @author 	Magyar Gábor (magyar.gabor1@gmail.com)
*/
ini_set('display_errors', 'on');
require_once '../vendor/autoload.php';

/**
*	Model implementation
*	@usage   Do NOT edit this section, it affects to 
*	the anatomy of the framework!
*/
require '../models/Post.php';

/**
*	Database layer connection
*	@usage   Fill the conection credentials
*	@todo	 Will be separated into a standalone file
*/
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection(array(
	'driver' 	=> 'mysql',
	'host'	 	=> 'localhost',
	'database'	=> 'fox',
	'username'	=> 'root',
	'password'	=> 'root',
	'charset'	=> 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix'	=> ''
));
$capsule->bootEloquent();

/**
*	Silex init and callin config files and routes
*	@usage   Do NOT edit this section, it affects to 
*	the anatomy of the framework!
*/
$app = new Silex\Application();

/**
*	URL Generator init
*	@usage   Do NOT edit this section, it affects to 
*	the anatomy of the framework!
*/
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
/**
*	Twig init
*	@usage   Do NOT edit this section, it affects to 
*	the anatomy of the framework!
*/
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => '../views',
));

include '../config.php';
include '../routes.php';

$app->run();

 ?>