<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('CustomerModel');
        $this->load->library('session');
    }

	public function manage()
	{
        $this->load->view('template/header');
        $this->load->view('customer/manage');
        $this->load->view('template/footer');
    }

    public function customer_list(){
        $draw = intval($this->input->get("draw"));

        $query = $this->CustomerModel->customer_list();

        if (empty($query->result())){
            echo json_encode('<script>alert("No Data Found")</script>');
        }else{
            foreach($query->result() as $r) {
                $data[] = array(
                        $r->cus_name,
                        $r->cus_tel,
                        $r->cus_type,
                        $r->cus_status,
                        '<button class="btn btn-mint btn-xs cusEdit" id="cusEdit" data-cus="'.$r->cus_id.'" data-target="#editCustomerModal" data-toggle="modal">Edit</button>
                        <button class="btn btn-danger btn-xs cusDel" data-cus="'.$r->cus_id.'">Delete</button>'
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

    public function load_customer(){
        $cus_id = $this->input->get('cus_id');
        $query = $this->CustomerModel->load_customer($cus_id);
        if (empty($query->result())){
            echo ('No Data Available');
        }else{
            foreach($query->result() as $p) {
                $data[] = array(
                    $p->cus_id,
                    $p->cus_name,
                    $p->cus_tel,
                    $p->cus_type,
                    $p->cus_status,
                    
                );
            }
            echo json_encode($data);
        }
    }

    public function submit_customer(){
        $data = array(
            'cus_id' => $this->input->post('cus_id'),
            'cus_name' => $this->input->post('cus_name'),
            'cus_tel' => $this->input->post('cus_tel'),
            'cus_status' => $this->input->post('cus_status'),
            'cus_type' => $this->input->post('cus_type')
        );

        echo $this->CustomerModel->submit_customer($data);
    }

    public function delete_customer(){
        $data = array(
            'cus_id' => $this->input->post('cus_id'),
            'cus_status' => 3
        );

        echo $this->CustomerModel->delete_customer($data);
    }
}