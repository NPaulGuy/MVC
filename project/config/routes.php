<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'),
		new Route('/nums/:n1/:n2/:n3/', 'num', 'sum'),
		new Route('/user/:id/', 'user', 'show'),
		new Route('/user/:id/:key/', 'user', 'info'),
		new Route('/user/all', 'user', 'all'),
		new Route('/user/first/:n', 'user', 'first'),
	];
	
