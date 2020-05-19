<?php
defined('BASEPATH') or exit('No direct script access allowed');

class menu extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('list_menu_model');
    }
    public function index($menuId)
    {
        $data['menu'] = $this->menu_model->findAll();
        $condition = array(
            'menu' => $this->mongo_db->create_document_id($menuId)
        );
        $data['list_menu'] = $this->list_menu_model->findAll($condition);
        $this->load->view('layout/head');
        $this->load->view('layout/header');
        $this->load->view('layout/content');
        $this->load->view('layout/menu', $data);
        $this->load->view('menu/list_menu', $data);
        $this->load->view('layout/footer');
        $this->load->view('layout/foot');
    }
}
