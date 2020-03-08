<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SMS extends CI_Controller {
	public $api_username = "j6yl89";
	public $api_key = "ceabd0a34bde5902f2c8a2da";
	public $ch = '';

	public function __construct(){
		parent::__construct();
		$this->ch = curl_init();
	}
	public function index(){
		curl_setopt($this->ch, CURLOPT_URL, "https://gsm.zenziva.net/api/balance/?userkey=$this->api_username&passkey=$this->api_key");
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($this->ch);
		curl_close($this->ch);
		$output = json_decode($output);
		$data['credit'] = $output->credit;
		$data['expired'] = $output->expired;
		$data['contentload'] = 'index.php';
		$this->load->view('admin/index', $data);
	}

	public function balance(){
		curl_setopt($this->ch, CURLOPT_URL, "https://gsm.zenziva.net/api/balance/?userkey=$this->api_username&passkey=$this->api_key");
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($this->ch);
		curl_close($this->ch);
		$output = json_decode($output);
		$data['credit'] = $output->credit;
		$data['expired'] = $output->expired;
		$this->load->view('admin/index',$data);
	}
}
