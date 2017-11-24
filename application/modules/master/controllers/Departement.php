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
class Departement extends CI_Controller {

    public function __construct() {
        parent::__construct(TRUE);
        if ($this->session->userdata('logged_admin') == NULL) {
            header("Location:" . site_url('user/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
        }
        $this->load->model(array('Departement_model', 'activity_log/Activity_log_model'));
    }

    // Posting view in list
    public function index($offset = NULL) {
        $this->load->library('pagination');
        $data['departement'] = $this->Departement_model->get(array('limit' => 10, 'offset' => $offset));
        $data['main'] = 'master/departement/departement_list';
        $config['total_rows'] = $this->db->count_all('departement');
        $this->pagination->initialize($config);

        $data['title'] = 'Departement';
        $this->load->view('template/layout', $data);
    }

    

    // Add Posting and Update
    public function add($id = NULL) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('departement_name', 'Name ', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
        $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

        if ($_POST AND $this->form_validation->run() == TRUE) {
            
            $params['departement_id'] = $this->input->post('departement_id');
            
            $params['user_id'] = $this->session->userdata('user_id_admin');
            $params['departement_name'] = $this->input->post('departement_name');
            $status = $this->Departement_model->add($params);


            // activity log
            $this->Activity_log_model->add(
                    array(
                        'log_date' => date('Y-m-d H:i:s'),
                        'user_id' => $this->session->userdata('user_id_admin'),
                        'log_module' => 'departement',
                        'log_action' => $data['operation'],
                        'log_info' => 'ID:'.$status.';Title:' . $params['departement_name']
                    )
            );

            $this->session->set_flashdata('success', $data['operation'] . ' Departement berhasil');
            redirect('master/departement');
        } else {
            if ($this->input->post('departement_id')) {
                redirect('master/departement/departement_add' . $this->input->post('departement_id'));
            }

            // Edit mode
            if (!is_null($id)) {
                $data['departement'] = $this->Departement_model->get(array('id' => $id));
            }
            $data['title'] = $data['operation'] . ' Posting';
            $data['main'] = 'master/departement/departement_add';
            $this->load->view('template/layout', $data);
        }
    }

    // Delete Posting
    public function delete($id = NULL) {
        if ($_POST) {
            $this->Departement_model->delete($this->input->post('del_id'));
            // activity log
            $this->Activity_log_model->add(
                    array(
                        'log_date' => date('Y-m-d H:i:s'),
                        'user_id' => $this->session->userdata('user_id_admin'),
                        'log_module' => 'Departement',
                        'log_action' => 'Hapus',
                        'log_info' => 'ID:' . $this->input->post('del_id') . ';Title:' . $this->input->post('del_name')
                    )
            );
            $this->session->set_flashdata('success', 'Hapus departement berhasil');
            redirect('master/departement');
        } elseif (!$_POST) {
            $this->session->set_flashdata('delete', 'delete');
            redirect('master/departement/add/' . $id);
        }
    }

}

/* End of file brand.php */
/* Location: ./application/controllers/gadmin/brand.php */
