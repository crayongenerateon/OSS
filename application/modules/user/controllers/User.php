<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if ($this->session->userdata('logged_admin') == NULL) {
            header("Location:" . site_url('user/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
        }
        $this->load->database();
        $this->load->model('model_user');
        $this->load->helper(['form', 'url']);
    }
 
	public function index()
	{
		//$this->load->helper('url');
		//$this->load->model('model_user');
		$data['user'] = $this->model_user->list_user()->result();
               
        //$config['total_rows'] = count($this->User_model->get());
        //pencarian
        $pencarian = $this->input->post('pencarian');
        $result = $this->model_user->cari_user($pencarian);
        $data['user'] = $result['hasil'];

		$data['main'] = 'user/view_user'; 
		$this->load->view('template/layout', $data);
	}


	public function Input()
	{
		//$this->load->helper('form');
		$data['type']= "Input";
		$data['main'] = 'user/form_user'; 
		$this->load->view('template/layout', $data);
	}

	public function add()
	{
		
		//$this->load->model('model_user');
		$create = array(
			'nama' 			=> $this->input->post('nama'),
			'username' 		=> $this->input->post('username'),
			'password' 		=> $this->input->post('password'),
			'email' 		=> $this->input->post('email'),
			'user_role' 	=> $this->input->post('user_role')
			);
		if ($this->input->post('simpan')=="Input") {
			$this->model_user->input($create);
		}else if ($this->input->post('simpan')=="Edit"){
			$id = $this->input->post('id');
			$this->model_user->edit($create, $id);
		}
		//$this->load->helper('url');
		redirect('user','refresh');
	}


	public function Edit(){
		$id = $this->input->get('user');
		$data['user'] = $this->model_user->getEdit($id);
		$data['type'] = "Edit";
		$data['main'] = 'user/form_user';
		$this->load->view('template/layout', $data);
	}	

	public function Delete(){
		$id = $this->input->get('user');
		$this->model_user->delete($id);
		redirect('user','refresh');
	}


}

/* End of file User.php */
/* Location: ./application/modules/admin/controllers/User.php */