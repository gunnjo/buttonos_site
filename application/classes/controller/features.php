<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Features extends Controller_Global {

	public function action_index()
	{

		$this->page_title = 'ButtonOS Features - ButtonOS Project by Curly Cloud';
		$this->body = View::factory('features');

		$this->response->body(View::factory('template'));

	}

}