<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends CI_Controller {

    public function __construct(){
		parent::__construct();
        $this->load->model('MaintenanceModel');
        date_default_timezone_set("Asia/Colombo");
    }
    
	public function index()
	{
        $this->load->view('template/header');
        $this->load->view('maintenance/index');
        $this->load->view('template/footer');
    }

    public function maintenance_list(){
        $draw = intval($this->input->get("draw"));

        $query = $this->MaintenanceModel->maintenance_list();

        if (empty($query->result())){
            echo json_encode('No Data Found');
        }else{
            foreach($query->result() as $r) {
                $data[] = array(
                        $r->maintenance_id,
                        $r->maintenance_equipment,
                        $r->maintenance_desc,
                        $r->maintenance_date,
                        $r->maintenance_cost,
                        $r->maintenance_reported_by,
                        '<button class="btn btn-mint btn-xs maintenanceInfo" data-maintenance="'. $r->maintenance_id .'" data-target="#addMaintainModal" data-toggle="modal">More</button>'
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

    public function equipment_list(){
        $query = $this->MaintenanceModel->equipment_list();
        if (empty($query->result())){
            echo ('No Data Available');
        }else{
            foreach($query->result() as $r) {
                $data[] = array(
                    $r->id,
                    $r->equipment_id
                );
            }
            echo json_encode($data);
        }
    }


    function do_upload(){
        log_message('debug', "in do_upload");

        $config['upload_path']="./assets/maintenance";
        $config['allowed_types']='gif|jpg|png|pdf';
        $config['encrypt_name'] = TRUE;
         
        $this->load->library('upload',$config);
        if($this->upload->do_upload("invoice")){
            log_message('debug', "upload true");
            $data = array('upload_data' => $this->upload->data());
 
            //$title= $this->input->post('title');
            $image= $data['upload_data']['file_name']; 
            
            return $image;
            //$result= $this->upload_model->save_upload($title,$image);
            //echo json_decode($result);
        }else{ return NULL;}
    }

    public function set_maintenance(){
        log_message('debug', "in set_maintenance");
        $image = $this->do_upload();
        log_message('debug', "in set_maintenance 2");
        $maintenance_id = $this->input->post('id');
        $data = array(
            'maintenance_id' => $maintenance_id,
            'maintenance_equipment' => $this->input->post('equipment'),
            'maintenance_date' => $this->input->post('date'),
            'maintenance_cost' => $this->input->post('cost'),
            'maintenance_desc' => $this->input->post('desc'),
            'maintenance_invoice' => $image,
        );

        if(empty($maintenance_id) || is_null($maintenance_id)){
            $data['maintenance_reported_by'] = 1; //$_SESSION['user_id']'];
        }else{
            $data['maintenance_modified_by'] = 1; //$_SESSION['user_id']'];
            $data['maintenance_reported_date'] = date("Y-m-d"); //$_SESSION['user_id']'];
        };
        
        echo $this->MaintenanceModel->set_maintenance($data);
    }
}