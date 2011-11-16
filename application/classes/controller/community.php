<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Community extends Controller_Global {

	public function action_index()
	{

		$this->page_title = 'ButtonOS Community - Source Code, Forums, Documentation, and More! - ButtonOS Project by Curly Cloud';
		$this->body = View::factory('community');

		$this->response->body(View::factory('template'));

	}

	public function action_contribute()
	{

		$this->page_title = 'Contribute to the ButtonOS Project - ButtonOS Project by Curly Cloud';
		$this->body = View::factory('contribute');

		$this->response->body(View::factory('template'));

	}

}