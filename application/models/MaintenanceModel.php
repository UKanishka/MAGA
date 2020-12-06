<?php
class MaintenanceModel extends CI_Model{
    
    public function maintenance_list(){
        $query = $this->db->query('SELECT m.maintenance_id AS maintenance_id, m.maintenance_desc AS maintenance_desc, e.equipment_id AS maintenance_equipment, 
                                    m.maintenance_date AS maintenance_date, m.maintenance_cost AS maintenance_cost, u.user_name AS maintenance_reported_by
                                    FROM tbl_maintenance m
                                    JOIN tbl_equipment_register e ON e.id = m.maintenance_equipment
                                    JOIN tbl_user u ON u.user_id = m.maintenance_reported_by
                                    WHERE maintenance_status = 1');
        return $query;
    }

    public function equipment_list(){
        $query = $this->db->query('SELECT id, equipment_id FROM tbl_equipment_register WHERE equipment_status = 1;');
        return $query;
    }

    public function set_maintenance($data){
        if(is_null($data['maintenance_id']) || empty($data['maintenance_id'])){
            return $this->db->insert('tbl_maintenance', $data);
        }else{
            //log_message('debug', "id :".$data['id']);
            //log_message('debug', "supplier :".$data['supplier']);
            return $this->db->update('tbl_maintenance', $data, array('maintenance_id' => $data['maintenance_id']));
        }
    }
    
}