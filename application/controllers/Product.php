<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct(){
		parent::__construct();
        $this->load->model('ProductModel');
    }
    
	public function index()
	{
        $this->load->view('template/header');
        $this->load->view('product/manage');
        $this->load->view('template/footer');
    }
    
    public function product_list(){
        $draw = intval($this->input->get("draw"));

        $query = $this->ProductModel->product_list();

        if (empty($query->result())){
            echo json_encode('<script>alert("No Data Found")</script>');
        }else{
            foreach($query->result() as $r) {
                $data[] = array(
                        $r->cat_name,
                        $r->cat_desc,
                        $r->cat_status,
                        $r->cat_type,
                        '<button class="btn btn-mint btn-xs catInfo" data-cat="'. $r->cat_id .'" data-target="#editProductModal" data-toggle="modal">More</button>'
                    ); 
            }
            $result = array(
                "draw" => $draw,
                "recordsTotal" => $query->num_rows(),
                "recordsFiltered" => $query->num_rows(),
                "data" => $data
            );
            echo json_encode($result);
        }
    }

    public function only_products(){
        $query = $this->ProductModel->only_product_list();
        if (empty($query->result())){
            echo ('No Data Available');
        }else{
            foreach($query->result() as $r) {
                $data[] = array(
                    $r->cat_id,
                    $r->cat_name
                );
            }
            echo json_encode($data);
        }
    }

    public function add_product(){
        /*$product_name = $this->input->post('product_name');
        $product_desc = $this->input->post('product_desc');
        $product_type = $this->input->post('product_type');
        $product_status = $this->input->post('product_status');*/
        $product_data = array(
            'cat_name' => $this->input->post('product_name'),
            'cat_desc' => $this->input->post('product_desc'),
            'cat_type' => $this->input->post('product_type'),
            'cat_status' => $this->input->post('product_status'),
            'cat_created_by' => 1 //User ID shoud get here
        );
        $product_map_data = $this->input->post('product_map_data');
        //Debug Log
        empty($product_map_data) ? log_message('debug', 'Product.php : product_map_data empty') : log_message('debug', 'Product.php : product_map_data not empty');
        is_array($product_map_data) ? log_message('debug', 'Product.php : product_map_data a Array') : log_message('debug', 'Product.php : product_map_data not a Array');
        
        $res = $this->ProductModel->add_product($product_data, $product_map_data);
        
        echo ($res);
    }

    public function load_product_details(){
        $product_id = $this->input->get('product_id');
        $query = $this->ProductModel->load_product_details($product_id);
        if (empty($query->result())){
            echo ('No Data Available');
        }else{
            foreach($query->result() as $p) {
                $data[] = array(
                    $p->cat_id,
                    $p->cat_name,
                    $p->cat_desc,
                    $p->cat_status,
                    $p->cat_type
                );
            }
            echo json_encode($data);
        }
    }
}