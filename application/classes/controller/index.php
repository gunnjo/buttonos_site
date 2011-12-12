<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Global {

	public function action_index()
	{

		$this->page_title = 'Chrome OS Alternative - Live CD Web Browser - ButtonOS by Curly Cloud';
		$this->body = View::factory('index');


	}

}
