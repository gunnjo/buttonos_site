<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Start extends Controller_Global {


	// TODO select template

	public function before()
	{
		//TODO select template
		$this->template = 'starttemplate';
		parent::before();
	}

	public function action_index()
	{

		$this->body = View::factory('start');
		$this->body->set(
			array(
				'page_title' => 'Welcome to ButtonOS - What Would You Like to Do?'
			)
		);

		//$this->response->body($this->body->render());

	}

}
