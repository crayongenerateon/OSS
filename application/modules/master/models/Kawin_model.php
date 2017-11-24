<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
* user Model Class
 *
 * @package     CG
 * @subpackage  Models
 * @category    Models
 * @author      supriadi <adi@rumahcg.com>
 */

class Kawin_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //var $table = 'user';
   // var $table = 'user_role';
    
    
    // Get From Databases
    function get($params = array())
    {
        $this->db->select('kawin.kawin_id, kawin_code, kawin_name'); 
        
        if(isset($params['id']))
        {
            $this->db->where('kawin.kawin_id', $params['id']);
        }
        
        if(isset($params['kawin_id']))
        {
            $this->db->where('kawin.kawin_id', $params['kawin_id']);
        }

        if(isset($params['kawin_code']))
        {
            $this->db->like('kawin_code', $params['kawin_code']);
        }
        
        if(isset($params['kawin_name']))
        {
            $this->db->like('kawin_name', $params['kawin_name']);
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

        $res = $this->db->get('kawin');

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
    
    //untuk table kawin 
     if(isset($data['kawin_id'])) {
        $this->db->set('kawin_id', $data['kawin_id']);
    }

    if(isset($data['kawin_code'])) {
        $this->db->set('kawin_code', $data['kawin_code']);
    }

    if(isset($data['kawin_name'])) {
        $this->db->set('kawin_name', $data['kawin_name']);
    }

    if (isset($data['kawin_id'])) {
        
         $this->db->where('kawin_id', $data['kawin_id']);
         $this->db->update('kawin');
         $id = $data['kawin_id'];
     }
     if(!isset($data['kawin_id'])){
        $this->db->insert('kawin');
        $id = $this->db->insert_id();
    }

    $status = $this->db->affected_rows();
    return ($status == 0) ? FALSE : $id;
}

// Delete to database
function delete($id) {
    $this->db->where('kawin_id', $id);
    $this->db->delete('kawin');
}



}
