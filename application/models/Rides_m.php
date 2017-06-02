<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rides_m extends CI_Model
{
    public function getRides()
    {
        $query = $this->db->get('rides');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
}