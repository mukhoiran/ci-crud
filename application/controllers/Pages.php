<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

  public function view($content = 'test'){

    // File view not found
    if(!file_exists(APPPATH."views/pages/".$content.'.php')){
      show_404();
    }

    $data['title'] = $content;

    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$content);
    $this->load->view('templates/footer');

  }
}
