<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_App {

	public function action_index()
	{
		$this->template->content = View::factory('welcome/index');
	}

} // End Welcome
