<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicles_m extends CI_Model
{
    public function getVehicles($limit = 0, $offset = 0)
    {
        $query = $this->db->get('vehicles', $offset, $limit);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getVehicleById($id){
        $this->db->where('ID', $id);
        $query = $this->db->get('vehicles');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function potvrd(){
        $arr = array(
            'brand'=>$this->input->post('brand'),
            'model'=>$this->input->post('model'),
            'average_consumption'=>$this->input->post('avgc')
        );

        $this->db->insert('vehicles', $arr);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function aktualizuj(){
        $id = $this->input->post('txt_hidden');
        $field = array(
            'brand'=>$this->input->post('brand'),
            'model'=>$this->input->post('model'),
            'average_consumption'=>$this->input->post('avgc')
        );
        $this->db->where('ID', $id);
        $this->db->update('vehicles', $field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function vymaz($id){
        $this->db->where('ID', $id);
        $this->db->delete('vehicles');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}