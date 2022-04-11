<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'),
		new Route('/product/:n/', 'product', 'show'),
		new Route('/products/all/', 'product', 'all'),
	];
	
