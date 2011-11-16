<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Download extends Controller_Global {

	public function action_index()
	{

		$this->page_title = 'Download ButtonOS - ButtonOS Project by Curly Cloud';
		$this->body = View::factory('download');

		$this->response->body(View::factory('template'));

	}

}