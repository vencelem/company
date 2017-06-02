<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employees_m extends CI_Model
{
    public function getEmployees()
    {
        $query = $this->db->get('employees');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getEmployeeById($id){
        $this->db->where('ID', $id);
        $query = $this->db->get('employees');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function potvrd(){
        $arr = array(
            'name'=>$this->input->post('name'),
            'Surname'=>$this->input->post('surname'),
            'email'=>$this->input->post('email'),
            'pasword'=>$this->input->post('pasword'),
            'number'=>$this->input->post('number'),
            'adress'=>$this->input->post('adress')
        );

        $this->db->insert('employees', $arr);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function aktualizuj(){
        $id = $this->input->post('txt_hidden');
        $field = array(
            'name'=>$this->input->post('name'),
            'Surname'=>$this->input->post('surname'),
            'email'=>$this->input->post('email'),
            'pasword'=>$this->input->post('pasword'),
            'number'=>$this->input->post('number'),
            'adress'=>$this->input->post('adress')
        );
        $this->db->where('ID', $id);
        $this->db->update('employees', $field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function vymaz($id){
        $this->db->where('ID', $id);
        $this->db->delete('employees');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}