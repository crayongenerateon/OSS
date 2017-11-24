<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
* employe Model Class
 *
 * @package     GROOT
 * @subpackage  Models
 * @category    Models
 * @author      Supriadi <adi@rumahcg.com>
 */

class Employe_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    var $table = 'employe';
    
    
    // Get From Databases
    function get($params = array())
    {
        $this->db->select('employe.employe_id, employe_nrp, employe_name, employe_born_date, employe_born_place, employe_citizen, employe_address, employe_address2, employe_city, employe_golongan, employe_ns, employe_superior, employe_postal_code, employe_email, employe_phone, employe_start_work_date, employe_permanent_date, 
            employe_update, employe_images,
            kelamin_kelamin_id, kelamin.kelamin_name, 
            religion_religion_id, religion.religion_name, 
            division_division_id, division.division_name,
            departement_departement_id, departement.departement_name,
            jabatan_jabatan_id, jabatan.jabatan_name,
            pendidikan_pendidikan_id, pendidikan.pendidikan_name,
            status_status_id, status.status_name,
            kawin_kawin_id, kawin.kawin_name'); 
        
        if(isset($params['id']))
        {
            $this->db->where('employe.employe_id', $params['id']);
        }
        
        if(isset($params['employe_id']))
        {
            $this->db->where('employe.employe_id', $params['employe_id']);
        }

        if(isset($params['employe_nrp']))
        {
            $this->db->where('employe.employe_nrp', $params['employe_nrp']);
        }

        if(isset($params['nrp']))
        {
            $this->db->where('employe.employe_nrp', $params['nrp']);
        }
        
        if(isset($params['employe_name']))
        {
            $this->db->like('employe_name', $params['employe_name']);
        }

        if(isset($params['employe_born_date']))
        {
            $this->db->where('employe_born_date', $params['employe_born_date']);
        }
        
        if(isset($params['employe_born_place']))
        {
            $this->db->where('employe_born_place', $params['employe_born_place']);
        }
        
        if(isset($params['employe_city']))
        {
            $this->db->where('employe_city', $params['employe_city']);
        }

        if(isset($params['employe_address']))
        {
            $this->db->where('employe_address', $params['employe_address']);
        }

        if(isset($params['employe_address2']))
        {
            $this->db->where('employe_address2', $params['employe_address2']);
        }

        if(isset($params['employe_golongan']))
        {
            $this->db->where('employe_golongan', $params['employe_golongan']);
        }

        if(isset($params['employe_ns']))
        {
            $this->db->where('employe_ns', $params['employe_ns']);
        }

        if(isset($params['employe_superior']))
        {
            $this->db->where('employe_superior', $params['employe_superior']);
        }

        if(isset($params['employe_postal_code']))
        {
            $this->db->where('employe_postal_code', $params['employe_postal_code']);
        }

        if(isset($params['employe_email']))
        {
            $this->db->where('employe_email', $params['employe_email']);
        }

        if(isset($params['employe_phone']))
        {
            $this->db->where('employe_phone', $params['employe_phone']);
        }

        if(isset($params['employe_start_work_date']))
        {
            $this->db->where('employe_start_work_date', $params['employe_start_work_date']);
        }

        if(isset($params['employe_permanent_date']))
        {
            $this->db->where('employe_permanent_date', $params['employe_permanent_date']);
        }

        if(isset($params['employe_update']))
        {
            $this->db->where('employe_update', $params['employe_update']);
        }

        if(isset($params['employe_citizen']))
        {
            $this->db->where('employe_citizen', $params['employe_citizen']);
        }
        
        if(isset($params['kelamin_kelamin_id']))
        {
            $this->db->where('kelamin_kelamin_id', $params['kelamin_kelamin_id']);
        }

        if(isset($params['religion_id']))
        {
            $this->db->where('religion_religion_id', $params['religion_id']);
        }

        if(isset($params['division_id']))
        {
            $this->db->where('division_division_id', $params['division_id']);
        }

        if(isset($params['departement_id']))
        {
            $this->db->where('departement_departement_id', $params['departement_id']);
        }

        if(isset($params['jabatan_id']))
        {
            $this->db->where('jabatan_jabatan_id', $params['jabatan_id']);
        }

        if(isset($params['pendidikan_id']))
        {
            $this->db->where('pendidikan_pendidikan_id', $params['pendidikan_id']);
        }

        if(isset($params['status_id']))
        {
            $this->db->where('status_status_id', $params['status_id']);
        }

        if(isset($params['kawin_id']))
        {
            $this->db->where('kawin_kawin_id', $params['kawin_id']);
        }

        if(isset($params['employe_images']))
        {
            $this->db->where('employe_images', $params['employe_images']);
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
            $this->db->order_by('employe_name', 'asc');
        }

    
        $this->db->join('kelamin', 'kelamin.kelamin_id = employe.kelamin_kelamin_id', 'left');
        $this->db->join('religion', 'religion.religion_id = employe.religion_religion_id', 'left');
        $this->db->join('division', 'division.division_id = employe.division_division_id', 'left');
        $this->db->join('departement', 'departement.departement_id = employe.departement_departement_id', 'left');
        $this->db->join('jabatan', 'jabatan.jabatan_id = employe.jabatan_jabatan_id', 'left');
        $this->db->join('pendidikan', 'pendidikan.pendidikan_id = employe.pendidikan_pendidikan_id', 'left');
        $this->db->join('status', 'status.status_id = employe.status_status_id', 'left');
        $this->db->join('kawin', 'kawin.kawin_id = employe.kawin_kawin_id', 'left');

        $res = $this->db->get('employe');

        if(isset($params['id']) || isset($params['employe_nrp']))
        {
            return $res->row_array();
        }
        else
        {
            return $res->result_array();
        }
    }
    

    function add($data = array()) {
        
        if(isset($data['employe_id'])) {
            $this->db->set('employe_id', $data['employe_id']);
        }
        
        if(isset($data['employe_nrp'])) {
            $this->db->set('employe_nrp', $data['employe_nrp']);
        }

        if(isset($data['employe_name'])) {
            $this->db->set('employe_name', $data['employe_name']);
        }
        
        if(isset($data['employe_born_date'])) {
            $this->db->set('employe_born_date', $data['employe_born_date']);
        }
        
        if(isset($data['employe_born_place'])) {
            $this->db->set('employe_born_place', $data['employe_born_place']);
        }
        
        if(isset($data['employe_citizen'])) {
            $this->db->set('employe_citizen', $data['employe_citizen']);
        }
        
        if(isset($data['employe_phone'])) {
            $this->db->set('employe_phone', $data['employe_phone']);
        }
        
        if(isset($data['employe_address'])) {
            $this->db->set('employe_address', $data['employe_address']);
        }
        
        if(isset($data['employe_address2'])) {
            $this->db->set('employe_address2', $data['employe_address2']);
        }
        if(isset($data['employe_city'])) {
            $this->db->set('employe_city', $data['employe_city']);
        }
        
        if(isset($data['employe_golongan'])) {
            $this->db->set('employe_golongan', $data['employe_golongan']);
        }
        
        if(isset($data['employe_ns'])) {
            $this->db->set('employe_ns', $data['employe_ns']);
        }
        
        if(isset($data['employe_superior'])) {
            $this->db->set('employe_superior', $data['employe_superior']);
        }
        
        if(isset($data['employe_postal_code'])) {
            $this->db->set('employe_postal_code', $data['employe_postal_code']);
        }
        
        if(isset($data['employe_email'])) {
            $this->db->set('employe_email', $data['employe_email']);
        }
        
        if(isset($data['employe_start_work_date'])) {
            $this->db->set('employe_start_work_date', $data['employe_start_work_date']);
        }
        
        if(isset($data['employe_permanent_date'])) {
            $this->db->set('employe_permanent_date', $data['employe_permanent_date']);
        }
        
        if(isset($data['employe_update'])) {
            $this->db->set('employe_update', $data['employe_update']);
        }
        
        if(isset($data['kelamin_kelamin_id'])) {
            $this->db->set('kelamin_kelamin_id', $data['kelamin_kelamin_id']);
        }
        
        if(isset($data['religion_religion_id'])) {
            $this->db->set('religion_religion_id', $data['religion_religion_id']);
        }
        
        if(isset($data['division_division_id'])) {
            $this->db->set('division_division_id', $data['division_division_id']);
        }
        
        if(isset($data['departement_departement_id'])) {
            $this->db->set('departement_departement_id', $data['departement_departement_id']);
        }
        
        if(isset($data['jabatan_jabatan_id'])) {
            $this->db->set('jabatan_jabatan_id', $data['jabatan_jabatan_id']);
        }
        
        if(isset($data['pendidikan_pendidikan_id'])) {
            $this->db->set('pendidikan_pendidikan_id', $data['pendidikan_pendidikan_id']);
        }
        
        if(isset($data['status_status_id'])) {
            $this->db->set('status_status_id', $data['status_status_id']);
        }
        
        if(isset($data['kawin_kawin_id'])) {
            $this->db->set('kawin_kawin_id', $data['kawin_kawin_id']);
        }

        if(isset($data['employe_images'])) {
            $this->db->set('employe_images', $data['employe_images']);
        }
        
        
        if (isset($data['employe_id'])) {
            $this->db->where('employe_id', $data['employe_id']);
            $this->db->update('employe');
            $id = $data['employe_id'];
        } else {
            $this->db->insert('employe');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }


function delete($id) {
    $this->db->set('employe_deleted', 1);
    $this->db->where('employe_id', $id);
    $this->db->update('employe');
}

function delete_role($id) {
    $this->db->where('role_id', $id);
    $this->db->delete('employe_role');
}

public function add_employe_image($params = array())
    {
        if (isset($params['employe_id'])) {
            $this->db->set('employe_employe_id', $params['employe_id']);
        }

        if (isset($params['name'])) {
            $this->db->set('employe_images_path', $params['name']);
        }

        if (isset($params['id'])) {
            $this->db->where('employe_images_id', $params['id']);
            $this->db->update('employe_images');
            return $params['id'];
        }else{
            $this->db->insert('employe_images');
            return $this->db->insert_id();
        }
    }

    public function get_image($params = array())
    {
        if (isset($params['employe_id'])) {
            $this->db->where('employe_employe_id', $params['employe_id']);
        }

        if (isset($params['id'])) {
            $this->db->where('employe_images_id', $params['id']);
        }

        $ret = $this->db->get('employe_images');

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
            $this->db->where('employe_images_id', $id);
            $this->db->delete('employe_images');
            $ret = true;
        }

        return $ret;
    }


}
