<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');



		$this->load->view('header',["title"=>"Wellcome to first page"]);


		$data = [
			"title_h1"=>"Добро пожаловать на наш сайт",
			"lead_text"=>"Тут вы узнаете много нового про Bootstrap!",
			"button_left"=>[
				"value"=>"О Нас",
				"url"=>"about"
			],
			"button_right"=>[
				"value"=>"Контакты",
				"url"=>"contacts"
			],
			"cards" => [
				[
					"card_text" => "card",
					"text-muted" =>"text"
				],
				[
					"card_text" => "card",
					"text-muted" =>"text"
				],
				[
					"card_text" => "card",
					"text-muted" =>"text"
				],
				[
					"card_text" => "card",
					"text-muted" =>"text"
				],
				[
					"card_text" => "card",
					"text-muted" =>"text"
				],
				[
					"card_text" => "card",
					"text-muted" =>"text"
				]
			]
		];

		$this->load->view('frontpage',$data);
	}


	public function sayHello($name=NULL,$surname = NULL)
	{

		echo "Hello {$name} {$surname}!!!";
	}
	public function about(){
		echo "about";
	}
	public function contacts(){
		echo "contacts";
	}

}
