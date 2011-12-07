<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Start extends Controller_Global {


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
				'page_title' => 'Welcome to ButtonOS - What Would You Like to Do?',
				'control_page' => '#',
				'buttons' =>
                    array(
                        1=> array(
                            'href' => 'http://www.gmail.com',
                            'img' => '/media/start/img/icons/gmail.png',
                            'header' => 'Check My Email',
                            'description' => 'with Gmail',
                            'type' => 'external',
                            'id' => NULL
                        ),
                        2=> array(
                            'href' => "http://www.google.com/docs",
                            'img' => "/media/start/img/icons/google.png",
                            'header' => 'Write Something',
                            'description' => 'with Google Docs',
                            'type' => 'external',
                            'id' => NULL
                        ),
                        3=> array(
                            'href' => "http://www.wikipedia.org",
                            'img' => "/media/start/img/icons/wikipedia.png",
                            'header' => 'Do Some Research',
                            'description' => 'on Wikipedia',
                            'type' => 'external',
                            'id' => NULL
                        ),
                        4=> array(
                            'href' => "http://www.facebook.com",
                            'img' => "/media/start/img/icons/facebook.png",
                            'header' => 'Find My Friends',
                            'description' => 'on Facebook',
                            'type' => 'external',
                            'id' => NULL
                        ),
                        5=> array(
                            'href' => "http://www.youtube.com",
                            'img' => "/media/start/img/icons/youtube.png",
                            'header' => 'Watch a Video',
                            'description' => 'on YouTube',
                            'type' => 'external',
                            'id' => NULL
                        ),
                        6=> array(
                            'href' => "http://www.amazon.com",
                            'img' => "/media/start/img/icons/amazon.png",
                            'header' => 'Go Shopping',
                            'description' => 'on Amazon',
                            'type' => 'external',
                            'id' => NULL
                        ),
                        7=> array(
                            'href' => "#skype",
                            'img' => "/media/start/img/icons/skype.png",
                            'header' => 'Video Chat',
                            'description' => 'with Skype',
                            'type' => 'external',
                            'id' => 'skype_link'
                        ),
                        8=> array(
                            'href' => "http://www.espn.com",
                            'img' => "/media/start/img/icons/espn.png",
                            'header' => 'Read Sports News',
                            'description' => 'on ESPN',
                            'type' => 'external',
                            'id' => NULL
                        ),
                        9=> array(
                            'href' => "http://www.google.com/finance",
                            'img' => "/media/start/img/icons/google.png",
                            'header' => 'Check My Stocks',
                            'description' => 'with Google Finance',
                            'type' => 'external',
                            'id' => NULL
                        )
                    )
			)
		);

		//$this->response->body($this->body->render());

	}

}
