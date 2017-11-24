<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/** 
 * user Model Class
 *
 * @package     OSS
 * @subpackage  Models
 * @category    Models
 * @author      Supriadi <adi@rumahcg.com>
 */

class Iventoryit_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
   
    
    // Get From Databases
    function get($params = array())
    {
        $this->db->select('iventoryit.iventoryit_id, iventoryit_hostname, iventoryit_ip, 
                    iventoryit_types_id, employe_employes_id, iventoryit_statuss_id, iventoryit_oss_id, 
                    iventoryit_officeapps_id, iventoryit_ket, iventoryit_last_update');

        if (isset($params['id'])) {
            $this->db->where('iventoryit_id', $params['id']);
        }

        if (isset($params['iventoryit_id'])) {
            $this->db->where('iventoryit_id', $params['iventoryit_id']);
        }

        if (isset($params['iventoryit_hostname'])) {
            $this->db->where('iventoryit_hostname', $params['iventoryit_hostname']);
        }

        if (isset($params['iventoryit_ip'])) {
            $this->db->where('iventoryit_ip', $params['iventoryit_ip']);
        }

        if (isset($params['iventoryit_types_id'])) {
            $this->db->where('iventoryit_types_id', $params['iventoryit_types_id']);
        }

        if (isset($params['employe_employes_id'])) {
            $this->db->where('employe_employes_id', $params['employe_employes_id']);
        }

        if (isset($params['iventoryit_statuss_id'])) {
            $this->db->where('iventoryit_statuss_id', $params['iventoryit_statuss_id']);
        }
        if (isset($params['iventoryit_oss_id'])) {
            $this->db->where('iventoryit_oss_id', $params['iventoryit_oss_id']);
        }

        if (isset($params['iventoryit_officeapps_id'])) {
            $this->db->where('iventoryit_officeapps_id', $params['iventoryit_officeapps_id']);
        }
        if (isset($params['iventoryit_ket'])) {
            $this->db->where('iventoryit_ket', $params['iventoryit_ket']);
        }

        if (isset($params['iventoryit_last_update'])) {
            $this->db->where('iventoryit_last_update', $params['iventoryit_last_update']);
        }


        if (isset($params['limit'])) {
            if (!isset($params['offset'])) {
                $params['offset'] = NULL;
            }

            $this->db->limit($params['limit'], $params['offset']);
        }
        if (isset($params['order_by'])) {
            $this->db->order_by($params['order_by'], 'desc');
        } else {
            $this->db->order_by('departement_departement_id', 'desc');
        }

        $this->db->select('
            iventoryit_type.iventoryit_type_id, iventoryit_type.iventoryit_type_name,  
            employe.employe_id, employe.employe_name, employe.departement_departement_id,  
            departement.departement_id, departement.departement_name,
            iventoryit_status.iventoryit_status_id, iventoryit_status.iventoryit_status_name,
            iventoryit_os.iventoryit_os_id, iventoryit_os.iventoryit_os_name,
            iventoryit_officeapp.iventoryit_officeapp_id, iventoryit_officeapp.iventoryit_officeapp_name');
        $this->db->join('iventoryit_type', 'iventoryit_type.iventoryit_type_id = iventoryit.iventoryit_types_id', 'left');
        $this->db->join('employe', 'employe.employe_id = iventoryit.employe_employes_id', 'left');
        $this->db->join('departement', 'departement.departement_id = employe.departement_departement_id', 'left');
        $this->db->join('iventoryit_status', 'iventoryit_status.iventoryit_status_id = iventoryit.iventoryit_statuss_id', 'left');
        $this->db->join('iventoryit_os', 'iventoryit_os.iventoryit_os_id = iventoryit.iventoryit_oss_id', 'left');
        $this->db->join('iventoryit_officeapp', 'iventoryit_officeapp.iventoryit_officeapp_id = iventoryit.iventoryit_officeapps_id', 'left');

        if (isset($params['iventoryit_type_id'])) {
            $this->db->where('iventoryit_type_id', $params['iventoryit_type_id']);
        }
        if (isset($params['iventoryit_type_name'])) {
            $this->db->where('iventoryit_type_name', $params['iventoryit_type_name']);
        }
        if (isset($params['iventoryit_category_id'])) {
            $this->db->where('iventoryit_category_id', $params['iventoryit_category_id']);
        }
        if (isset($params['iventoryit_category_name'])) {
            $this->db->where('iventoryit_category_name', $params['iventoryit_category_name']);
        }
        if (isset($params['employe_id'])) {
            $this->db->where('employe_id', $params['employe_id']);
        }
        if (isset($params['employe_name'])) {
            $this->db->where('employe_name', $params['employe_name']);
        }
        if (isset($params['departement_departement_id'])) {
            $this->db->where('departement_departement_id', $params['departement_departement_id']);
        }
        if (isset($params['departement_id'])) {
            $this->db->where('departement_id', $params['departement_id']);
        }
        if (isset($params['departement_name'])) {
            $this->db->where('departement_name', $params['departement_name']);
        }
        if (isset($params['iventoryit_status_id'])) {
            $this->db->where('iventoryit_status_id', $params['iventoryit_status_id']);
        }
        if (isset($params['iventoryit_status_name'])) {
            $this->db->where('iventoryit_status_name', $params['iventoryit_status_name']);
        }
        if (isset($params['iventoryit_os_id'])) {
            $this->db->where('iventoryit_os_id', $params['iventoryit_os_id']);
        }
        if (isset($params['iventoryit_os_name'])) {
            $this->db->where('iventoryit_os_name', $params['iventoryit_os_name']);
        }
        if (isset($params['iventoryit_offifeapp_id'])) {
            $this->db->where('iventoryit_offifeapp_id', $params['iventoryit_offifeapp_id']);
        }
        if (isset($params['iventoryit_offifeapp_name'])) {
            $this->db->where('iventoryit_offifeapp_name', $params['iventoryit_offifeapp_name']);
        }

        $res = $this->db->get('iventoryit');

        if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
    }


     // Get type From Databases
    function get_type($params = array())
    {
        $this->db->select('iventoryit_type.iventoryit_type_id, iventoryit_type_name');

        if (isset($params['id'])) {
            $this->db->where('iventoryit_type.iventoryit_type_id', $params['id']);
        }
        if (isset($params['iventoryit_type_id'])) {
            $this->db->where('iventoryit_type.iventoryit_type_id', $params['iventoryit_type_id']);
        }

        if (isset($params['limit'])) {
            if (!isset($params['offset'])) {
                $params['offset'] = NULL;
            }

            $this->db->limit($params['limit'], $params['offset']);
        }

        if (isset($params['order_by'])) {
            $this->db->order_by($params['order_by'], 'desc');
        } else {
            $this->db->order_by('iventoryit_type.iventoryit_type_id', 'asc');
        }

        $res = $this->db->get('iventoryit_type');

        if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
    }
    
    // Get status From Databases
    function get_status($params = array())
    {
        $this->db->select('iventoryit_status.iventoryit_status_id, iventoryit_status_name');

        if (isset($params['id'])) {
            $this->db->where('iventoryit_status.iventoryit_status_id', $params['id']);
        }
        if (isset($params['iventoryit_status_id'])) {
            $this->db->where('iventoryit_status.iventoryit_status_id', $params['iventoryit_status_id']);
        }

        if (isset($params['limit'])) {
            if (!isset($params['offset'])) {
                $params['offset'] = NULL;
            }

            $this->db->limit($params['limit'], $params['offset']);
        }

        if (isset($params['order_by'])) {
            $this->db->order_by($params['order_by'], 'asc');
        } else {
            $this->db->order_by('iventoryit_status.iventoryit_status_id', 'asc');
        }

        $res = $this->db->get('iventoryit_status');

        if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
    }

    // Get os From Databases
    function get_os($params = array())
    {
        $this->db->select('iventoryit_os.iventoryit_os_id, iventoryit_os_name');

        if (isset($params['id'])) {
            $this->db->where('iventoryit_os.iventoryit_os_id', $params['id']);
        }
        if (isset($params['iventoryit_os_id'])) {
            $this->db->where('iventoryit_os.iventoryit_os_id', $params['iventoryit_os_id']);
        }

        if (isset($params['limit'])) {
            if (!isset($params['offset'])) {
                $params['offset'] = NULL;
            }

            $this->db->limit($params['limit'], $params['offset']);
        }

        if (isset($params['order_by'])) {
            $this->db->order_by($params['order_by'], 'asc');
        } else {
            $this->db->order_by('iventoryit_os.iventoryit_os_id', 'asc');
        }

        $res = $this->db->get('iventoryit_os');

        if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
    }

    // Get offifeapp From Databases
    function get_officeapp($params = array())
    {
        $this->db->select('iventoryit_officeapp.iventoryit_officeapp_id, iventoryit_officeapp_name');

        if (isset($params['id'])) {
            $this->db->where('iventoryit_officeapp.iventoryit_officeapp_id', $params['id']);
        }
        if (isset($params['iventoryit_officeapp_id'])) {
            $this->db->where('iventoryit_officeapp.iventoryit_officeapp_id', $params['iventoryit_officeapp_id']);
        }

        if (isset($params['limit'])) {
            if (!isset($params['offset'])) {
                $params['offset'] = NULL;
            }

            $this->db->limit($params['limit'], $params['offset']);
        }

        if (isset($params['order_by'])) {
            $this->db->order_by($params['order_by'], 'asc');
        } else {
            $this->db->order_by('iventoryit_officeapp.iventoryit_officeapp_id', 'asc');
        }

        $res = $this->db->get('iventoryit_officeapp');

        if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
    }

    // add IT Service
    function add($data = array())
    {
    
        //untuk table     
        if (isset($data['iventoryit_id'])) {
            $this->db->set('iventoryit_id', $data['iventoryit_id']);
        }

        if (isset($data['iventoryit_hostname'])) {
            $this->db->set('iventoryit_hostname', $data['iventoryit_hostname']);
        }

        if (isset($data['iventoryit_ip'])) {
            $this->db->set('iventoryit_ip', $data['iventoryit_ip']);
        }

        if (isset($data['iventoryit_date_end'])) {
            $this->db->set('iventoryit_date_end', $data['iventoryit_date_end']);
        }

        if (isset($data['iventoryit_types_id'])) {
            $this->db->set('iventoryit_types_id', $data['iventoryit_types_id']);
        }

        if (isset($data['employe_employes_id'])) {
            $this->db->set('employe_employes_id', $data['employe_employes_id']);
        }

        if (isset($data['iventoryit_statuss_id'])) {
            $this->db->set('iventoryit_statuss_id', $data['iventoryit_statuss_id']);
        }

        if (isset($data['iventoryit_oss_id'])) {
            $this->db->set('iventoryit_oss_id', $data['iventoryit_oss_id']);
        }

        if (isset($data['iventoryit_officeapps_id'])) {
            $this->db->set('iventoryit_officeapps_id', $data['iventoryit_officeapps_id']);
        }

        if (isset($data['iventoryit_ket'])) {
            $this->db->set('iventoryit_ket', $data['iventoryit_ket']);
        }
        if (isset($data['iventoryit_last_update'])) {
            $this->db->set('iventoryit_last_update', $data['iventoryit_last_update']);
        }

        if (isset($data['iventoryit_id'])) {

            $this->db->where('iventoryit_id', $data['iventoryit_id']);
            $this->db->update('iventoryit');
            $id = $data['iventoryit_id'];
        } else {
            $this->db->insert('iventoryit');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return $id;

        /* if(!isset($data['iventoryit_id'])){
            $this->db->insert('iventoryit');
            $id = $this->db->insert_id();
        }*/
    }


     // add inventoryit type
    function add_iventoryit_type($data = array())
    {

        if (isset($data['iventoryit_type_id'])) {
            $this->db->set('iventoryit_type_id', $data['iventoryit_type_id']);
        }

        if (isset($data['iventoryit_type_name'])) {
            $this->db->set('iventoryit_type_name', $data['iventoryit_type_name']);
        }

        if (isset($data['iventoryit_type_id'])) {
            $this->db->where('iventoryit_type_id', $data['iventoryit_type_id']);
            $this->db->update('iventoryit_type');
            $id = $data['iventoryit_type_id'];
        } else {
            $this->db->insert('iventoryit_type');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }

     // add inventoryitStatus
    function add_iventoryit_status($data = array())
    {

        if (isset($data['iventoryit_status_id'])) {
            $this->db->set('iventoryit_status_id', $data['iventoryit_status_id']);
        }

        if (isset($data['iventoryit_status_name'])) {
            $this->db->set('iventoryit_status_name', $data['iventoryit_status_name']);
        }

        if (isset($data['iventoryit_status_id'])) {
            $this->db->where('iventoryit_status_id', $data['iventoryit_status_id']);
            $this->db->update('iventoryit_status');
            $id = $data['iventoryit_status_id'];
        } else {
            $this->db->insert('iventoryit_status');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }

    // add inventoryit os
    function add_iventoryit_os($data = array())
    {

        if (isset($data['iventoryit_os_id'])) {
            $this->db->set('iventoryit_os_id', $data['iventoryit_os_id']);
        }

        if (isset($data['iventoryit_os_name'])) {
            $this->db->set('iventoryit_os_name', $data['iventoryit_os_name']);
        }

        if (isset($data['iventoryit_os_id'])) {
            $this->db->where('iventoryit_os_id', $data['iventoryit_os_id']);
            $this->db->update('iventoryit_os');
            $id = $data['iventoryit_os_id'];
        } else {
            $this->db->insert('iventoryit_os');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }

    // add inventoryit os
    function add_iventoryit_officeapp($data = array())
    {

        if (isset($data['iventoryit_officeapp_id'])) {
            $this->db->set('iventoryit_officeapp_id', $data['iventoryit_officeapp_id']);
        }

        if (isset($data['iventoryit_officeapp_name'])) {
            $this->db->set('iventoryit_officeapp_name', $data['iventoryit_officeapp_name']);
        }

        if (isset($data['iventoryit_officeapp_id'])) {
            $this->db->where('iventoryit_officeapp_id', $data['iventoryit_officeapp_id']);
            $this->db->update('iventoryit_officeapp');
            $id = $data['iventoryit_officeapp_id'];
        } else {
            $this->db->insert('iventoryit_officeapp');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }


    function delete($id)
    {
        $this->db->where('iventoryit_id', $id);
        $this->db->delete('iventoryit');
    }

    function delete_type($id)
    {
        $this->db->where('iventoryit_type_id', $id);
        $this->db->delete('iventoryit_type');
    }

    function delete_status($id)
    {
        $this->db->where('iventoryit_status_id', $id);
        $this->db->delete('iventoryit_status');
    }

   

}
