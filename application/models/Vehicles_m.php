<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicles_m extends CI_Model
{
    public function getVehicles()
    {
        $query = $this->db->get('vehicles');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
}