<?php 
/*
* @file 	Index.php
* @desc 	Simple index file for bootstrap the framework	
* @author 	Magyar Gábor (magyar.gabor1@gmail.com)
*/
error_reporting(E_ALL);
require_once '../vendor/autoload.php';

$app = new Silex\Application();

include '../config.php';
include '../routes.php';

//If Reverse Proxy is neded (Should separate)
if ($app['reverse_proxy'] == true) {
	use Symfony\Component\HttpFoundation\Request;
	Request::setTrustedProxies(array($app['reverse_proxy_ip']))
}

$app->run();

 ?>