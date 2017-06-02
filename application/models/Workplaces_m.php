<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Workplaces_m extends CI_Model
{
    public function getWorkplaces($limit = 0, $offset = 0)
    {
        $query = $this->db->get('workplaces', $offset, $limit);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getWorkplaceById($id){
        $this->db->where('ID', $id);
        $query = $this->db->get('workplaces');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function potvrd(){
        $arr = array(
            'workplace'=>$this->input->post('workplace'),
            'city'=>$this->input->post('city'),
            'country'=>$this->input->post('country')
        );

        $this->db->insert('workplaces', $arr);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function aktualizuj(){
        $id = $this->input->post('txt_hidden');
        $field = array(
            'workplace'=>$this->input->post('workplace'),
            'city'=>$this->input->post('city'),
            'country'=>$this->input->post('country')
        );
        $this->db->where('ID', $id);
        $this->db->update('workplaces', $field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function vymaz($id){
        $this->db->where('ID', $id);
        $this->db->delete('workplaces');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}