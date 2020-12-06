<?php
class ProductModel extends CI_Model{
    
    public function product_list(){
        $query = $this->db->query('SELECT cat_id, cat_name, cat_desc, cat_status, cat_type FROM tbl_cat;');
        return $query;
    }

    public function only_product_list(){
        $query = $this->db->query('SELECT cat_id, cat_name FROM tbl_cat WHERE cat_type = 1;');
        return $query;
    }

    public function load_product_details($product_id){
        $query = $this->db->get_where('tbl_cat', array('cat_id' => $product_id));
        return $query;
    }

    public function add_product($product_data, $product_map_data){
        //return ($this->db->insert('tbl_cat', $product_data)) ? $this->db->insert_id() : false;
        $this->db->trans_start();
        if($this->db->insert('tbl_cat', $product_data)){
            $p_id = $this->db->insert_id();
            
            if(!empty($product_map_data)){
                foreach($product_map_data as $m){
                    $p_map_data = array(
                        'parent_id' => $p_id,
                        'child_id' => $m
                    );
                    $this->db->insert('tbl_cat_job', $p_map_data);
                }
            }
            
            $this->db->trans_complete();

            return $this->db->trans_status() ? TRUE : FALSE;
            empty($product_map_data) ? log_message('debug', 'ProductModel.php : product_map_data empty') : log_message('debug', 'ProductModel.php : product_map_data empty');
            is_array($product_map_data) ? log_message('debug', 'ProductModel.php : product_map_data not a Array') : log_message('debug', 'ProductModel.php : product_map_data a Array');
        }else{
            empty($product_map_data) ? log_message('debug', 'ProductModel.php : product_map_data 2 empty') : log_message('debug', 'ProductModel.php : product_map_data 2 empty');
            is_array($product_map_data) ? log_message('debug', 'ProductModel.php : product_map_data 2 not a Array') : log_message('debug', 'ProductModel.php : product_map_data 2 a Array');
            return FALSE;
        }
    }
}