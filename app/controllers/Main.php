<?php
//
// controllers\Main.php
// puella at mailplug.co.kr
// Date: 2018-11-21
//

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this->load->view('_header');
		$this->load->view('_navbar');
		$this->load->view('main');
	}
}
