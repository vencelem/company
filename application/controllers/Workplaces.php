<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workplaces extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Workplaces_m', 'm');
    }

    public function index()
    {
        $data['workplaces'] = $this->m->getWorkplaces();
        $this->load->view('template/hlavicka');
        $this->load->view('Workplaces/index', $data);
        $this->load->view('template/pata');
    }
}