<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('news_model');
    $this->load->helper('url');
  }

	public function index()
	{
    $data['news'] = $this->news_model->get_news();
    $data['title'] = 'News archive';

		$this->load->view('news/index',$data);
	}
}
