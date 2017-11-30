<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
* user Model Class
 *
 * @package     GROOT
 * @subpackage  Models
 * @category    Models
 * @author      Sistiandy Syahbana nugraha <sistiandy.web.id>
 */

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //var $table = 'user';
   // var $table = 'user_role';
    
    
    // Get From Databases
    function get($params = array())
    {
        $this->db->select('user.user_id, user_name, user_password,
            user_email, user.employe_id,  user_created_date, user_last_update , user_deleted'); 
        
        if(isset($params['id']))
        {
            $this->db->where('user.user_id', $params['id']);
        }
        
        if(isset($params['user_id']))
        {
            $this->db->where('user.user_id', $params['user_id']);
        }
        
        if(isset($params['name']))
        {
            $this->db->like('user_name', $params['name']);
        }
        
        if(isset($params['employe_id']))
        {
            $this->db->like('employe_id', $params['employe_id']);
        }

        if(isset($params['password']))
        {
            $this->db->where('user_password', $params['password']);
        }
        
        if(isset($params['date']))
        {
            $this->db->where('user_created_date', $params['date']);
        }
        
        if(isset($params['status']))
        {
            $this->db->where('user_deleted', $params['status']);
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
        else
        {
            $this->db->order_by('user_last_update', 'desc');
        }

        $this->db->select('employe.employe_id, employe.employe_nrp, employe.employe_name, employe.departement_departement_id, departement.departement_id, departement.departement_name');
        $this->db->join('employe', 'employe.employe_id = user.employe_id', 'left');
        $this->db->join('departement', 'departement.departement_id = employe.departement_departement_id', 'left');

        if(isset($params['employe_employe_id']))
        {
            $this->db->where('employe_id', $params['employe_employe_id']);
        }
        if(isset($params['employe_nrp']))
        {
            $this->db->where('employe_nrp', $params['employe_nrp']);
        }
        if(isset($params['employe_name']))
        {
            $this->db->where('employe_name', $params['employe_name']);
        }

        if(isset($params['departement_name']))
        {
            $this->db->where('departement_name', $params['departement_name']);
        }

        


        $this->db->select('user_role.role_itservice, user_role.role_master, user_role.role_log,
                         user_role.role_useradmin, user_role.role_iventoryit, user_role.role_employe');
        $this->db->join('user_role', 'user_role.user_id = user.user_id', 'left');

       

        if(isset($params['role_itservice']))
        {
            $this->db->where('role_itservice', $params['role_itservice']);
        }
        if(isset($params['role_master']))
        {
            $this->db->where('role_master', $params['role_master']);
        }
        if(isset($params['role_log']))
        {
            $this->db->where('role_log', $params['role_log']);
        }
         if(isset($params['role_useradmin']))
        {
            $this->db->where('role_useradmin', $params['role_useradmin']);
        }
        if(isset($params['role_iventoryit']))
        {
            $this->db->where('role_iventoryit', $params['role_iventoryit']);
        }
        if(isset($params['role_employe']))
        {
            $this->db->where('role_employe', $params['role_employe']);
        }

        $res = $this->db->get('user');

        if(isset($params['id']))
        {
            return $res->row_array();
        }
        else
        {
            return $res->result_array();
        }
    }

    function cari_employe($pencarian){

        if ($pencarian){
             $this->db->select('employe_id, employe_nrp, employe_name');
            $this->db->where('employe_nrp', $pencarian);
        }
        if(isset($params['employe_id']))
        {
            $this->db->where('employe_id', $params['employe_id']);
        }

        if(isset($params['employe_nrp']))
        {
            $this->db->where('employe_nrp', $params['employe_nrp']);
        }
        if(isset($params['employe_name']))
        {
            $this->db->where('employe_name', $params['employe_name']);
        }

        $query = $this->db->get('employe');

        $result['hasil'] = $query->result();
        return $result;
    }
    
    // Get Role From Databases
    function get_role($params = array())
    {
        $this->db->select('user_role.user_id, role_itservice, role_master, role_log'); 
        
        if(isset($params['id']))
        {
            $this->db->where('user_role.user_id', $params['id']);
        }
        if(isset($params['user_id']))
        {
            $this->db->where('user_role.user_id', $params['user_id']);
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
        else
        {
            $this->db->order_by('user_role.user_id', 'desc');
        }
        
        $res = $this->db->get('user_role');

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
    
    //untuk table user    
     if(isset($data['user_id'])) {
        $this->db->set('user_id', $data['user_id']);
    }

    if(isset($data['user_name'])) {
        $this->db->set('user_name', $data['user_name']);
    }
    
    if(isset($data['user_password'])) {
        $this->db->set('user_password', $data['user_password']);
    }
    
    if(isset($data['user_email'])) {
        $this->db->set('user_email', $data['user_email']);
    }
    
    
    if(isset($data['user_created_date'])) {
        $this->db->set('user_created_date', $data['user_created_date']);
    }
    
    if(isset($data['user_last_update'])) {
        $this->db->set('user_last_update', $data['user_last_update']);
    }
    
    if(isset($data['user_deleted'])) {
        $this->db->set('user_deleted', $data['user_deleted']);
    }

    //untuk table employe
    if(isset($data['employe_id'])) {
        $this->db->set('employe_id', $data['employe_id']);
        
    }


    if (isset($data['user_id'])) {
        
         $this->db->where('user_id', $data['user_id']);
         $this->db->update('user');
         $id = $data['user_id'];
     }
     if(!isset($data['user_id'])){
        $this->db->insert('user');
        $id = $this->db->insert_id();
    }

    
    //untuk table user_role
    if(isset($data['role_itservice'])) {
        $this->db->set('role_itservice', $data['role_itservice']);
        
    }
    if(isset($data['role_master'])) {
        $this->db->set('role_master', $data['role_master']);
        
    }
    if(isset($data['role_log'])) {
        $this->db->set('role_log', $data['role_log']);
        
    }
    if(isset($data['role_iventoryit'])) {
        $this->db->set('role_iventoryit', $data['role_iventoryit']);
        
    }
    if(isset($data['role_useradmin'])) {
        $this->db->set('role_useradmin', $data['role_useradmin']);
        
    }
    if(isset($data['role_employe'])) {
        $this->db->set('role_employe', $data['role_employe']);
        
    }
        
    if (isset($data['user_id'])) {
       
        $this->db->where('user_id', $data['user_id']);
        $this->db->update('user_role');
        $id = $data['user_id'];
    } else {
        $this->db->insert('user_role');
        $id = $this->db->insert_id();
    }

    $status = $this->db->affected_rows();
    return ($status == 0) ? FALSE : $id;
}

function add_role($data = array()) {
    
 if(isset($data['user_id'])) {
    $this->db->set('user_id', $data['user_id']);
}

if(isset($data['role_itservice'])) {
    $this->db->set('role_itservice', $data['role_itservice']);
}

if(isset($data['role_master'])) {
    $this->db->set('role_master', $data['role_master']);
}

if(isset($data['role_log'])) {
    $this->db->set('role_log', $data['role_log']);
}

if(isset($data['role_iventoryit'])) {
    $this->db->set('role_iventoryit', $data['role_iventoryit']);
        
}
if(isset($data['role_useradmin'])) {
    $this->db->set('role_useradmin', $data['role_useradmin']);
        
}
if(isset($data['role_employe'])) {
    $this->db->set('role_employe', $data['role_employe']);
        
}

if (isset($data['user_id'])) {
    $this->db->where('user_id', $data['user_id']);
    $this->db->update('user_role');
    $id = $data['user_id'];
} else {
    $this->db->insert('user_role');
    $id = $this->db->insert_id();
}

$status = $this->db->affected_rows();
return ($status == 0) ? FALSE : $id;
}

function delete($id) {
    $this->db->set('user_deleted', 1);
    $this->db->where('user_id', $id);
    $this->db->update('user');
}

function delete_role($id) {
    $this->db->where('user_id', $id);
    $this->db->delete('user_role');
}

function change_password($id, $params){
   $this->db->where('user_id', $id);
   $this->db->update('user', $params);   
}



}
