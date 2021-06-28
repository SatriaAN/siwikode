<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni_model extends CI_Model {

    function tampil_data(){
        $query = $this->db->get('testimoni');
        return $query->result();
    }

    function deleteData($id) {
        $this->db->where('id',$id);
        $this->db->delete('testimoni');
    }
}