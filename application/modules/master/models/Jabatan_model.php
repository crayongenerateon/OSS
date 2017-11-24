<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
* user Model Class
 *
 * @package     CG
 * @subpackage  Models
 * @category    Models
 * @author      supriadi <adi@rumahcg.com>
 */

class Jabatan_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //var $table = 'user';
   // var $table = 'user_role';
    
    
    // Get From Databases
    function get($params = array())
    {
        $this->db->select('jabatan.jabatan_id, jabatan_code, jabatan_name'); 
        
        if(isset($params['id']))
        {
            $this->db->where('jabatan.jabatan_id', $params['id']);
        }
        
        if(isset($params['jabatan_id']))
        {
            $this->db->where('jabatan.jabatan_id', $params['jabatan_id']);
        }

        if(isset($params['jabatan_code']))
        {
            $this->db->like('jabatan_code', $params['jabatan_code']);
        }
        
        if(isset($params['jabatan_name']))
        {
            $this->db->like('jabatan_name', $params['jabatan_name']);
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

        $res = $this->db->get('jabatan');

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
    
    //untuk table jabatan 
     if(isset($data['jabatan_id'])) {
        $this->db->set('jabatan_id', $data['jabatan_id']);
    }

    if(isset($data['jabatan_code'])) {
        $this->db->set('jabatan_code', $data['jabatan_code']);
    }

    if(isset($data['jabatan_name'])) {
        $this->db->set('jabatan_name', $data['jabatan_name']);
    }

    if (isset($data['jabatan_id'])) {
        
         $this->db->where('jabatan_id', $data['jabatan_id']);
         $this->db->update('jabatan');
         $id = $data['jabatan_id'];
     }
     if(!isset($data['jabatan_id'])){
        $this->db->insert('jabatan');
        $id = $this->db->insert_id();
    }

    $status = $this->db->affected_rows();
    return ($status == 0) ? FALSE : $id;
}

// Delete to database
function delete($id) {
    $this->db->where('jabatan_id', $id);
    $this->db->delete('jabatan');
}



}
