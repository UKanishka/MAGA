<?php
class EquipmentModel extends CI_Model{
    
    public function equipment_list(){
        $query = $this->db->query('SELECT e.id AS id, e.equipment_id AS equipment_id , e.serial_no AS serial_no, c.category_name AS category, s.supplier_name AS supplier, e.invoice_no AS invoice_no, st.status_name AS equipment_status 
                                    FROM tbl_equipment_register e 
                                    JOIN tbl_category c ON c.category_id = e.category 
                                    JOIN tbl_supplier s ON s.supplier_id = e.supplier 
                                    JOIN tbl_status st ON st.status_id = e.equipment_status;');
        return $query;
    }

    public function supplier_list(){
        $query = $this->db->query('SELECT supplier_id, supplier_name FROM tbl_supplier WHERE supplier_status = 1;');
        return $query;
    }

    public function category_list(){
        $query = $this->db->query('SELECT category_id, category_name FROM tbl_category WHERE category_status = 1;');
        return $query;
    }

    public function set_equipment($data){
        if(is_null($data['id']) || empty($data['id'])){
            //array_shift($data);
            return $this->db->insert('tbl_equipment_register', $data);
        }else{
            //log_message('debug', "id :".$data['id']);
            //log_message('debug', "supplier :".$data['supplier']);
            return $this->db->update('tbl_equipment_register', $data, array('id' => $data['id']));
        }
    }

    public function get_equipment_details($id){
        $query = (is_null($id) || empty($id)) ? NULL : $this->db->get_where('tbl_equipment_register', array('id' => $id));
        return $query;
    }
}