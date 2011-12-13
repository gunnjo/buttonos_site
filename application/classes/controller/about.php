<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Controller_Global {

	public function action_index()
	{

		$this->page_title = 'About ButtonOS - ButtonOS Project by Curly Cloud';
		$this->body = View::factory('about');

	}

}
