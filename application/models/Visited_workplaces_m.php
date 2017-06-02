<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Visited_workplaces_m extends CI_Model
{
    public function getVisited_workplaces($limit = 0, $offset = 0)
    {
        $query = $this->db->get('visited_workplaces', $offset, $limit);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getVisited_workplacesById($id){
        $this->db->where('ID', $id);
        $query = $this->db->get('visited_workplaces');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function getWid(){
        $query = $this->db->query("SELECT ID FROM workplaces ORDER BY ID");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function getRid(){
        $query = $this->db->query("SELECT ID FROM rides ORDER BY ID");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function potvrd(){
        $arr = array(
            'workplaces_ID'=>$this->input->post('workplaces_ID'),
            'rides_ID'=>$this->input->post('rides_ID')
        );

        $this->db->insert('visited_workplaces', $arr);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function aktualizuj(){
        $id = $this->input->post('txt_hidden');
        $field = array(
            'workplaces_ID'=>$this->input->post('workplaces_ID'),
            'rides_ID'=>$this->input->post('rides_ID')
        );
        $this->db->where('ID', $id);
        $this->db->update('visited_workplaces', $field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function vymaz($id){
        $this->db->where('ID', $id);
        $this->db->delete('visited_workplaces');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}