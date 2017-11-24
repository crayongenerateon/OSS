<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
* user Model Class
 *
 * @package     CG
 * @subpackage  Models
 * @category    Models
 * @author      supriadi <adi@rumahcg.com>
 */

class Pendidikan_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //var $table = 'user';
   // var $table = 'user_role';
    
    
    // Get From Databases
    function get($params = array())
    {
        $this->db->select('pendidikan.pendidikan_id, pendidikan_code, pendidikan_name'); 
        
        if(isset($params['id']))
        {
            $this->db->where('pendidikan.pendidikan_id', $params['id']);
        }
        
        if(isset($params['pendidikan_id']))
        {
            $this->db->where('pendidikan.pendidikan_id', $params['pendidikan_id']);
        }

        if(isset($params['pendidikan_code']))
        {
            $this->db->like('pendidikan_code', $params['pendidikan_code']);
        }
        
        if(isset($params['pendidikan_name']))
        {
            $this->db->like('pendidikan_name', $params['pendidikan_name']);
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

        $res = $this->db->get('pendidikan');

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
    
    //untuk table pendidikan 
     if(isset($data['pendidikan_id'])) {
        $this->db->set('pendidikan_id', $data['pendidikan_id']);
    }

    if(isset($data['pendidikan_code'])) {
        $this->db->set('pendidikan_code', $data['pendidikan_code']);
    }


    if(isset($data['pendidikan_name'])) {
        $this->db->set('pendidikan_name', $data['pendidikan_name']);
    }

    if (isset($data['pendidikan_id'])) {
        
         $this->db->where('pendidikan_id', $data['pendidikan_id']);
         $this->db->update('pendidikan');
         $id = $data['pendidikan_id'];
     }
     if(!isset($data['pendidikan_id'])){
        $this->db->insert('pendidikan');
        $id = $this->db->insert_id();
    }

    $status = $this->db->affected_rows();
    return ($status == 0) ? FALSE : $id;
}

// Delete to database
function delete($id) {
    $this->db->where('pendidikan_id', $id);
    $this->db->delete('pendidikan');
}



}
