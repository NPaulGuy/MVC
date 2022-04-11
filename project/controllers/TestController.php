<?php
namespace Project\Controllers;
use \Core\Controller;

class TestController extends Controller
{
	public function act1() : string
	{
		echo 1;
		return "";
	}
	public function act2() : string
	{
		echo 2;
		return "";
	}
	public function act3() : string
	{
		echo 3;
		return "";
	}
}