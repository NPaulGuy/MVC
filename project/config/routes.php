<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'),
		new Route('/act1/', 'test', 'act1'),
		new Route('/act2/', 'test', 'act2'),
		new Route('/act3/', 'test', 'act3'),
	];
	
