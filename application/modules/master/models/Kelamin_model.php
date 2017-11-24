<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
* user Model Class
 *
 * @package     CG
 * @subpackage  Models
 * @category    Models
 * @author      supriadi <adi@rumahcg.com>
 */

class Kelamin_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //var $table = 'user';
   // var $table = 'user_role';
    
    
    // Get From Databases
    function get($params = array())
    {
        $this->db->select('kelamin.kelamin_id,kelamin_code, kelamin_name'); 
        
        if(isset($params['id']))
        {
            $this->db->where('kelamin.kelamin_id', $params['id']);
        }
        
        if(isset($params['kelamin_id']))
        {
            $this->db->where('kelamin.kelamin_id', $params['kelamin_id']);
        }

        if(isset($params['kelamin_code']))
        {
            $this->db->like('kelamin_code', $params['kelamin_code']);
        }
        
        if(isset($params['kelamin_name']))
        {
            $this->db->like('kelamin_name', $params['kelamin_name']);
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

        $res = $this->db->get('kelamin');

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
    
    //untuk table kelamin 
     if(isset($data['kelamin_id'])) {
        $this->db->set('kelamin_id', $data['kelamin_id']);
    }

    if(isset($data['kelamin_code'])) {
        $this->db->set('kelamin_code', $data['kelamin_code']);
    }

    if(isset($data['kelamin_name'])) {
        $this->db->set('kelamin_name', $data['kelamin_name']);
    }

    if (isset($data['kelamin_id'])) {
        
         $this->db->where('kelamin_id', $data['kelamin_id']);
         $this->db->update('kelamin');
         $id = $data['kelamin_id'];
     }
     if(!isset($data['kelamin_id'])){
        $this->db->insert('kelamin');
        $id = $this->db->insert_id();
    }

    $status = $this->db->affected_rows();
    return ($status == 0) ? FALSE : $id;
}

// Delete to database
function delete($id) {
    $this->db->where('kelamin_id', $id);
    $this->db->delete('kelamin');
}



}
