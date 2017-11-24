<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
* user Model Class
 *
 * @package     OSS
 * @subpackage  Models
 * @category    Models
 * @author      Supriadi <adi@rumahcg.com>
 */

class Itservice_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
   
    
    // Get From Databases
    function get($params = array())
    {
        $this->db->select('itservice.itservice_id, itservice_date_create,
                         itservice_date_end, itservice_categories_id, itservice_statuss_id, itservice_issue, itservice_image, itservice_solution, employe_employe_id'); 
        
        if(isset($params['id']))
        {
            $this->db->where('itservice_id', $params['id']);
        }
        
        if(isset($params['itservice_id']))
        {
            $this->db->where('itservice_id', $params['itservice_id']);
        }
        
        if(isset($params['itservice_date_create']))
        {
            $this->db->where('itservice_date_create', $params['itservice_date_create']);
        }
        
        if(isset($params['itservice_date_end']))
        {
            $this->db->where('itservice_date_end', $params['itservice_date_end']);
        }

        if(isset($params['itservice_categories_id']))
        {
            $this->db->where('itservice_categories_id', $params['itservice_categories_id']);
        }

        if(isset($params['itservice_statuss_id']))
        {
            $this->db->where('itservice_statuss_id', $params['itservice_statuss_id']);
        }

        if(isset($params['itservice_issue']))
        {
            $this->db->where('itservice_issue', $params['itservice_issue']);
        }

        if(isset($params['itservice_image']))
        {
            $this->db->where('itservice_image', $params['itservice_image']);
        }
        if(isset($params['itservice_solution']))
        {
            $this->db->where('itservice_solution', $params['itservice_solution']);
        }

        if(isset($params['employe_employe_id']))
        {
            $this->db->where('employe_employe_id', $params['employe_employe_id']);
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
            $this->db->order_by('itservice_date_create', 'desc');
        }

        $this->db->select('
            itservice_status.itservice_status_id, itservice_status.itservice_status_name, 
            Itservice_category.itservice_category_id, Itservice_category.itservice_category_name, 
            employe.employe_id, employe.employe_name, employe.departement_departement_id, 
            departement.departement_id, departement.departement_name'
            );
        $this->db->join('itservice_status', 'itservice_status.itservice_status_id = itservice.itservice_statuss_id', 'left');
        $this->db->join('Itservice_category', 'Itservice_category.itservice_category_id = itservice.itservice_categories_id', 'left');
        $this->db->join('employe', 'employe.employe_id = itservice.employe_employe_id', 'left');
        $this->db->join('departement', 'departement.departement_id = employe.departement_departement_id', 'left');

        if (isset($params['itservice_status_id'])) {
            $this->db->where('itservice_status_id', $params['itservice_status_id']);
        }
        if (isset($params['itservice_status_name'])) {
            $this->db->where('itservice_status_name', $params['itservice_status_name']);
        }
        if(isset($params['itservice_category_id']))
        {
            $this->db->where('itservice_category_id', $params['itservice_category_id']);
        }
        if(isset($params['itservice_category_name']))
        {
            $this->db->where('itservice_category_name', $params['itservice_category_name']);
        }
        if(isset($params['employe_id']))
        {
            $this->db->where('employe_id', $params['employe_id']);
        }
        if(isset($params['employe_name']))
        {
            $this->db->where('employe_name', $params['employe_name']);
        }
        if(isset($params['departement_departement_id']))
        {
            $this->db->where('departement_departement_id', $params['departement_departement_id']);
        }
        if(isset($params['departement_id']))
        {
            $this->db->where('departement_id', $params['departement_id']);
        }
        if(isset($params['departement_name']))
        {
            $this->db->where('departement_name', $params['departement_name']);
        }

        $res = $this->db->get('itservice');

        if(isset($params['id']))
        {
            return $res->row_array();
        }
        else
        {
            return $res->result_array();
        }
    }


     // Get category From Databases
    function get_category($params = array())
    {
        $this->db->select('Itservice_category.itservice_category_id, itservice_category_name'); 
        
        if(isset($params['id']))
        {
            $this->db->where('Itservice_category.itservice_category_id', $params['id']);
        }
        if(isset($params['itservice_category_id']))
        {
            $this->db->where('Itservice_category.itservice_category_id', $params['itservice_category_id']);
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
            $this->db->order_by('Itservice_category.itservice_category_id', 'desc');
        }
        
        $res = $this->db->get('Itservice_category');

        if(isset($params['id']))
        {
            return $res->row_array();
        }
        else
        {
            return $res->result_array();
        }
    }
    
    // Get status From Databases
    function get_status($params = array())
    {
        $this->db->select('itservice_status.itservice_status_id, itservice_status_name');

        if (isset($params['id'])) {
            $this->db->where('itservice_status.itservice_status_id', $params['id']);
        }
        if (isset($params['itservice_status_id'])) {
            $this->db->where('itservice_status.itservice_status_id', $params['itservice_status_id']);
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
            $this->db->order_by('itservice_status.itservice_status_id', 'desc');
        }

        $res = $this->db->get('itservice_status');

        if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
    }
    // add IT Service
    function add($data = array()) {
    
        //untuk table     
         if(isset($data['itservice_id'])) {
            $this->db->set('itservice_id', $data['itservice_id']);
        }

        if(isset($data['itservice_date_create'])) {
            $this->db->set('itservice_date_create', $data['itservice_date_create']);
        }
        
        if(isset($data['itservice_date_end'])) {
            $this->db->set('itservice_date_end', $data['itservice_date_end']);
        }
        
        if(isset($data['itservice_date_end'])) {
            $this->db->set('itservice_date_end', $data['itservice_date_end']);
        }
        
        if(isset($data['itservice_categories_id'])) {
            $this->db->set('itservice_categories_id', $data['itservice_categories_id']);
        }
        
        if(isset($data['itservice_statuss'])) {
            $this->db->set('itservice_statuss', $data['itservice_statuss']);
        }
        
        if(isset($data['itservice_issue'])) {
            $this->db->set('itservice_issue', $data['itservice_issue']);
        }
        
        if(isset($data['itservice_image'])) {
            $this->db->set('itservice_image', $data['itservice_image']);
        }
        
        if(isset($data['itservice_solution'])) {
            $this->db->set('itservice_solution', $data['itservice_solution']);
        }
        if(isset($data['employe_employe_id'])) {
            $this->db->set('employe_employe_id', $data['employe_employe_id']);
        }

        if (isset($data['itservice_id'])) {
            
             $this->db->where('itservice_id', $data['itservice_id']);
             $this->db->update('itservice');
             $id = $data['itservice_id'];
         }else{
            $this->db->insert('itservice');
            $id = $this->db->insert_id();
         }

         $status= $this->db->affected_rows();
         return $id;

        /* if(!isset($data['itservice_id'])){
            $this->db->insert('itservice');
            $id = $this->db->insert_id();
        }*/
    }


     // add IT Service Category
    function add_itservice_category($data = array()) {
        
     if(isset($data['itservice_category_id'])) {
        $this->db->set('itservice_category_id', $data['itservice_category_id']);
    }

    if(isset($data['itservice_category_name'])) {
        $this->db->set('itservice_category_name', $data['itservice_category_name']);
    }

    if (isset($data['itservice_category_id'])) {
        $this->db->where('itservice_category_id', $data['itservice_category_id']);
        $this->db->update('itservice_category');
        $id = $data['itservice_category_id'];
    } else {
        $this->db->insert('itservice_category');
        $id = $this->db->insert_id();
    }

    $status = $this->db->affected_rows();
    return ($status == 0) ? FALSE : $id;
    }

     // add IT Service Status
    function add_itservice_status($data = array())
    {

        if (isset($data['itservice_status_id'])) {
            $this->db->set('itservice_status_id', $data['itservice_status_id']);
        }

        if (isset($data['itservice_status_name'])) {
            $this->db->set('itservice_status_name', $data['itservice_status_name']);
        }

        if (isset($data['itservice_status_id'])) {
            $this->db->where('itservice_status_id', $data['itservice_status_id']);
            $this->db->update('itservice_status');
            $id = $data['itservice_status_id'];
        } else {
            $this->db->insert('itservice_status');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }

    function delete($id) {
        $this->db->where('itservice_id', $id);
        $this->db->delete('itservice');
    }

    function delete_category($id) {
        $this->db->where('itservice_category_id', $id);
        $this->db->delete('itservice_category');
    }

    function delete_status($id)
    {
        $this->db->where('itservice_status_id', $id);
        $this->db->delete('itservice_status');
    }

    public function add_itservice_image($params = array())
    {
        if (isset($params['itservice_id'])) {
            $this->db->set('itservice_itservice_id', $params['itservice_id']);
        }

        if (isset($params['name'])) {
            $this->db->set('itservice_image_path', $params['name']);
        }

        if (isset($params['id'])) {
            $this->db->where('itservice_image_id', $params['id']);
            $this->db->update('itservice_image');
            return $params['id'];
        }else{
            $this->db->insert('itservice_image');
            return $this->db->insert_id();
        }
    }

    public function get_image($params = array())
    {
        if (isset($params['itservice_id'])) {
            $this->db->where('itservice_itservice_id', $params['itservice_id']);
        }

        if (isset($params['id'])) {
            $this->db->where('itservice_image_id', $params['id']);
        }

        $ret = $this->db->get('itservice_image');

        if (isset($params['id'])) {
            return $ret->row_array();
        }else{  
            return $ret->result_array();
        }
    }

    public function delete_image($id = null)
    {
        $ret = false;
        if (!is_null($id)) {
            $this->db->where('itservice_image_id', $id);
            $this->db->delete('itservice_image');
            $ret = true;
        }

        return $ret;
    }

}
