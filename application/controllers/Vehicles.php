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

    public function pridaj(){
        $this->load->view('template/hlavicka');
        $this->load->view('Vehicles/pridaj');
        $this->load->view('template/pata');
    }

    public function potvrd(){
        $this->m->potvrd();
        redirect(base_url('index.php/Vehicles/index'));
    }

    public function zmen($id){
        $data['vehicles'] = $this->m->getVehicleById($id);
        $this->load->view('template/hlavicka');
        $this->load->view('Vehicles/zmen', $data);
        $this->load->view('template/pata');
    }

    public function aktualizuj(){
        $this->m->aktualizuj();
        redirect(base_url('index.php/Vehicles/index'));
    }

    public function vymaz($id){
        $this->m->vymaz($id);
        redirect(base_url('index.php/Vehicles/index'));
    }
}