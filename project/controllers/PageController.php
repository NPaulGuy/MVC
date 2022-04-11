<?php
namespace Project\Controllers;
use \Core\Controller;
/**
 * [Description PageController]
 */
class PageController extends Controller
{
	private array $pages;
	public function __construct() 
	{
		$this->pages = [
			1 => ['title'=>'страница 1', 'text'=>'текст страницы 1'],
			2 => ['title'=>'страница 2', 'text'=>'текст страницы 2'],
			3 => ['title'=>'страница 3', 'text'=>'текст страницы 3'],
		];
	}
	/**
	 * @return \Core\Page
	 */
	public function show($params) : \Core\Page
	{
		$num = $params['n'];
		$this->title = $this->pages[$num]['title'];
		return $this->render('page/show', [
			'text' => $this->pages[$num]['text'],
		]);
	}
  /**
	 * @return \Core\Page
	 */
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