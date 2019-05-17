<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('monhoc');
	}

	public function viewLogin()
	{
		$this->load->view('login');
	}

	public function viewDanhmuclop()
	{
		$this->load->view('danhmuclop');
	}

	public function viewQuanlisinhvien()
	{
		$this->load->view('danhmucsinhvien');
	}

	public function viewQuanlidiemsinhvien()
	{
		$this->load->view('nhapdiem');
	}

	public function viewQuanlimonhoc()
	{
		$this->load->view('monhoc');
	}

	public function viewInDanhsachsinhvien()
	{
		$this->load->view('indanhsachsinhvien');
	}

	public function viewInBangdiemmonhoc()
	{
		$this->load->view('inbangdiemmonhoc');
	}

	public function viewInBangdiemsinhvien()
	{
		$this->load->view('inbangdiemsinhvien');
	}

	public function viewInBangdiemtongket()
	{
		$this->load->view('inbangdiemtongket');
	}

	public function checkLogin(){

		$account = isset($_POST['account']) ? $_POST['account'] : ''; 
		$password = isset($_POST['password']) ? $_POST['password'] : '';

		if($account == 'admin' && $password == 'admin'){
			$_SESSION['admin'] = $account;
		}else{
			redirect(base_url().'Welcome/viewLogin','refresh');
		}
	}
}
