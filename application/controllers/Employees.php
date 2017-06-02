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

    public function pridaj(){
        $this->load->view('template/hlavicka');
        $this->load->view('Employees/pridaj');
        $this->load->view('template/pata');
    }

    public function potvrd(){
        $this->m->potvrd();
        redirect(base_url('index.php/Employees/index'));
    }

    public function zmen($id){
        $data['employee'] = $this->m->getEmployeeById($id);
        $this->load->view('template/hlavicka');
        $this->load->view('Employees/zmen', $data);
        $this->load->view('template/pata');
    }

    public function aktualizuj(){
        $this->m->aktualizuj();
        redirect(base_url('index.php/Employees/index'));
    }

    public function vymaz($id){
        $this->m->vymaz($id);
        redirect(base_url('index.php/Employees/index'));
    }
}