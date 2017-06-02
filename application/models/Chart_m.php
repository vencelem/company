<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_m extends CI_Model{

    public function get_avgc(){
        $query = $this->db->query("SELECT brand, ROUND(SUM(average_consumption)/COUNT(average_consumption),1) AS avg FROM `vehicles` GROUP by brand");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function get_wrkplace(){
        $query = $this->db->query("SELECT city, COUNT(ID) AS pocet FROM `workplaces` GROUP BY city");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function get_wrkplacefreq(){
        $query = $this->db->query("SELECT w.workplace, COUNT(v.ID) AS pocet FROM visited_workplaces v
                                INNER JOIN workplaces w ON w.ID = v.workplaces_ID
                                GROUP BY v.workplaces_ID");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function get_vehicles(){
        $query = $this->db->query("SELECT v.brand, v.model, COUNT(r.ID) AS pocet FROM rides r
                                INNER JOIN vehicles v ON r.vehicles_ID = v.ID
                                GROUP BY v.brand, v.model");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
}







