<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Visited_workplaces_m extends CI_Model
{
    public function getVisited_workplaces()
    {
        $query = $this->db->get('visited_workplaces');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
}