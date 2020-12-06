<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

        public function __construct(){
		parent::__construct();
                $this->load->model('OrderModel');
                $this->load->library('session');
                //$this->load->library('cart');
                //STATIC $order_data_arr = 0;
	}
        //public $order_data_arr = {set; get;}

	public function index()
	{
                $this->load->view('template/header');
                $this->load->view('orders/index');
                $this->load->view('template/footer');
        }
        
        public function list()
	{
                $this->load->view('template/header');
                $this->load->view('orders/list');
                $this->load->view('template/footer');
        }
        
        public function printer_operator(){
                $this->load->view('template/header');
                $this->load->view('orders/printer_operator');
                $this->load->view('template/footer');
        }

        public function payment(){
                $this->load->view('template/header');
                $this->load->view('orders/pay');
                $this->load->view('template/footer');
        }

        public function submit_order(){
                date_default_timezone_set("Asia/Colombo");
                $order_data = array(
                        'order' => $this->input->post("order_data"),
                        'customer' => $this->input->post("cus_info")
                );

                $this->OrderModel->submit_order($order_data);
        }

        public function customer_list(){
                $output = $this->OrderModel->customer_list();
                echo json_encode($output);
        }

        public function order_list(){
                $output = $this->OrderModel->order_list();
                echo json_encode($output);
        }

        public function product_list(){ //Load Product in Add Order
                $output = null;
                $cat_type = $this->input->get("cat_type");
                $data = $this->OrderModel->load_products(!empty($cat_type) ? $cat_type : 1 );
                if(!empty($data)){
                        foreach($data as $item){
                        $output .='<a class="list-group-item" href="#" id="'.$item["cat_id"].'">'.$item["cat_name"].'</a>';
                        }
                }else{
                        $output = "No items available under this category.";
                }

                echo $output;
        }

        public function order_details(){ //Load the Accordian of jobs in Order Details
                $output = null;
                $order_master_id = $this->input->get("order_m_id");
                $data = $this->OrderModel->load_jobs($order_master_id);
                $data_printerOp = $this->OrderModel->load_printerOp();
                if(!empty($data)){
                        foreach($data as $job){
                        $output .='<div class="panel panel-bordered panel-primary">
    
                                        <!--Accordion title-->
                                        <div class="panel-heading">
                                        <h4 class="panel-title">
                                                <a data-parent="#demo-acc-info-outline" data-toggle="collapse" href="#'.$job["order_job_id"].'" aria-expanded="false" class="collapsed">Job #'.$job["order_job_id"].'</a>
                                        </h4>
                                        </div>
                        
                                        <!--Accordion content-->
                                        <div class="panel-collapse collapse" id="'.$job["order_job_id"].'" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                                <div class="row">
                                                        <div class="col-md-6">
                                                                <h3>'.$job["cat_name"].'</h3>
                                                                <h5>Width:'.$job["order_width"].' - Height:'.$job["order_height"].'</h5> 
                                                        </div>
                                                
                                                        <div class="col-md-6">
                                                                <div class="row">&nbsp;</div>
                                                                <label for="demo-select2-placeholder">Assign To &nbsp;</label>
                                                                <select id="'.$job["order_job_id"].'" class="form-control empSelect" style="width: 100%">';  
                                                                foreach($data_printerOp as $p){
                                                                        $output .= '<option value="'. $p["user_id"].'">'. $p["user_name"].'</option>';
                                                                };
                                                                $output .= '</select>
                                                        </div>
                                                </div>
                                                <div class="text-right">
                                                        <button id="'.$job["order_job_id"].'" class="btn btn-warning btnApprove">Approve</button>
                                                </div>
                                                
                                        </div>
                                        </div>
                                </div>';
                        }
                }else{
                        $output = "No pending jobs under this order.";
                }

                echo $output;
        }

        public function approve_job(){
                $order_master_id = $this->input->post("order_master_id");
                $job_order_id = $this->input->post("order_job_id");
                $emp_id = $this->input->post("emp_id"); //Assigned Emp ID
                log_message('debug', 'Emp_Id: '. $emp_id);
                $data = $this->OrderModel->approve_job($job_order_id, $emp_id, $order_master_id);
                echo $data;
        }

        public function job_list(){
                $draw = intval($this->input->get("draw"));
                $query = $this->OrderModel->job_list();
                if (empty($query->result())){
                        $result = array(
                                "draw" => $draw,
                                "recordsTotal" => $query->num_rows(),
                                "recordsFiltered" => $query->num_rows(),
                                "data" => $data[] = array()
                        );
                        echo json_encode($result);
                }else{
                foreach($query->result() as $r) {
                        $data[] = array(
                                $r->order_job_id,
                                $r->cat_name,
                                $r->order_job_master_id,
                                '<button class="btn btn-mint btn-xs job-info" data-order="'. $r->order_job_id .'" data-target="#orderDetails" data-toggle="modal">Info</button>'
                        ); 
                }
                $result = array(
                        "draw" => $draw,
                        "recordsTotal" => $query->num_rows(),
                        "recordsFiltered" => $query->num_rows(),
                        "data" => $data
                );
                //return $result;
                echo json_encode($result); 
                }
        }

        public function job_details(){
                $output = null;
                $order_job_id = $this->input->get("order_j_id");
                $data = $this->OrderModel->job_details($order_job_id);
                if(!empty($data)){
                        foreach($data as $job){
                        $output .='
                                <div class="form-group" style="margin-top:-10px;">
                                <h3>'.$job["cat_name"].'</h3>
                                <h5>Width:'.$job["order_width"].' - Height:'.$job["order_height"].'</h5> 
                                </div><div class="form-group">';

                        $child = $this->OrderModel->child($job["order_cat"]);
                        if(!empty($child)){
                        foreach($child as $ch){
                                $output .= '<label for="demo-select2-placeholder">'.$ch["cat_name"].' &nbsp;</label>
                                        <input class="form-control usage" type="number" id="'.$ch["cat_id"].'" placeholder="0.0" required></input>';
                        }        
                        }
                        $output .='</div><div class="text-right">
                                <button id="btnComplete" class="btn btn-success">Complete</button>
                                </div> ';
                                
                        }
                }else{
                        $output = "No details available.";
                }

                echo $output;
        }

        public function complete_order(){
                $order_job_id = $this->input->post("order_job_id");
                $order_usage = $this->input->post("usage");
                echo $this->OrderModel->complete_order($order_job_id, $order_usage);
        }

        public function payment_order_list(){
                $output = $this->OrderModel->load_pending_payments();
                echo json_encode($output);
        }

        public function order_details_for_pay(){ //Load the Accordian of jobs in Order Payment
                $output = null;
                $order_master_id = $this->input->get("order_m_id");
                $customer_tel = $this->input->get("customer");
                $data = $this->OrderModel->load_jobs_for_pay($order_master_id);
                //$data_printerOp = $this->OrderModel->load_printerOp();
                if(!empty($data)){
                        foreach($data as $job){
                        $output .='<div class="panel panel-bordered panel-primary">
    
                                        <!--Accordion title-->
                                        <div class="panel-heading">
                                        <h4 class="panel-title">
                                                <a data-parent="#demo-acc-info-outline" data-toggle="collapse" href="#'.$job["order_job_id"].'" aria-expanded="false" class="collapsed">Job #'.$job["order_job_id"].'</a>
                                        </h4>
                                        </div>
                        
                                        <!--Accordion content-->
                                        <div class="panel-collapse collapse" id="'.$job["order_job_id"].'" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                                <div class="row">
                                                        <div class="col-md-6">
                                                                <h3>'.$job["cat_name"].'</h3>
                                                                <h5>Width:'.$job["order_width"].' - Height:'.$job["order_height"].'</h5> 
                                                        </div>
                                                
                                                        <div class="col-md-6">
                                                                <div class="row">&nbsp;</div>
                                                                <label for="demo-select2-placeholder">Status &nbsp;</label>
                                                                <h4>'.$job["order_status"].'</h4>
                                                        </div>
                                                </div>
                                                
                                        </div>
                                        </div>
                                </div>';
                        }
                        $output .= '<div class="text-right">
                                        <div class="row">&nbsp;</div>
                                        <button id="btnPay" data-orderId="'.$job["order_job_master_id"].'" data-cus="'.$customer_tel.'" class="btn btn-warning btnPay" data-target="#paymentModal" data-toggle="modal">Pay</button>
                                        </div>';
                        //global $order_data_arr;
                        $order_data_arr = $data;
                        //(empty($order_data_arr)) ? log_message('debug', 'Data Array is Empty') : log_message('debug', 'Data Array is Not Empty');
                }else{
                        $output = "No pending jobs under this order.";
                }

                echo $output;
        }

        public function pay(){
                $order_master_id = $this->input->get('order_m_id');
                (empty($order_master_id)) ? log_message('debug', 'Data Array is Empty') : log_message('debug', 'Data Array is Not Empty');
                $customer_tel = $this->input->get("customer");

                $pay_history = $this->OrderModel->load_pay_history($order_master_id);
                //log_message('debug', $pay_history);
                if(empty($pay_history)){
                        $order_details = $this->OrderModel->load_jobs_for_pay($order_master_id);
                
                        if(!empty($order_details)){
                                $total = 0;
                                foreach($order_details as $job){
                                        $job_data = array(
                                                'width' => $job['order_width'],
                                                'height' => $job["order_height"],
                                                'cat' => $job["order_cat"]
                                        );

                                        $price = $this->OrderModel->load_price($job_data['cat'], $customer_tel);
                                        foreach($price as $p)
                                        $total +=  ($job['order_width'] * $job['order_height'] * $p['price_product_price']);
                                        $output = array(
                                                'total' => $total,
                                                'outstanding' => $total,
                                                'payed' => '0'
                                        );
                                }
                                echo json_encode($output);
                        }else{
                                echo "00.00";
                        }
                }else{
                        foreach($pay_history as $pay){
                                $pay_hist = array(
                                        'total' => $pay['pay_order_total'],
                                        'outstanding' => $pay['pay_outstanding_amount'],
                                        'payed' => $pay['pay_payed_amount']
                                );
                        }
                        echo json_encode($pay_hist);
                }

                
                
        }

        public function pay_confirm(){
                $data = array(
                        'pay_order_master_id' => $this->input->post('order_m_id'),
                        'pay_order_total' => ($total = $this->input->post('total')),
                        'pay_payed_amount' => ($payed = $this->input->post('payed')),
                        'pay_outstanding_amount' => ($outstanding = floatval($this->input->post('outstanding')) - floatval($payed)),
                        'pay_date' => date("Y-m-d H:i:s"),
                        'pay_user' => $this->session->has_userdata('user_id') ? $this->session->userdata('user_id') : 1,
                        'pay_status' => ($outstanding == 0) ? 2 : 1
                );
                echo $this->OrderModel->pay_confirm($data);
                
        }
}
