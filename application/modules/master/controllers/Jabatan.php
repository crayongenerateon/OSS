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
class Jabatan extends CI_Controller {

    public function __construct() {
        parent::__construct(TRUE);
        if ($this->session->userdata('logged_admin') == NULL) {
            header("Location:" . site_url('user/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
        }
        $this->load->model(array('Jabatan_model', 'activity_log/Activity_log_model'));
    }

    // Posting view in list
    public function index($offset = NULL) {
        $this->load->library('pagination');
        $data['jabatan'] = $this->Jabatan_model->get(array('limit' => 10, 'offset' => $offset));
        $data['main'] = 'master/jabatan/jabatan_list';
        $config['total_rows'] = $this->db->count_all('jabatan');
        $this->pagination->initialize($config);

        $data['title'] = 'Jabatan';
        $this->load->view('template/layout', $data);
    }

    

    // Add Posting and Update
    public function add($id = NULL) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('jabatan_code', 'Kode ', 'required');
        $this->form_validation->set_rules('jabatan_name', 'Name ', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
        $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

        if ($_POST AND $this->form_validation->run() == TRUE) {
            
            $params['jabatan_id'] = $this->input->post('jabatan_id');
            $params['jabatan_code'] = $this->input->post('jabatan_code');
            $params['user_id'] = $this->session->userdata('user_id_admin');
            $params['jabatan_name'] = $this->input->post('jabatan_name');
            $status = $this->Jabatan_model->add($params);


            // activity log
            $this->Activity_log_model->add(
                    array(
                        'log_date' => date('Y-m-d H:i:s'),
                        'user_id' => $this->session->userdata('user_id_admin'),
                        'log_module' => 'jabatan',
                        'log_action' => $data['operation'],
                        'log_info' => 'ID:'.$status.';Title:' . $params['jabatan_name']
                    )
            );

            $this->session->set_flashdata('success', $data['operation'] . ' jabatan berhasil');
            redirect('master/jabatan');
        } else {
            if ($this->input->post('jabatan_id')) {
                redirect('master/jabatan/jabatan_add' . $this->input->post('jabatan_id'));
            }

            // Edit mode
            if (!is_null($id)) {
                $data['jabatan'] = $this->Jabatan_model->get(array('id' => $id));
            }
            $data['title'] = $data['operation'] . ' Posting';
            $data['main'] = 'master/jabatan/jabatan_add';
            $this->load->view('template/layout', $data);
        }
    }

    // Delete Posting
    public function delete($id = NULL) {
        if ($_POST) {
            $this->Jabatan_model->delete($this->input->post('del_id'));
            // activity log
            $this->Activity_log_model->add(
                    array(
                        'log_date' => date('Y-m-d H:i:s'),
                        'user_id' => $this->session->userdata('user_id_admin'),
                        'log_module' => 'jabatan',
                        'log_action' => 'Hapus',
                        'log_info' => 'ID:' . $this->input->post('del_id') . ';Title:' . $this->input->post('del_name')
                    )
            );
            $this->session->set_flashdata('success', 'Hapus jabatan berhasil');
            redirect('master/jabatan');
        } elseif (!$_POST) {
            $this->session->set_flashdata('delete', 'delete');
            redirect('master/jabatan/add/' . $id);
        }
    }

}

/* End of file brand.php */
/* Location: ./application/controllers/gadmin/brand.php */
