<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->ch = curl_init();
    $this->load->model('Kontakmodel');
	}

	public function index(){
    $kontak = $this->Kontakmodel->getlist();
		$data['contentload'] = 'kontak.php';
    $data['list'] = $kontak;
		$this->load->view('admin/index', $data);
	}

  public function add(){
		$data['contentload'] = 'tambah_kontak.php';
		$this->load->view('admin/index', $data);
	}
}
