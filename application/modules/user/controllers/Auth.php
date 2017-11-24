<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Posting controllers class
 *
 * @package     CG
 * @subpackage  Controllers
 * @category    Controllers
 * @author      Supriadi <adi@rumahcg.com>
 */
class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->helper('string');
        $this->load->helper('url');
    }

    function index() {
        redirect('user/auth/login');
    }

    function error() {
        //$this->load->view('user/error');
        $data['main'] = 'user/error';
        $this->load->view('template/layout', $data);
    }

    function login() {
        if ($this->session->userdata('logged_admin')) {
            //$this->load->view('welcome');
            redirect('/');
        }
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($_POST AND $this->form_validation->run() == TRUE) {
            if ($this->input->post('location')) {
                $lokasi = $this->input->post('location');
            } else {
                $lokasi = NULL;
            }
            $this->process_login($lokasi);
        } else {
            $this->load->view('user/login');
        }
    }

    // Login Prosessing
    function process_login($lokasi = '') {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);
            $this->db->from('user');
            $this->db->where('user_name', $username);
            $this->db->where('user_password', sha1($password));
            //$this->db->where('status', 0);
            
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                if ($query->row('user_deleted') == 0) {
                    $this->session->set_userdata('logged_admin', TRUE);
                    $this->session->set_userdata('user_id_admin', $query->row('user_id'));
                    $this->session->set_userdata('user_name_admin', $query->row('user_name'));
                    $this->session->set_userdata('user_email_admin', $query->row('user_email'));
                    $this->session->set_userdata('employe_id_admin', $query->row('employe_id'));
                    if ($query->row('user_id')){
                    $this->db->from('user_role');
                    $this->db->where('user_id', $query->row('user_id'));
                    $query = $this->db->get();

                    $this->session->set_userdata('role_itservice', $query->row('role_itservice'));
                    $this->session->set_userdata('role_master', $query->row('role_master'));
                    $this->session->set_userdata('role_log', $query->row('role_log'));
                    $this->session->set_userdata('role_useradmin', $query->row('role_useradmin'));
                    $this->session->set_userdata('role_iventoryit', $query->row('role_iventoryit'));
                    $this->session->set_userdata('role_employe', $query->row('role_employe'));
                    }
                    
                    if($this->session->userdata('user_id_admin')){

                    $this->db->from('employe');
                    $this->db->where('employe_id', $this->session->userdata('employe_id_admin'));
                    $query = $this->db->get();
                    
                    $this->session->set_userdata('user_full_name_admin', $query->row('employe_name'));
                    $this->session->set_userdata('user_nrp_admin', $query->row('employe_nrp'));
                    $this->session->set_userdata('user_images_admin', $query->row('employe_images'));
                    $this->session->set_userdata('employe_start_work_date_admin', pretty_date($query->row('employe_start_work_date'), 'd-m-Y', FALSE));
                    
                    $this->db->from('departement');
                    $this->db->where('departement_id', $query->row('departement_departement_id'));
                    $query = $this->db->get();
                    
                    $this->session->set_userdata('user_departement_admin', $query->row('departement_name'));

                    }
                    
                    
                    
                    
                    if ($lokasi != '') {
                        header("Location:" . htmlspecialchars($lokasi));
                    } else {
                        //$this->load->view('welcome');
                        redirect('/');
                    }
                } else {

                     if ($lokasi != '') {
                        $this->session->set_flashdata('failed', 'Username '. $query->row('user_name').' are not active');
                        header("Location:" . site_url('user/auth/login') . "?location=" . urlencode($lokasi));
                    } else {
                        $this->session->set_flashdata('failed', 'Username '. $query->row('user_name').' are not active');
                        redirect('user/auth/login');
                    }
                }
            } else {
                if ($lokasi != '') {
                    $this->session->set_flashdata('failed', 'Sorry, username and password do not match');
                    header("Location:" . site_url('user/auth/login') . "?location=" . urlencode($lokasi));
                } else {
                    $this->session->set_flashdata('failed', 'Sorry, username and password do not match');
                    redirect('user/auth/login');
                }
            }
        } else {
            $this->session->set_flashdata('failed', 'Maaf, Username dan password belum lengkap!');
            redirect('user/auth/login');
        }
    }

    // Logout Processing
    function logout() {
        $this->session->unset_userdata('logged_admin');
        $this->session->unset_userdata('user_id_admin');
        $this->session->unset_userdata('user_name_admin');
        $this->session->unset_userdata('employe_id_admin');
        $this->session->unset_userdata('role_itservice');
        $this->session->unset_userdata('role_master');
        $this->session->unset_userdata('role_log');
        $this->session->unset_userdata('role_useradmin');
        $this->session->unset_userdata('role_iventoryit');
        $this->session->unset_userdata('role_employe');
        $this->session->unset_userdata('user_email_admin');
        $this->session->unset_userdata('user_full_name_admin');
        $this->session->unset_userdata('user_nrp_admin');
        $this->session->unset_userdata('employe_start_work_date_admin');
        $this->session->unset_userdata('user_departement_admin');
        $this->session->unset_userdata('user_images_admin');
        if ($this->input->post('location')) {
            $lokasi = $this->input->post('location');
        } else {
            $lokasi = NULL;
        }
        header("Location:" . $lokasi);
    }

}
