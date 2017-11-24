<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
* user Model Class
 *
 * @package     CG
 * @subpackage  Models
 * @category    Models
 * @author      supriadi <adi@rumahcg.com>
 */

class Division_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //var $table = 'user';
   // var $table = 'user_role';
    
    
    // Get From Databases
    function get($params = array())
    {
        $this->db->select('division.division_id,division_code, division_name'); 
        
        if(isset($params['id']))
        {
            $this->db->where('division.division_id', $params['id']);
        }
        
        if(isset($params['division_id']))
        {
            $this->db->where('division.division_id', $params['division_id']);
        }

        if(isset($params['division_code']))
        {
            $this->db->like('division_code', $params['division_code']);
        }
        
        if(isset($params['division_name']))
        {
            $this->db->like('division_name', $params['division_name']);
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

        $res = $this->db->get('division');

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
    
    //untuk table division 
     if(isset($data['division_id'])) {
        $this->db->set('division_id', $data['division_id']);
    }

    if(isset($data['division_code'])) {
        $this->db->set('division_code', $data['division_code']);
    }

    if(isset($data['division_name'])) {
        $this->db->set('division_name', $data['division_name']);
    }

    if (isset($data['division_id'])) {
        
         $this->db->where('division_id', $data['division_id']);
         $this->db->update('division');
         $id = $data['division_id'];
     }
     if(!isset($data['division_id'])){
        $this->db->insert('division');
        $id = $this->db->insert_id();
    }

    $status = $this->db->affected_rows();
    return ($status == 0) ? FALSE : $id;
}

// Delete to database
function delete($id) {
    $this->db->where('division_id', $id);
    $this->db->delete('division');
}



}
