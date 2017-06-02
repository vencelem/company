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

    public function pridaj(){
        $data['workplace'] = $this->m->getWid();
        $data['ride'] = $this->m->getRid();
        $this->load->view('template/hlavicka');
        $this->load->view('Visited_workplaces/pridaj', $data);
        $this->load->view('template/pata');
    }

    public function potvrd(){
        $this->m->potvrd();
        redirect(base_url('index.php/Visited_workplaces/index'));
    }

    public function zmen($id){
        $data['workplace'] = $this->m->getWid();
        $data['ride'] = $this->m->getRid();
        $data['visited_workplaces'] = $this->m->getVisited_workplacesById($id);
        $this->load->view('template/hlavicka');
        $this->load->view('Visited_workplaces/zmen', $data);
        $this->load->view('template/pata');
    }

    public function aktualizuj(){
        $this->m->aktualizuj();
        redirect(base_url('index.php/Visited_workplaces/index'));
    }

    public function vymaz($id){
        $this->m->vymaz($id);
        redirect(base_url('index.php/Visited_workplaces/index'));
    }
}