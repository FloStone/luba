<?php

namespace Luba\Controllers;

use URL, Form, Input, Redirect, SQL, Session, Auth;

class HomeController extends Controller
{
	protected $actions = [
		'index'
	];

	public function index()
	{
		return $this->render('home');
	}
}