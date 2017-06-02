<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicles extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Vehicles_m', 'm');
    }

    public function index()
    {
        $data['vehicles'] = $this->m->getVehicles();
        $this->load->view('template/hlavicka');
        $this->load->view('Vehicles/index', $data);
        $this->load->view('template/pata');
    }
}