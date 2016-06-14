<?php

namespace Luba\Controllers;

use Luba\Framework\URL;

class HomeController extends Controller
{
	protected static $actions = [
		'index'
	];

	public function index()
	{
		return $this->view('home', ['variable' => 'BLABAB']);
	}
}