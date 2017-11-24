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
class Itservice extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('logged_admin') == NULL) {
            header("Location:" . site_url('user/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
        }
        $this->load->model('Itservice_model');
        $this->load->model('employe/Employe_model');
        $this->load->model('master/Departement_model');
        $this->load->model('activity_log/Activity_log_model');
        $this->load->helper(array('form', 'url'));
    }

    // itservice_customer view in list
    public function index($offset = NULL) {

        $this->load->library('pagination');

        $data['itservice'] = $this->Itservice_model->get(array('limit' => 10, 'offset' => $offset));
        $data['title'] = 'IT service';
        $data['main'] = 'itservice/itservice_list';
        $config['per_page'] = 10;
        $config['base_url'] = site_url('itservice/itservice/index');
        $config['total_rows'] = count($this->Itservice_model->get());
        $this->pagination->initialize($config);

        $this->load->view('template/layout', $data);
    }

    // Add itservice_customer and Update
    public function add($id = NULL) {
        $this->load->library('form_validation');

        

        $this->form_validation->set_rules('itservice_issue', 'Masukan Keluhan Anda', 'required');    
        $this->form_validation->set_rules('itservice_categories_id', 'Category', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
        $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

        if ($_POST AND $this->form_validation->run() == TRUE) {

            if ($this->input->post('itservice_id')) {
                $params['itservice_id'] = $this->input->post('itservice_id');
            }else{
                $params['itservice_date_create'] = date('Y-m-d H:i:s');
                $params['itservice_status_id'] = 1;
            }

            $params['itservice_issue'] = $this->input->post('itservice_issue');
            $params['itservice_solution'] = $this->input->post('itservice_solution');
            
            if ($this->input->post('itservice_status') == 4){
                $params['itservice_date_end'] = date('Y-m-d H:i:s');
            }
            

            $params['itservice_categories_id'] = $this->input->post('itservice_categories_id');
            $params['employe_employe_id'] = $this->session->userdata('employe_id_admin');
            
            $status = $this->Itservice_model->add($params);

            $this->upload_image($status);

            // activity log
            $this->Activity_log_model->add(
                    array(
                        'log_date' => date('Y-m-d H:i:s'),
                        'user_id' => $this->session->userdata('user_id_admin'),
                        'log_module' => 'Pengguna',
                        'log_action' => $data['operation'],
                        'log_info' => 'ID:' . $status . ';Title:' . $this->input->post('itservice_issue')
                    )
            );

            $this->session->set_flashdata('success', $data['operation'] . ' Pengguna berhasil');
            redirect('itservice/add');
        } else {
            // Edit mode
            if (!is_null($id)) {
                $data['itservice'] = $this->Itservice_model->get(array('id' => $id));
                if (count($data['itservice']) == 0) {
                    redirect('itservice/itservice_add');
                }

                $data['image'] = $this->Itservice_model->get_image(array('itservice_id' => $id));
            }

            if ($this->input->post('itservice_id')) {
                redirect('itservice/itservice_add' . $this->input->post('itservice_id'));
            }

            
            /*if (!is_null($id)) {
                if ($this->Itservice_model->get(array('id' => $id)) == NULL) {
                    redirect('itservice');
                } else {
                    $data['itservice'] = $this->Itservice_model->get(array('id' => $id));
                }
            }*/
            $data['itservice_status'] = $this->Itservice_model->get_status();
            $data['Itservice_category'] = $this->Itservice_model->get_category();
            $data['employe'] = $this->Employe_model->get();
            $data['departement'] = $this->Departement_model->get();

            $data['title'] = $data['operation'] . ' IT Service';
            $data['main'] = 'itservice/itservice_add';
            $this->load->view('template/layout', $data);
        }
    }

    private function upload_image($id = null)
    {
        if (is_null($id)) {
            return false;
        }


        $config['upload_path'] = './uploads/itservice';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|JPG';
        
        $this->load->library('upload', $config);

        $files = $_FILES['itserviceImage'];

        $no = 0;

        $files = $_FILES['itserviceImage'];
        $cpt = count($_FILES['itserviceImage']['name']);
        
        for ($i = 0; $i < $cpt; $i++) {

            $_FILES['itserviceImage']['name'] = $files['name'][$i];
            $_FILES['itserviceImage']['type'] = $files['type'][$i];
            $_FILES['itserviceImage']['tmp_name'] = $files['tmp_name'][$i];
            $_FILES['itserviceImage']['error'] = $files['error'][$i];
            $_FILES['itserviceImage']['size'] = $files['size'][$i];

            $this->upload->do_upload('itserviceImage');

            $data = $this->upload->data();

            $input['name'] = $data['file_name'];
            $input['itservice_id'] = $id;

            if ($i == 0) {
                $cover['itservice_id'] = $id;
                $cover['itservice_image'] =  base_url('uploads').'/'.('itservice').'/'  . $input['name'];
                $this->Itservice_model->add($cover);
            }

            $error = $this->upload->display_errors();

            $this->Itservice_model->add_itservice_image($input);
        }
        
        return true;
    }

    function view($id = NULL) {
        /*if ($this->Itservice_model->get(array('id' => $id)) == NULL) {
            redirect('itservice');
        }
        $data['itservice'] = $this->Itservice_model->get(array('id' => $id));
        $data['title'] = 'Detail pengguna';
        $data['main'] = 'itservice/itservice_view';
        $this->load->view('template/layout', $data);*/
        //dari sini
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        
        if ($this->Itservice_model->get(array('id' => $id)) == NULL) {
            redirect('itservice');
        }

        $data['itservice'] = $this->Itservice_model->get(array('id' => $id));
        
        if (count($data['itservice']) == 0) {
            redirect('itservice');
        }
        
        $data['image'] = $this->Itservice_model->get_image(array('itservice_id' => $id));
        $data['title'] = 'Detail Issue';
        $data['main'] = 'itservice/itservice_view';
        $this->load->view('template/layout', $data);
    }


    // Delete itservice
    public function delete($id = NULL) {
        if ($this->Itservice_model->get(array('id' => $id)) == NULL) {
            redirect('itservice');
        }
        if ($_POST) {

            $this->Itservice_model->delete($this->input->post('del_id'));
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
            redirect('itservice');
        } elseif (!$_POST) {
            $this->session->set_flashdata('delete', 'Delete');
            redirect('itservice/edd/' . $id);
        }
    }

}

/* End of file itservice.php */
/* Location: ./application/controllers/ccp/itservice.php */
