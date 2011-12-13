<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Security extends Controller_Global {

	public function action_index()
	{

		$this->page_title = 'ButtonOS Security- ButtonOS Project by Curly Cloud';
		$this->body = View::factory('security');

	}

}
