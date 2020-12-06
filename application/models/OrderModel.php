<?php
class OrderModel extends CI_Model{

    function submit_order($order_data){

        $order_master_id = date("YmdHi");

        foreach($order_data['customer'] as $cus){
            $cus_tel = $cus[1];
            $data_cus = array(
                'cus_name' => $cus[0],
                'cus_tel' => $cus[1],
                'cus_type' => $cus[2]
            );
            $this->db->trans_start();
            empty($cus[0]) ? : $this->db->insert("tbl_customer", $data_cus);
        };

        $data_Order = array(
            'order_master_id' => $order_master_id,
            'order_master_date' => date("Y-m-d H:i:s"),
            'order_master_created_by' => $this->session->has_userdata('user_id') ? $this->session->userdata('user_id') : 1,
            'order_master_cus_tel' => $cus_tel
        );
        
        $this->db->insert("tbl_order_master", $data_Order);

        
        $data = array();
        //$i = 1;
        foreach($order_data['order'] as $job){
            $data[] = array(
                'order_job_master_id' => $order_master_id,
                'order_cat' => $job[3],
                'order_width' => $job[1],
                'order_height' => $job[2]
            );
            //$i += $i;
        };

        $this->db->insert_batch("tbl_order_job", $data);
        $this->db->trans_complete();
    }

    public function customer_list(){
        $draw = intval($this->input->get("draw"));

        $query = $this->db->get_where('tbl_customer', array('cus_status' => 1));

        if (empty($query->result())){
            echo json_encode('<script>alert("No Data Found")</script>');
        }else{
            foreach($query->result() as $r) {
                $data[] = array(
                        $r->cus_name,
                        $r->cus_tel,
                        '<button class="btn btn-mint btn-xs e-order" id="e-order" data-cus="'.$r->cus_tel.'" data-target="#addOrderModal" data-toggle="modal">Add Order</button>'
                    ); 
            }
            $result = array(
                "draw" => $draw,
                "recordsTotal" => $query->num_rows(),
                "recordsFiltered" => $query->num_rows(),
                "data" => $data
            );
            return $result;
        }
    }

    public function order_list(){
        $draw = intval($this->input->get("draw"));

        //$query = $this->db->get_where('tbl_order_master', array('order_master_status >=' => 1));
        $query = $this->db->query('SELECT O.order_master_id AS order_master_id, O.order_master_date AS order_master_date, O.order_master_cus_tel AS order_master_cus_tel , U.user_name AS user_name FROM tbl_order_master O JOIN tbl_user U 
        WHERE O.order_master_created_by = U.user_id AND O.order_master_status = 1');

        if (empty($query->result())){
            echo json_encode('<script>alert("No Data Found")</script>');
        }else{
            foreach($query->result() as $r) {
                $data[] = array(
                        $r->order_master_id,
                        $r->order_master_date,
                        $r->order_master_cus_tel,
                        $r->user_name,
                        '<button class="btn btn-mint btn-xs order-info" data-order="'. $r->order_master_id .'" data-cus="'. $r->order_master_cus_tel .'" data-target="#orderDetails" data-toggle="modal">Info</button>'
                    ); 
            }
            $result = array(
                "draw" => $draw,
                "recordsTotal" => $query->num_rows(),
                "recordsFiltered" => $query->num_rows(),
                "data" => $data
            );
            return $result;
        }
    }

    public function load_products($cat_type){
        $query = $this->db->get_where('tbl_cat',array('cat_type' => $cat_type ,'cat_status'=> 1));
        return $query->result_array();
    }

    public function load_jobs($order_master_id){ //Load jobs for admin approval
        //$query = $this->db->get_where('tbl_order_job',array('order_job_master_id' => $order_master_id ,'order_status'=> 1));
        $query = $this->db->query('SELECT j.order_job_id AS order_job_id, j.order_job_master_id AS order_job_master_id, j.order_width AS order_width, j.order_height AS order_height, c.cat_name AS cat_name FROM tbl_order_job j JOIN tbl_cat c WHERE j.order_cat = c.cat_id AND j.order_status = 1 AND j.order_status = 1 AND order_job_master_id ='.$order_master_id);
        return $query->result_array();
    }

    public function approve_job($order_job_id, $emp_id, $order_master_id){
        $this->db->trans_start();
        $this->db->update('tbl_order_job', array('order_status' => 2, 'order_assigned_emp' => $emp_id), array('order_job_id' => $order_job_id));

        $check_jobs = $this->db->get_where('tbl_order_job', array('order_job_master_id' => $order_master_id, 'order_status' => 1));
        if(empty($check_jobs->result_array())){
            $this->db->update('tbl_order_master', array('order_master_status' => 2), array('order_master_id' => $order_master_id));
        }
        $this->db->trans_complete();
        return $this->db->trans_status() ? TRUE : FALSE;
    }

    public function load_printerOp(){
        $query = $this->db->get_where('tbl_user', array('user_type' => 2, 'user_status' => 1));
        return $query->result_array();
    }

    public function job_list(){
        //$query = $this->db->get_where('tbl_order_job', array('order_status' => 1));
        $query = $this->db->query('SELECT j.order_job_id AS order_job_id, j.order_job_master_id AS order_job_master_id, c.cat_name AS cat_name FROM tbl_order_job j JOIN tbl_cat c WHERE j.order_cat = c.cat_id AND j.order_status = 2');
        return $query;
    }

    public function job_details($order_job_id){ //Details of a single job
        //$query = $this->db->get_where('tbl_order_job',array('order_job_id' => $order_job_id ,'order_status'=> 1));
        $query = $this->db->query('SELECT j.order_job_id AS order_job_id, j.order_job_master_id AS order_job_master_id, j.order_width AS order_width, j.order_height AS order_height, c.cat_name AS cat_name, j.order_cat AS order_cat FROM tbl_order_job j JOIN tbl_cat c WHERE j.order_cat = c.cat_id AND j.order_status = 2 AND j.order_job_id = '.$order_job_id );
        return $query->result_array();
    }

    public function child($order_cat){ //material usage
        $query = $this->db->query('SELECT c.cat_id AS cat_id, c.cat_name AS cat_name FROM tbl_cat_job j JOIN tbl_cat c where j.parent_id ='.$order_cat.' AND j.child_id = c.cat_id');
        return $query->result_array();
    }

    public function complete_order($order_job_id, $order_usage){

        $this->db->trans_start();
        foreach($order_usage as $usage){
            $data = array(
                "usage_job_id" => $order_job_id,
                "usage_product_id" => $usage[0],
                "usage_value" => $usage[1]
            );
            $this->db->insert("tbl_usage", $data);
        }
        $this->db->update('tbl_order_job', array('order_status' => 3), array('order_job_id' => $order_job_id));
        $this->db->trans_complete();

        return $this->db->trans_status() ? TRUE : FALSE;
    }

    public function load_pending_payments(){ //Orders list for payment
        $draw = intval($this->input->get("draw"));

        $query = $this->db->query('SELECT O.order_master_id AS order_master_id, O.order_master_date AS order_master_date, O.order_master_cus_tel AS order_master_cus_tel , U.user_name AS user_name FROM tbl_order_master O JOIN tbl_user U 
        WHERE O.order_master_created_by = U.user_id AND O.order_master_status BETWEEN 2 AND 3');
        
        if (empty($query->result())){
            echo json_encode('<script>alert("No Data Found")</script>');
        }else{
            foreach($query->result() as $r) {
                $data[] = array(
                        $r->order_master_id,
                        $r->order_master_date,
                        $r->order_master_cus_tel,
                        $r->user_name,
                        '<button class="btn btn-mint btn-xs order-info" data-order="'. $r->order_master_id .'" data-cus="'. $r->order_master_cus_tel .'" data-target="#orderDetails" data-toggle="modal">Info</button>'
                    ); 
            }
            $result = array(
                "draw" => $draw,
                "recordsTotal" => $query->num_rows(),
                "recordsFiltered" => $query->num_rows(),
                "data" => $data
            );
            return $result;
        }
    }

    public function load_jobs_for_pay($order_master_id){ //Load jobs for payment
        //$query = $this->db->get_where('tbl_order_job',array('order_job_master_id' => $order_master_id ,'order_status'=> 1));
        $query = $this->db->query('SELECT j.order_job_id AS order_job_id, j.order_job_master_id AS order_job_master_id, j.order_width AS order_width, j.order_height AS order_height, j.order_cat as order_cat, c.cat_name AS cat_name, s.order_status AS order_status FROM tbl_order_job j JOIN tbl_cat c, tbl_order_status s WHERE j.order_cat = c.cat_id AND j.order_status = s.order_status_id AND (j.order_status BETWEEN 2 AND 3) AND order_job_master_id ='.$order_master_id);
        return $query->result_array();
    }

    public function load_price($order_cat, $customer_tel){
        $ctype = $this->db->query('SELECT cus_type FROM tbl_customer WHERE cus_tel ='.$customer_tel)->row();
        //$cus_type = $cus_type->get();
        //$cus_type = $this->db->select('cus_type')->get('tbl_customer')->row();
        $query = $this->db->get_where('tbl_price_product', array('price_product_product_id' => $order_cat, 'price_product_cat_id' => $ctype->cus_type));
        return $query->result_array();
    }

    public function load_pay_history($order_master_id){
        $query = $this->db->query('SELECT * FROM tbl_payment WHERE pay_order_master_id ='.$order_master_id.' AND pay_status = 1 ORDER BY pay_id DESC LIMIT 1');
        //$query = $this->db->get_where('tbl_payment', array('pay_order_master_id' => $order_master_id, 'pay_status' => 1));
        //return $query->last_row();
        return $query->result_array();
    }

    public function pay_confirm($data){
        $this->db->trans_start();
        foreach($data as $d){
            if($d['pay_status']==2){
                $this->db->update('tbl_order_master', array('order_master_status' => 4), array('order_master_id' => $d['pay_order_master_id']));
            }
        }
        $this->db->insert('tbl_payment', $data);
        $this->db->trans_complete();
        return $this->db->trans_status() ? TRUE : FALSE;
    }
}