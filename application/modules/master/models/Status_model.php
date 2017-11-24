<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
* user Model Class
 *
 * @package     CG
 * @subpackage  Models
 * @category    Models
 * @author      supriadi <adi@rumahcg.com>
 */

class status_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //var $table = 'user';
   // var $table = 'user_role';
    
    
    // Get From Databases
    function get($params = array())
    {
        $this->db->select('status.status_id,status_code, status_name'); 
        
        if(isset($params['id']))
        {
            $this->db->where('status.status_id', $params['id']);
        }
        
        if(isset($params['status_id']))
        {
            $this->db->where('status.status_id', $params['status_id']);
        }

        if(isset($params['status_code']))
        {
            $this->db->like('status_code', $params['status_code']);
        }
        
        if(isset($params['status_name']))
        {
            $this->db->like('status_name', $params['status_name']);
        }

        if(isset($params['limit']))
        {
            if(!isset($params['offset']))
            {
                $params['offset'] = NULL;
            }

            $this->db->limit($params['limit'], $params['offset']);
        }

        if(isset($params['order_by']))
        {
            $this->db->order_by($params['order_by'], 'desc');
        }

        $res = $this->db->get('status');

        if(isset($params['id']))
        {
            return $res->row_array();
        }
        else
        {
            return $res->result_array();
        }
    }


    function add($data = array()) {
    
    //untuk table status 
     if(isset($data['status_id'])) {
        $this->db->set('status_id', $data['status_id']);
    }

    if(isset($data['status_code'])) {
        $this->db->set('status_code', $data['status_code']);
    }

    if(isset($data['status_name'])) {
        $this->db->set('status_name', $data['status_name']);
    }

    if (isset($data['status_id'])) {
        
         $this->db->where('status_id', $data['status_id']);
         $this->db->update('status');
         $id = $data['status_id'];
     }
     if(!isset($data['status_id'])){
        $this->db->insert('status');
        $id = $this->db->insert_id();
    }

    $status = $this->db->affected_rows();
    return ($status == 0) ? FALSE : $id;
}

// Delete to database
function delete($id) {
    $this->db->where('status_id', $id);
    $this->db->delete('status');
}



}
