<?php 
/**
*	Framework's debug option
*	@usage true or false
*/
$app['debug'] = true;
/**
*	If your application is hosted behind a reverse proxy and
*	you want the framework to trust the X-Forwarded headers
*	it needs to be set TRUE
*	@usage true or false
*/
$app['reverse_proxy'] = false;
$app['reverse_proxy_ip'] = "";
 ?>