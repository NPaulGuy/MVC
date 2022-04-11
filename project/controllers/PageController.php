<?php
namespace Project\Controllers;
use Core\Controller;

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
}