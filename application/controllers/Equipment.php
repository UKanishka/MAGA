<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipment extends CI_Controller {

    public function __construct(){
		parent::__construct();
        $this->load->model('EquipmentModel');
    }
    
	public function index()
	{
        $this->load->view('template/header');
        $this->load->view('equipment/index');
        $this->load->view('template/footer');
    }

    public function equipment_list(){
        $draw = intval($this->input->get("draw"));

        $query = $this->EquipmentModel->equipment_list();

        if (empty($query->result())){
            echo json_encode('No Data Found');
        }else{
            foreach($query->result() as $r) {
                $data[] = array(
                        $r->equipment_id,
                        $r->serial_no,
                        $r->category,
                        $r->supplier,
                        $r->invoice_no,
                        $r->equipment_status,
                        '<button class="btn btn-mint btn-xs eqpInfo" data-eqp="'. $r->id .'" data-target="#addEquipmentModal" data-toggle="modal">More</button>'
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

    public function supplier_list(){
        $query = $this->EquipmentModel->supplier_list();
        if (empty($query->result())){
            echo ('No Data Available');
        }else{
            foreach($query->result() as $r) {
                $data[] = array(
                    $r->supplier_id,
                    $r->supplier_name
                );
            }
            echo json_encode($data);
        }
    }

    public function category_list(){
        $query = $this->EquipmentModel->category_list();
        if (empty($query->result())){
            echo ('No Data Available');
        }else{
            foreach($query->result() as $r) {
                $data[] = array(
                    $r->category_id,
                    $r->category_name
                );
            }
            echo json_encode($data);
        }
    }

    public function set_equipment(){
        $data = array(
            'id' => $this->input->post('id'),
            'equipment_id' => $this->input->post('equipment_id'),
            'serial_no' => $this->input->post('serial_no'),
            'category' => $this->input->post('category'),
            'supplier' => $this->input->post('supplier'),
            'equipment_status' => $this->input->post('status'),
            'invoice_no' => $this->input->post('invoice_no')
        );
        
        echo $this->EquipmentModel->set_equipment($data);
    }

    public function get_equipment_details(){
        $id = $this->input->get('id');
        $query = $this->EquipmentModel->get_equipment_details($id);
        if (empty($query->result())){
            echo ('No Data Available');
        }else{
            foreach($query->result() as $r) {
                $data[] = array(
                    $r->id,
                    $r->equipment_id,
                    $r->serial_no,
                    $r->category,
                    $r->supplier,
                    $r->invoice_no,
                    $r->equipment_status,
                );
            }
            echo json_encode($data);
        }
    }
}