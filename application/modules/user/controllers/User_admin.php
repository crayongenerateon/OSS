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
class User_admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('logged_admin') == NULL) {
            header("Location:" . site_url('user/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
        }
        $this->load->model('User_model');
        $this->load->model('activity_log/Activity_log_model');
        $this->load->helper(array('form', 'url'));
    }

    // User_customer view in list
    public function index($offset = NULL) {

        $this->load->library('pagination');

        $data['user'] = $this->User_model->get(array('limit' => 100, 'offset' => $offset, 'status' => 0));
        $data['title'] = 'Pengguna';
        $data['main'] = 'user/user_list';
        $data['total'] = count($this->User_model->get());
        $config['per_page'] = 10;
        $config['base_url'] = site_url('user/user_admin/index');
        $config['total_rows'] = count($this->User_model->get());
        $this->pagination->initialize($config);

        $this->load->view('template/layout', $data);
    }

    public function cari(){
        //cari nrp
        if($this->input->post('pencarian')){
             $this->load->model('employe/Employe_model');
            $pencarian = $this->input->post('pencarian');
            $data['cari'] = $this->Employe_model->get(array('employe_nrp' => $pencarian));
            $data['operation'] = 'Tambah';
            $data['main'] = 'user/user_add';
            $this->load->view('template/layout', $data);
        }
        //ahir code cari nrp
    }

    // Add User_customer and Update
    public function add($id = NULL) {

        //cari berdasarkan nrp
        if($this->input->post('pencarian')){
             $this->load->model('employe/Employe_model');
            $pencarian = $this->input->post('pencarian');
            $data['cari'] = $this->Employe_model->get(array('employe_nrp' => $pencarian));
            $data['operation'] = 'Tambah';
            $data['main'] = 'user/user_add';
            $this->load->view('template/layout', $data);
        }//ahir code cari nrp

        $this->load->library('form_validation');

        if (!$this->input->post('user_id')) {
            $this->form_validation->set_rules('user_password', 'password', 'required|matches[passconf]|min_length[6]');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|min_length[6]|max_length[20]');
            $this->form_validation->set_rules('user_name', 'Username', 'required|is_unique[user.user_name]');
        }

        //$this->form_validation->set_rules('user_full_name', 'Name', 'required');
        $this->form_validation->set_rules('user_email', 'User Email', 'required|valid_email');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
        $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

        

        if ($_POST AND $this->form_validation->run() == TRUE) {

            if ($this->input->post('user_id')) {
                $params['user_id'] = $this->input->post('user_id');
            } else {
                $params['user_name'] = $this->input->post('user_name');
                $params['user_deleted'] = 0;
                $params['user_created_date'] = date('Y-m-d H:i:s');
                $params['user_password'] = sha1($this->input->post('user_password'));
                
            }
            $params['employe_id'] = $this->input->post('employe_id');
            /*$params['employe_nrp'] = $this->input->post('employe_nrp');
            $params['employe_name'] = $this->input->post('employe_name');
            $params['departement_name'] = $this->input->post('departement_name');*/

            $params['role_itservice'] = $this->input->post('role_itservice');
            $params['role_master'] = $this->input->post('role_master');
            $params['role_log'] = $this->input->post('role_log');
            
            $params['user_last_update'] = date('Y-m-d H:i:s');
            $params['user_email'] = $this->input->post('user_email');
            $status = $this->User_model->add($params);



            var_dump($status);

            // activity log
            $this->Activity_log_model->add(
                    array(
                        'log_date' => date('Y-m-d H:i:s'),
                        'user_id' => $this->session->userdata('user_id_admin'),
                        'log_module' => 'Pengguna',
                        'log_action' => $data['operation'],
                        'log_info' => 'ID:' . $status . ';Title:' . $this->input->post('user_name')
                    )
            );

            $this->session->set_flashdata('success', $data['operation'] . ' Pengguna berhasil');
            redirect('user/user_admin');
        } else {
            if ($this->input->post('user_id')) {
                redirect('user/user_add' . $this->input->post('user_id'));
            }

            // Edit mode
            if (!is_null($id)) {
                if ($this->User_model->get(array('id' => $id)) == NULL) {
                    redirect('user/user_admin');
                } else {
                    $data['user'] = $this->User_model->get(array('id' => $id));
                }
            }
            $data['role'] = $this->User_model->get_role();
            $data['button'] = ($id == $this->session->userdata('user_id_admin')) ? 'Ubah' : 'Reset';
            $data['title'] = $data['operation'] . ' Pengguna';
            $data['main'] = 'user/user_add';
            $this->load->view('template/layout', $data);
        }
    }

    function view($id = NULL) {
        if ($this->User_model->get(array('id' => $id)) == NULL) {
            redirect('user/user_admin');
        }
        $data['user'] = $this->User_model->get(array('id' => $id));
        $data['title'] = 'Detail pengguna';
        $data['main'] = 'user/user_view';
        $this->load->view('template/layout', $data);
    }

    function rpw($id = NULL) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_password', 'Password', 'required|matches[passconf]|min_length[6]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|min_length[6]');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
        if ($_POST AND $this->form_validation->run() == TRUE) {
            $id = $this->input->post('user_id');
            $params['user_password'] = sha1($this->input->post('user_password'));
            $status = $this->User_model->change_password($id, $params);

            // activity log
            $this->Activity_log_model->add(
                    array(
                        'log_date' => date('Y-m-d H:i:s'),
                        'user_id' => $this->session->userdata('user_id_admin'),
                        'log_module' => 'Pengguna',
                        'log_action' => 'Reset Password',
                        'log_info' => 'ID:null;Title:' . $this->input->post('user_name')
                    )
            );
            $this->session->set_flashdata('success', 'Reset password pengguna berhasil');
            redirect('user/user_admin');
        } else {
            if ($this->User_model->get(array('id' => $id)) == NULL) {
                redirect('user/user_admin');
            }
            $data['user'] = $this->User_model->get(array('id' => $id));
            $data['title'] = 'Ganti Password Pengguna';
            $data['main'] = 'user/change_pass';
            $this->load->view('template/layout', $data);
        }
    }

    // Delete User
    public function delete($id = NULL) {
        if ($_POST) {

            $this->User_model->delete($this->input->post('del_id'));
            // activity log
            $this->Activity_log_model->add(
                    array(
                        'log_date' => date('Y-m-d H:i:s'),
                        'user_id' => $this->session->userdata('user_id_admin'),
                        'log_module' => 'Pengguna',
                        'log_action' => 'Hapus',
                        'log_info' => 'ID:' . $this->input->post('del_id') . ';Title:' . $this->input->post('del_name')
                    )
            );
            $this->session->set_flashdata('success', 'Hapus pengguna berhasil');
            redirect('user/user_admin');
        } 
    }

}

/* End of file user.php */
/* Location: ./application/controllers/ccp/user.php */
