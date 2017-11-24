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
class Iventoryit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_admin') == NULL) {
            header("Location:" . site_url('user/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
        }
        $this->load->model('Iventoryit_model');
        $this->load->model('employe/Employe_model');
        $this->load->model('master/Departement_model');
        $this->load->model('activity_log/Activity_log_model');
        $this->load->helper(array('form', 'url'));
    }

    // iventoryit view in list
    public function index($offset = NULL)
    {

        $this->load->library('pagination');

        $data['iventoryit'] = $this->Iventoryit_model->get(array('limit' => 10, 'offset' => $offset));
        $data['title'] = 'Inventory IT';
        $data['main'] = 'iventory/iventoryit_list';
        $config['per_page'] = 10;
        $config['base_url'] = site_url('iventory/iventoryit/index');
        $config['total_rows'] = count($this->Iventoryit_model->get());
        $this->pagination->initialize($config);

        $this->load->view('template/layout', $data);
    }

    // Add iventory IT and Update
    public function add($id = NULL)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('iventoryit_ip', 'IP Address', 'required');
        $this->form_validation->set_rules('iventoryit_hostname', 'Hostname', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
        $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

        if ($_POST and $this->form_validation->run() == TRUE) {

            if ($this->input->post('iventoryit_id')) {
                $params['iventoryit_id'] = $this->input->post('iventoryit_id');
            } 
            $params['iventoryit_hostname'] = $this->input->post('iventoryit_hostname');
            $params['iventoryit_ip'] = $this->input->post('iventoryit_ip');
            $params['iventoryit_types_id'] = $this->input->post('iventoryit_types_id');
            $params['iventoryit_statuss_id'] = $this->input->post('iventoryit_statuss_id');
            $params['iventoryit_oss_id'] = $this->input->post('iventoryit_oss_id');
            $params['iventoryit_officeapps_id'] = $this->input->post('iventoryit_officeapps_id');
            $params['iventoryit_ket'] = $this->input->post('iventoryit_ket');
            $params['iventoryit_last_update'] = date('Y-m-d H:i:s');
            $params['employe_employes_id'] = $this->input->post('employe_employes_id');
           
              
            $status = $this->Iventoryit_model->add($params);

            // activity log
            $this->Activity_log_model->add(
                array(
                    'log_date' => date('Y-m-d H:i:s'),
                    'user_id' => $this->session->userdata('user_id_admin'),
                    'log_module' => 'Pengguna',
                    'log_action' => $data['operation'],
                    'log_info' => 'ID:' . $status . ';Title:' . $this->input->post('iventoryit_hostname')
                )
            );

            $this->session->set_flashdata('success', $data['operation'] . ' Iventory IT berhasil');
            redirect('iventory/iventoryit');
        } else {
            // Edit mode
            if (!is_null($id)) {
                $data['iventoryit'] = $this->Iventoryit_model->get(array('id' => $id));
                if (count($data['iventoryit']) == 0) {
                    redirect('iventory/iventoryit/iventoryit_add');
                }
            }

            if ($this->input->post('iventoryit_id')) {
                redirect('iventory/iventoryit/iventoryit_add' . $this->input->post('iventoryit_id'));
            }

            
            $data['iventoryit_status'] = $this->Iventoryit_model->get_status();
            $data['iventoryit_type'] = $this->Iventoryit_model->get_type();
            $data['iventoryit_os'] = $this->Iventoryit_model->get_os();
            $data['iventoryit_officeapp'] = $this->Iventoryit_model->get_officeapp();
            $data['employe'] = $this->Employe_model->get();
            $data['departement'] = $this->Departement_model->get();

            $data['title'] = $data['operation'] . 'Inventory IT';
            $data['main'] = 'iventory/iventoryit_add';
            $this->load->view('template/layout', $data);
        }
    }

    // Add iventory IT Type and Update
    public function addType($id = NULL)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('iventoryit_type_name', 'Type name', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
        $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

        if ($_POST and $this->form_validation->run() == TRUE) {

            if ($this->input->post('iventoryit_type_id')) {
                $params['iventoryit_type_id'] = $this->input->post('iventoryit_type_id');
            } 
            $params['iventoryit_type_name'] = $this->input->post('iventoryit_type_name');
         
              
            $status = $this->Iventoryit_model->add_iventoryit_type($params);

            // activity log
            $this->Activity_log_model->add(
                array(
                    'log_date' => date('Y-m-d H:i:s'),
                    'user_id' => $this->session->userdata('user_id_admin'),
                    'log_module' => 'Pengguna',
                    'log_action' => $data['operation'],
                    'log_info' => 'ID:' . $status . ';Title:' . $this->input->post('iventoryit_type_name')
                )
            );

            $this->session->set_flashdata('success', $data['operation'] . ' Iventory IT Type berhasil');
            redirect('iventory/iventoryit/add');
        } else {
            // Edit mode
            if (!is_null($id)) {
                $data['iventoryitType'] = $this->Iventoryit_model->get(array('id' => $id));
                if (count($data['iventoryitType']) == 0) {
                    redirect('iventory/iventoryit/iventoryit_add');
                }
            }

            if ($this->input->post('iventoryit_type_id')) {
                redirect('iventory/iventoryit/iventoryit_add' . $this->input->post('iventoryit_type_id'));
            }

            $data['title'] = $data['operation'] . 'Inventory IT Type';
            $data['main'] = 'iventory/iventoryit_add';
            $this->load->view('template/layout', $data);
        }
    }

    public function addStatus($id = NULL)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('iventoryit_status_name', 'Status name', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
        $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

        if ($_POST and $this->form_validation->run() == TRUE) {

            if ($this->input->post('iventoryit_status_id')) {
                $params['iventoryit_status_id'] = $this->input->post('iventoryit_status_id');
            } 
            $params['iventoryit_status_name'] = $this->input->post('iventoryit_status_name');
         
              
            $status = $this->Iventoryit_model->add_iventoryit_status($params);

            // activity log
            $this->Activity_log_model->add(
                array(
                    'log_date' => date('Y-m-d H:i:s'),
                    'user_id' => $this->session->userdata('user_id_admin'),
                    'log_module' => 'Pengguna',
                    'log_action' => $data['operation'],
                    'log_info' => 'ID:' . $status . ';Title:' . $this->input->post('iventoryit_status_name')
                )
            );

            $this->session->set_flashdata('success', $data['operation'] . ' Iventory IT Type berhasil');
            redirect('iventory/iventoryit/add');
        } else {
            // Edit mode
            if (!is_null($id)) {
                $data['iventoryitStatus'] = $this->Iventoryit_model->get(array('id' => $id));
                if (count($data['iventoryitStatus']) == 0) {
                    redirect('iventory/iventoryit/iventoryit_add');
                }
            }

            if ($this->input->post('iventoryit_status_id')) {
                redirect('iventory/iventoryit/iventoryit_add' . $this->input->post('iventoryit_status_id'));
            }

            $data['title'] = $data['operation'] . 'Inventory IT Status';
            $data['main'] = 'iventory/iventoryit_add';
            $this->load->view('template/layout', $data);
        }
    }

    // Add iventory IT OS and Update
    public function addOs($id = NULL)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('iventoryit_os_name', 'OS name', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
        $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

        if ($_POST and $this->form_validation->run() == TRUE) {

            if ($this->input->post('iventoryit_os_id')) {
                $params['iventoryit_os_id'] = $this->input->post('iventoryit_os_id');
            } 
            $params['iventoryit_os_name'] = $this->input->post('iventoryit_os_name');
         
              
            $status = $this->Iventoryit_model->add_iventoryit_os($params);

            // activity log
            $this->Activity_log_model->add(
                array(
                    'log_date' => date('Y-m-d H:i:s'),
                    'user_id' => $this->session->userdata('user_id_admin'),
                    'log_module' => 'Pengguna',
                    'log_action' => $data['operation'],
                    'log_info' => 'ID:' . $status . ';Title:' . $this->input->post('iventoryit_os_name')
                )
            );

            $this->session->set_flashdata('success', $data['operation'] . ' Iventory IT OS berhasil');
            redirect('iventory/iventoryit/add');
        } else {
            // Edit mode
            if (!is_null($id)) {
                $data['iventoryitOs'] = $this->Iventoryit_model->get(array('id' => $id));
                if (count($data['iventoryitOs']) == 0) {
                    redirect('iventory/iventoryit/iventoryit_add');
                }
            }

            if ($this->input->post('iventoryit_os_id')) {
                redirect('iventory/iventoryit/iventoryit_add' . $this->input->post('iventoryit_os_id'));
            }

            $data['title'] = $data['operation'] . 'Inventory IT OS';
            $data['main'] = 'iventory/iventoryit_add';
            $this->load->view('template/layout', $data);
        }
    }

     // Add iventory IT Office App and Update
    public function addOApp($id = NULL)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('iventoryit_officeapp_name', 'Office name', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
        $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

        if ($_POST and $this->form_validation->run() == TRUE) {

            if ($this->input->post('iventoryit_officeapp_id')) {
                $params['iventoryit_officeapp_id'] = $this->input->post('iventoryit_officeapp_id');
            } 
            $params['iventoryit_officeapp_name'] = $this->input->post('iventoryit_officeapp_name');
         
              
            $status = $this->Iventoryit_model->add_iventoryit_officeapp($params);

            // activity log
            $this->Activity_log_model->add(
                array(
                    'log_date' => date('Y-m-d H:i:s'),
                    'user_id' => $this->session->userdata('user_id_admin'),
                    'log_module' => 'Pengguna',
                    'log_action' => $data['operation'],
                    'log_info' => 'ID:' . $status . ';Title:' . $this->input->post('iventoryit_officeapp_name')
                )
            );

            $this->session->set_flashdata('success', $data['operation'] . ' Iventory IT OS berhasil');
            redirect('iventory/iventoryit/add');
        } else {
            // Edit mode
            if (!is_null($id)) {
                $data['iventoryitOapp'] = $this->Iventoryit_model->get(array('id' => $id));
                if (count($data['iventoryitOapp']) == 0) {
                    redirect('iventory/iventoryit/iventoryit_add');
                }
            }

            if ($this->input->post('iventoryit_officeapp_id')) {
                redirect('iventory/iventoryit/iventoryit_add' . $this->input->post('iventoryit_officeapp_id'));
            }

            $data['title'] = $data['operation'] . 'Inventory IT OS';
            $data['main'] = 'iventory/iventoryit_add';
            $this->load->view('template/layout', $data);
        }
    }


    
    function view($id = NULL)
    {
        //dari sini
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->Iventoryit_model->get(array('id' => $id)) == NULL) {
            redirect('iventory/iventoryit');
        }

        $data['iventoryit'] = $this->Iventoryit_model->get(array('id' => $id));

        if (count($data['iventoryit']) == 0) {
            redirect('iventory/iventoryit');
        }

        
        $data['title'] = 'Detail Iventory';
        $data['main'] = 'iventory/iventoryit_view';
        $this->load->view('template/layout', $data);
    }


    // Delete iventoryit
    public function delete($id = NULL)
    {
        if ($_POST) {

            $this->Iventoryit_model->delete($this->input->post('del_id'));
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
            redirect('iventory/iventoryit');
        } elseif (!$_POST) {
            $this->session->set_flashdata('delete', 'Delete');
            redirect('iventory/iventoryit/add/' . $id);
        }
    }

}

/* End of file iventoryit.php */
/* Location: ./application/controllers/ccp/iventoryit.php */
