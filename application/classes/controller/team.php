<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Team extends Controller_Global {

	public function action_index()
	{

		$this->page_title = 'ButtonOS Team- ButtonOS Project by Curly Cloud';
		$this->body = View::factory('team');

	}

}
