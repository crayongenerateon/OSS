<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/** 
* Activity log controllers class
 *
 * @package     GROOT
 * @subpackage  Controllers
 * @category    Controllers
 * @author      Sistiandy Syahbana nugraha <sistiandy.web.id>
 */

class Activity_log_admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('logged_admin') == NULL) redirect('gadmin/auth/login');
        $this->load->model('Activity_log_model');
        $this->load->model('user/User_model');
        $this->load->helper(array('form', 'url'));
    }

    // View log_activity in list
    public function index($offset = NULL) {
            $this->load->library('pagination');

            $data['data'] = $this->Activity_log_model->get(array('limit' => 10, 'offset' => $offset));
            $data['user'] = $this->User_model->get();
            $data['title'] = 'Log Aktivitas';
            $data['main'] = 'activity_log/list';
            $config['per_page'] = 10;
            $config['base_url'] = site_url('activity_log/activity_log_admin/index');
            $config['total_rows'] = $this->db->count_all('activity_log');
            $this->pagination->initialize($config);

            $this->load->view('template/layout', $data);
    }

}

/* End of file log_activity.php */
/* Location: ./application/controllers/log_activity.php */