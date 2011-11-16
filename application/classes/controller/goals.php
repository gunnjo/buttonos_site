<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Goals extends Controller_Global {

	public function action_index()
	{

		$this->page_title = 'ButtonOS Goals- ButtonOS Project by Curly Cloud';
		$this->body = View::factory('goals');

		$this->response->body(View::factory('template'));

	}

}
