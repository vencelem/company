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
}