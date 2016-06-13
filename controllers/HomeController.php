<?php

namespace Luba\Controllers;

class HomeController extends Controller
{
	protected static $actions = [
		'index'
	];

	public function index()
	{
		return view('home');
	}
}