<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Reserve extends Controller_Global {

	public function action_cd()
	{

		View::bind_global('thanks', $this->thanks);

		$this->page_title = 'Reserve ButtonOS CD - ButtonOS Project by Curly Cloud';
		$this->body = View::factory('reserve_cd');

	}

}
