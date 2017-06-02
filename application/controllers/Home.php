<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }


    public function index()
    {
        $this->load->view('template/hlavicka');
        $this->load->view('template/home');
        $this->load->view('template/pata');
    }


}
