<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Start_Help extends Controller_Global {


	public function before()
	{
		//TODO select template
		$this->template = 'starttemplate';
		$this->uid = Boscookie::getnodeid();
		parent::before();
	}

	public function action_index()
	{

		$this->body = View::factory('help');
		$this->body->set(
			array(
				'page_title' => 'Welcome to ButtonOS - How can we help you?'
			)
		);


	}

}
