<?php
/**
 * Сделайте контроллер NumController, а в нем - действие sum. Пусть это действие обрабатывает адреса следующего вида: /nums/:n1/:n2/:n3/, где параметрами будут некоторые числа. Сделайте так, чтобы на экран выводилась сумма переданных чисел.
 * Реализуйте контроллер UserController, содержащий следующий массив:
 * [
 *		1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
 *		2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
 *		3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
 *		4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
 *		5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
 *	];
 * В контроллере UserController, сделайте действие show, которое будет выводить юзера по определенному id. Пусть оно будет доступно по адресу следующего вида: /user/:id/.
 * В контроллере UserController, сделайте действие info, которое будет выводить имя или возраст заданного юзера. Пусть это действие будет доступно по адресу следующего вида: /user/:id/:key/, где key будет иметь значение 'name', 'age' или 'salary'.
 * В контроллере UserController, сделайте действие all, которое будет выводить список всех юзеров на экран. Пусть это действие будет доступно по адресу следующего вида: /user/all/ (параметров тут никаких не будет).
 * В контроллере UserController, сделайте действие first, которое будет выводить список N первых юзеров на экран. Пусть это действие будет доступно по адресу следующего вида: /user/first/:n/, где в параметре будет количество юзеров, которые следует вывести на экран.
 */
namespace Core;
error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once $_SERVER['DOCUMENT_ROOT'] . '/project/config/connection.php';

spl_autoload_register(function($class) {
	preg_match('#(.+)\\\\(.+?)$#', $class, $match);
	
	$nameSpace = str_replace('\\', DIRECTORY_SEPARATOR, strtolower($match[1]));
	$className = $match[2];
	
	$path = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . $nameSpace . DIRECTORY_SEPARATOR . $className . '.php';
	
	if (file_exists($path)) {
		require_once $path;
		
		if (class_exists($class, false)) {
			return true;
		} else {
			throw new \Exception("Класс $class не найден в файле $path. Проверьте правильность написания имени класса внутри указанного файла.");
		}
	} else {
		throw new \Exception("Для класса $class не найден файл $path. Проверьте наличие файла по указанному пути. Убедитесь, что пространство имен вашего класса совпадает с тем, которое пытается найти фреймворк для данного класса. Например, вы создаете класса модели, но забыли заюзать ее через use. В этом случае вы пытаетесь вызвать класс модели в пространстве имен контроллера, а такого файла нет.");
	}
});

$routes = require $_SERVER['DOCUMENT_ROOT'] . '/project/config/routes.php';

$track = ( new Router )      -> getTrack($routes, $_SERVER['REQUEST_URI']);
$page  = ( new Dispatcher )  -> getPage($track);

echo (new View) -> render($page);
