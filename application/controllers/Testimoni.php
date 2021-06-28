<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('Testimoni_model');
            
    }
    
    function index(){
        $this->load->view('_partials/view');
        $queryAllTestimoni = $this->Testimoni_model->tampil_data();
        $DATA = array('queryAllTest' => $queryAllTestimoni);
        $this->load->view('content/v_testimoni',$DATA);
    }

    public function fungsiDelete($id) {
        $this->Testimoni_model->deleteData($id); 
        redirect(base_url('index.php/testimoni'));
    }
    
}
