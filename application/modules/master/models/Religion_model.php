<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
* user Model Class
 *
 * @package     CG
 * @subpackage  Models
 * @category    Models
 * @author      supriadi <adi@rumahcg.com>
 */

class Religion_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //var $table = 'user';
   // var $table = 'user_role';
    
    
    // Get From Databases
    function get($params = array())
    {
        $this->db->select('religion.religion_id,religion_code, religion_name'); 
        
        if(isset($params['id']))
        {
            $this->db->where('religion.religion_id', $params['id']);
        }
        
        if(isset($params['religion_id']))
        {
            $this->db->where('religion.religion_id', $params['religion_id']);
        }

        if(isset($params['religion_code']))
        {
            $this->db->like('religion_code', $params['religion_code']);
        }
        
        if(isset($params['religion_name']))
        {
            $this->db->like('religion_name', $params['religion_name']);
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

        $res = $this->db->get('religion');

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
    
    //untuk table religion 
     if(isset($data['religion_id'])) {
        $this->db->set('religion_id', $data['religion_id']);
    }

    if(isset($data['religion_code'])) {
        $this->db->set('religion_code', $data['religion_code']);
    }

    if(isset($data['religion_name'])) {
        $this->db->set('religion_name', $data['religion_name']);
    }

    if (isset($data['religion_id'])) {
        
         $this->db->where('religion_id', $data['religion_id']);
         $this->db->update('religion');
         $id = $data['religion_id'];
     }
     if(!isset($data['religion_id'])){
        $this->db->insert('religion');
        $id = $this->db->insert_id();
    }

    $status = $this->db->affected_rows();
    return ($status == 0) ? FALSE : $id;
}

// Delete to database
function delete($id) {
    $this->db->where('religion_id', $id);
    $this->db->delete('religion');
}



}
