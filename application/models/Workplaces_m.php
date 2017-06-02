<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Workplaces_m extends CI_Model
{
    public function getWorkplaces()
    {
        $query = $this->db->get('workplaces');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
}