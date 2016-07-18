<?php

namespace Luba\Controllers;

use Luba\Framework\URL;
use Luba\Form\Form;
use Luba\Framework\Input;

class HomeController extends Controller
{
	protected static $actions = [
		'index'
	];

	public function index()
	{			
		return $this->render('home');
	}
}