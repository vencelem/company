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

    public function pridaj(){
        $this->load->view('template/hlavicka');
        $this->load->view('Workplaces/pridaj');
        $this->load->view('template/pata');
    }

    public function potvrd(){
        $this->m->potvrd();
        redirect(base_url('index.php/Workplaces/index'));
    }

    public function zmen($id){
        $data['workplaces'] = $this->m->getWorkplaceById($id);
        $this->load->view('template/hlavicka');
        $this->load->view('Workplaces/zmen', $data);
        $this->load->view('template/pata');
    }

    public function aktualizuj(){
        $this->m->aktualizuj();
        redirect(base_url('index.php/Workplaces/index'));
    }

    public function vymaz($id){
        $this->m->vymaz($id);
        redirect(base_url('index.php/Workplaces/index'));
    }
}