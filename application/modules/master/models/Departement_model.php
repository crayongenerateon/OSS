<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
* user Model Class
 *
 * @package     CG
 * @subpackage  Models
 * @category    Models
 * @author      supriadi <adi@rumahcg.com>
 */

class Departement_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //var $table = 'user';
   // var $table = 'user_role';
    
    
    // Get From Databases
    function get($params = array())
    {
        $this->db->select('departement.departement_id, departement_name'); 
        
        if(isset($params['id']))
        {
            $this->db->where('departement.departement_id', $params['id']);
        }
        
        if(isset($params['departement_id']))
        {
            $this->db->where('departement.departement_id', $params['departement_id']);
        }
        
        if(isset($params['departement_name']))
        {
            $this->db->like('departement_name', $params['departement_name']);
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

        $res = $this->db->get('departement');

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
    
    //untuk table departement 
     if(isset($data['departement_id'])) {
        $this->db->set('departement_id', $data['departement_id']);
    }

    if(isset($data['departement_name'])) {
        $this->db->set('departement_name', $data['departement_name']);
    }

    if (isset($data['departement_id'])) {
        
         $this->db->where('departement_id', $data['departement_id']);
         $this->db->update('departement');
         $id = $data['departement_id'];
     }
     if(!isset($data['departement_id'])){
        $this->db->insert('departement');
        $id = $this->db->insert_id();
    }

    $status = $this->db->affected_rows();
    return ($status == 0) ? FALSE : $id;
}

// Delete to database
function delete($id) {
    $this->db->where('departement_id', $id);
    $this->db->delete('departement');
}



}
