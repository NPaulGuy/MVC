<?php
namespace Project\Controllers;
use \Core\Controller;
/**
 * [Description UserController]
 */
class UserController extends Controller
{
	private array $users = [
		1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
		2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
		3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
		4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
		5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
	];
	public function show(array $params) : string
	{
		$id = $params['id'];
		echo $this->users[$id]['name'];
		return "";
	}
	public function info(array $params) : string
	{
		$id = $params['id'];
		$field = $params['key'];
		echo $this->users[$id][$field];
		return "";
	}
	public function all() : string
	{
		foreach ($this->users as $user) {
			echo $user['name'] . "<br>";
		}
		return "";
	}
	public function first($params) : string
	{
		$count = $params['n'];
		for ($i = 1; $i <= $count; $i++) {
			echo $this->users[$i]['name'] . "<br>";
		}
		return "";
	}
}