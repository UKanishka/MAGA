<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('UserModel');
	}

	public function index()
	{
		$this->load->view('users/login');
	}

	public function manage()
	{
		$this->load->view('template/header');
		$this->load->view('users/manage');
		$this->load->view('template/footer');
	}

	public function user_list(){
		$draw = intval($this->input->get("draw"));

        $query = $this->UserModel->user_list();

        if (empty($query->result())){
            echo json_encode('<script>alert("No Data Found")</script>');
        }else{
            foreach($query->result() as $r) {
                $data[] = array(
                        $r->user_name,
                        $r->user_type,
                        $r->user_status,
                        '<button class="btn btn-mint btn-xs userInfo" data-user="'. $r->user_id .'" data-target="#orderDetails" data-toggle="modal">More</button>'
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
}
