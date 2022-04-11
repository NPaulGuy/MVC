<?php
namespace Project\Controllers;
use Core\Controller;
use \Project\Models\Page;

class PageController extends Controller
{
	public function act() : \Core\Page
	{
		return $this->render('page/act', [
			'header' => 'переменные var и список юзеров',
			'users' => ['user1', 'user2', 'user3'],
			'var1' => 'first',
			'var2' => 'second',
			'var3' => 'third',
		]);
	}
	public function test() 
	{
		$page = new Page;
		$data = $page->getById(3);
		var_dump($data);
		echo "<br>";
		$data = $page->getById(5);
		var_dump($data);
		echo "<br>";
		$data = $page->getByRange(2, 5);
		var_dump($data);
		echo "<br>";
	}
}