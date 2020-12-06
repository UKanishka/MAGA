<?php
class UserModel extends CI_Model{
    
    public function user_list(){
        $query = $this->db->query('SELECT user_id, u.user_name AS user_name, u.user_status AS user_status, t.user_type AS user_type 
                                    FROM tbl_user u JOIN tbl_user_type t 
                                    WHERE u.user_type = t.user_type_id;');
        return $query;
    }
}