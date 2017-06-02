<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visited_workplaces extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Visited_workplaces_m', 'm');
    }

    public function index()
    {
        $data['visited_workplaces'] = $this->m->getVisited_workplaces();
        $this->load->view('template/hlavicka');
        $this->load->view('Visited_workplaces/index', $data);
        $this->load->view('template/pata');
    }
}