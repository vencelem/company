<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rides_m extends CI_Model
{
    public function getRides($limit = 0, $offset = 0)
    {
        $query = $this->db->get('rides', $offset, $limit);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getRideById($id){
        $this->db->where('ID', $id);
        $query = $this->db->get('rides');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function getVid(){
        $query = $this->db->query("SELECT ID FROM vehicles ORDER BY ID");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function getEid(){
        $query = $this->db->query("SELECT ID FROM employees ORDER BY ID");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function potvrd(){
        $arr = array(
            'employees_ID'=>$this->input->post('employees_ID'),
            'start'=>$this->input->post('start'),
            'start'=>$this->input->post('start'),
            'end'=>$this->input->post('end'),
            'distance'=>$this->input->post('distance'),
            'vehicles_ID'=>$this->input->post('vehicles_ID')
        );

        $this->db->insert('rides', $arr);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function aktualizuj(){
        $id = $this->input->post('txt_hidden');
        $field = array(
            'employees_ID'=>$this->input->post('employees_ID'),
            'start'=>$this->input->post('start'),
            'start'=>$this->input->post('start'),
            'end'=>$this->input->post('end'),
            'distance'=>$this->input->post('distance'),
            'vehicles_ID'=>$this->input->post('vehicles_ID')
        );
        $this->db->where('ID', $id);
        $this->db->update('rides', $field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function vymaz($id){
        $this->db->where('ID', $id);
        $this->db->delete('rides');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}