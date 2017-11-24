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
class Employe extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('logged_admin') == NULL) {
            header("Location:" . site_url('user/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
        }
        $this->load->model('Employe_model');
        $this->load->model('master/Kelamin_model');
        $this->load->model('master/Religion_model');
        $this->load->model('master/Division_model');
        $this->load->model('master/Departement_model');
        $this->load->model('master/Jabatan_model');
        $this->load->model('master/Pendidikan_model');
        $this->load->model('master/Status_model');
        $this->load->model('master/Kawin_model');
        $this->load->model('activity_log/Activity_log_model');
        $this->load->helper(array('form', 'url'));
    }

    // employe_customer view in list
    public function index($offset = NULL) {

        $this->load->library('pagination');

        $data['employe'] = $this->Employe_model->get(array('limit' => 10, 'offset' => $offset));
        $data['title'] = 'employe';
        $data['main'] = 'employe/employe_list';
        $config['per_page'] = 10;
        $config['base_url'] = site_url('employe/employe/index');
        $config['total_rows'] = count($this->Employe_model->get());
        $this->pagination->initialize($config);

        $this->load->view('template/layout', $data);
    }

    // Add employe_customer and Update
    public function add($id = NULL) {
        $this->load->library('form_validation');

        

        $this->form_validation->set_rules('employe_name', 'Name', 'required');
        $this->form_validation->set_rules('employe_email', 'employe Email', 'required|valid_email');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
        $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

        if ($_POST AND $this->form_validation->run() == TRUE) {

            if ($this->input->post('employe_id')) {
                $params['employe_id'] = $this->input->post('employe_id');
            }

            
            $params['employe_nrp'] = $this->input->post('employe_nrp');
            $params['employe_name'] = $this->input->post('employe_name');
            $params['employe_born_date'] = $this->input->post('employe_born_date');
            $params['employe_born_place'] = $this->input->post('employe_born_place');
            $params['employe_citizen'] = $this->input->post('employe_citizen');
            $params['employe_address'] = $this->input->post('employe_address');
            $params['employe_address2'] = $this->input->post('employe_address2');
            $params['employe_city'] = $this->input->post('employe_city');
            $params['employe_ns'] = $this->input->post('employe_ns');
            $params['employe_superior'] = $this->input->post('employe_superior');
            $params['employe_postal_code'] = $this->input->post('employe_postal_code');
            $params['employe_start_work_date'] = $this->input->post('employe_start_work_date');
            $params['employe_permanent_date'] = $this->input->post('employe_permanent_date');
            $params['employe_phone'] = $this->input->post('employe_phone');
            $params['employe_email'] = $this->input->post('employe_email');
            $params['employe_update'] = date('Y-m-d H:i:s');

            $params['kelamin_kelamin_id'] = $this->input->post('kelamin_kelamin_id');
            $params['religion_religion_id'] = $this->input->post('religion_religion_id');
            $params['division_division_id'] = $this->input->post('division_division_id');
            $params['departement_departement_id'] = $this->input->post('departement_departement_id');
            $params['jabatan_jabatan_id'] = $this->input->post('jabatan_jabatan_id');
            $params['pendidikan_pendidikan_id'] = $this->input->post('pendidikan_pendidikan_id');
            $params['status_status_id'] = $this->input->post('status_status_id');
            $params['kawin_kawin_id'] = $this->input->post('kawin_kawin_id');
            $status = $this->Employe_model->add($params);

            //add image
            $this->upload_image($status);

            // activity log
            $this->Activity_log_model->add(
                    array(
                        'log_date' => date('Y-m-d H:i:s'),
                        'user_id' => $this->session->userdata('user_id_admin'),
                        'log_module' => 'Pengguna',
                        'log_action' => $data['operation'],
                        'log_info' => 'ID:' . $status . ';Title:' . $this->input->post('employe_name')
                    )
            );

            $this->session->set_flashdata('success', $data['operation'] . ' Pengguna berhasil');
            redirect('employe');
        } else {
            if ($this->input->post('employe_id')) {
                redirect('employe/employe_add' . $this->input->post('employe_id'));
            }

            // Edit mode
            if (!is_null($id)) {
                if ($this->Employe_model->get(array('id' => $id)) == NULL) {
                    redirect('employe');
                } else {
                    $data['employe'] = $this->Employe_model->get(array('id' => $id));
                }
            }
            $data['image'] = $this->Employe_model->get_image(array('employe_id' => $id));
            $data['kelamin'] = $this->Kelamin_model->get();
            $data['religion'] = $this->Religion_model->get();
            $data['division'] = $this->Division_model->get();
            $data['departement'] = $this->Departement_model->get();
            $data['jabatan'] = $this->Jabatan_model->get();
            $data['pendidikan'] = $this->Pendidikan_model->get();
            $data['status'] = $this->Status_model->get();
            $data['kawin'] = $this->Kawin_model->get();

            $data['title'] = $data['operation'] . ' Pengguna';
            $data['main'] = 'employe/employe_add';
            $this->load->view('template/layout', $data);
        }
    }

    private function upload_image($id = null)
    {
        if (is_null($id)) {
            return false;
        }


        $config['upload_path'] = './uploads/employe';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|JPG';
        
        $this->load->library('upload', $config);

        $files = $_FILES['employeImage'];

        $no = 0;

        $files = $_FILES['employeImage'];
        $cpt = count($_FILES['employeImage']['name']);
        
        for ($i = 0; $i < $cpt; $i++) {

            $_FILES['employeImage']['name'] = $files['name'][$i];
            $_FILES['employeImage']['type'] = $files['type'][$i];
            $_FILES['employeImage']['tmp_name'] = $files['tmp_name'][$i];
            $_FILES['employeImage']['error'] = $files['error'][$i];
            $_FILES['employeImage']['size'] = $files['size'][$i];

            $this->upload->do_upload('employeImage');

            $data = $this->upload->data();

            $input['name'] = $data['file_name'];
            $input['employe_id'] = $id;

            if ($i == 0) {
                $cover['employe_id'] = $id;
                $cover['employe_images'] =  base_url('uploads').'/'.('employe').'/'  . $input['name'];
                $this->Employe_model->add($cover);
            }

            $error = $this->upload->display_errors();

            $this->Employe_model->add_employe_image($input);
        }
        
        return true;
    }

    function view($id = NULL) {
        if ($this->Employe_model->get(array('id' => $id)) == NULL) {
            redirect('employe');
        }
        $data['employe'] = $this->Employe_model->get(array('id' => $id));
        $data['title'] = 'Detail pengguna';
        $data['main'] = 'employe/employe_view';
        $this->load->view('template/layout', $data);
    }


    // Delete employe
    public function delete($id = NULL) {
        if ($this->Employe_model->get(array('id' => $id)) == NULL) {
            redirect('employe');
        }
        if ($_POST) {

            $this->Employe_model->delete($this->input->post('del_id'));
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
            redirect('employe');
        } elseif (!$_POST) {
            $this->session->set_flashdata('delete', 'Delete');
            redirect('employe/edd/' . $id);
        }
    }

}

/* End of file employe.php */
/* Location: ./application/controllers/ccp/employe.php */
