<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
        parent::__construct();
        if ($this->session->userdata('logged_admin') == NULL) {
            header("Location:" . site_url('user/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
		}
    }

	public function index()
	{
		$this->load->database();
		$jumlah = $this->db->get("user where user_deleted = '0'")->num_rows();
		$data['user'] = $jumlah;
		$data['main'] = 'welcome_message'; 
		$this->load->view('template/layout', $data);
	}

	// isi bca.php
	public function birate()
	{
		function fungsiCurl($url)
		{
			$data1 = curl_init();
			curl_setopt($data1, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($data1, CURLOPT_URL, $url);
			curl_setopt($data1, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
			$hasil = curl_exec($data1);
			curl_close($data1);
			return $hasil;
			
		}
		$url = fungsiCurl('http://www.bca.co.id/Individu/Sarana/Kurs-dan-Suku-Bunga/Kurs-dan-Kalkulator');
		$data['url'] = 'bi_rate';
		$data['main'] = 'bi_rate';
		$this->load->view('template/layout', $data);
	}
}
