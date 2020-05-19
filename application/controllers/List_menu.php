<?php
defined('BASEPATH') or exit('No direct script access allowed');

class List_menu extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('list_menu_model');
        $this->load->model('menu_model');
    }
    public function index()
    {
        $search = $this->input->get('search');
        $name = $this->input->get('name');
        $menu_id  = $this->input->get('menu_id');
        $condition = [];
        if (!empty($search)) {
            if (!empty($name)) {
                $condition['name'] = array('$regex' => $name);
            }
            if (!empty($menu_id)) {
                $condition['menu'] = $this->mongo_db->create_document_id($menu_id);
            }
        }
        $data['menu'] = $this->menu_model->findAll();
        $data['list_menu'] = $this->list_menu_model->findAll($condition);
        $data['name'] = $name;
        $data['search'] = $search;
        $data['menu_id'] = $menu_id;
        $this->load->view('layout/head');
        $this->load->view('layout/header');
        $this->load->view('layout/content');
        // $this->load->view('layout/menu', $data);
        $this->load->view('list_menu/list_menu', $data);
        $this->load->view('layout/footer');
        $this->load->view('layout/foot');
    }
    public function create()
    {
        $data['menu'] = $this->menu_model->findAll();
        $this->load->view('layout/head');
        $this->load->view('layout/header');
        $this->load->view('layout/content');
        $this->load->view('list_menu/create/list_menu', $data);
        $this->load->view('layout/footer');
        $this->load->view('layout/foot');
    }
    public function save()
    {
        $name = $this->input->post('name');
        $price = $this->input->post('price');
        $menu = $this->input->post('menu');

        $data = array(
            "name" => $name,
            "price" => $price,
            "menu" => $this->mongo_db->create_document_id($menu),
        );
        $id = $this->list_menu_model->insert($data);
        if (!empty($id)) {
            $this->session->set_flashdata('success-msg', 'list_menu Added');
            redirect('list_menu');
        } else {
            echo "error";
        }
    }
}
