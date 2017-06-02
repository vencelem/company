<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('Chart_m', 'm');
    }

    function index(){
        $data['consumption'] = $this->m->get_avgc();
        $data['workplace'] = $this->m->get_wrkplace();
        $data['wrkplacefreq'] = $this->m->get_wrkplacefreq();
        $data['vehicles'] = $this->m->get_vehicles();
        $this->load->view('template/hlavicka');
        $this->load->view('template/home', $data);
        $this->load->view('template/pata');
    }
}