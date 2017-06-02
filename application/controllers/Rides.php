<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rides extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Rides_m', 'm');
    }

    public function index()
    {
        $data['rides'] = $this->m->getRides();
        $this->load->view('template/hlavicka');
        $this->load->view('Rides/index', $data);
        $this->load->view('template/pata');
    }
}