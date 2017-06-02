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

    public function pridaj(){
        $data['vehicle'] = $this->m->getVid();
        $data['employee'] = $this->m->getEid();
        $this->load->view('template/hlavicka');
        $this->load->view('Rides/pridaj', $data);
        $this->load->view('template/pata');
    }

    public function potvrd(){
        $this->m->potvrd();
        redirect(base_url('index.php/Rides/index'));
    }

    public function aktualizuj(){
        $this->m->aktualizuj();
        redirect(base_url('index.php/Rides/index'));
    }

    public function vymaz($id){
        $this->m->vymaz($id);
        redirect(base_url('index.php/Rides/index'));
    }
}