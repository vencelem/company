<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicles extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Vehicles_m', 'm');
    }

    public function index()
    {
        $this->load->library('pagination');
        $query = $this->db->query("SELECT COUNT(*) AS count FROM vehicles");
        $result = $query->result();
        $count = $result[0]->count;

        $config = array(
            'base_url'   => base_url().'index.php/Vehicles/index/',
            'total_rows' => $count,
            'per_page'   => 2,
            'num_links'  => 1,

            'first_link' => "<< ",
            'last_link' => " >>",
        );

        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);

        $data['vehicles'] = $this->m->getVehicles($config['per_page'], $this->uri->segment(3));
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