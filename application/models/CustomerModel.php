<?php
class CustomerModel extends CI_Model{

    public function customer_list(){
        //return $this->db->get_where('tbl_customer', array('cus_status' => 1));
        return $this->db->query('SELECT c.cus_id AS cus_id, c.cus_name AS cus_name, c.cus_tel AS cus_tel, s.status_name AS cus_status, p.price_cat_name AS cus_type FROM tbl_customer c JOIN tbl_status s on c.cus_status = s.status_id JOIN tbl_price_cat p ON c.cus_type = p.price_cat_id WHERE c.cus_status != 3');
    }

    public function load_customer($cus_id){
        $query = $this->db->get_where('tbl_customer', array('cus_id' => $cus_id));
        return $query;
    }

    public function submit_customer($data){
        if(is_null($data['cus_id']) || empty($data['cus_id'])){
            return $this->db->insert('tbl_customer', $data);
        }else{
            return $this->db->update('tbl_customer', $data, array('cus_id' => $data['cus_id']));
            //return $this->db->affected_rows();
        }
    }

    public function delete_customer($data){
        return $this->db->update('tbl_customer', array('cus_status' => $data['cus_status']), array('cus_id' => $data['cus_id']));
    }
}