<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Employees_m', 'm');
    }

    public function index()
    {
        $data['employees'] = $this->m->getEmployees();
        $this->load->view('template/hlavicka');
        $this->load->view('Employees/index', $data);
        $this->load->view('template/pata');
    }
}