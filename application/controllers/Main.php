<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('list_menu_model');
	}
	public function index()
	{
		$search = $this->input->get('search');
        $name = $this->input->get('name');
        $condition = [];
        if (!empty($search)) {
            if (!empty($name)) {
                $condition['name'] = array('$regex' => $name);
            }
        }
        $data['menu'] = $this->menu_model->findAll();
        $data['list_menu'] = $this->list_menu_model->findAll($condition);
        $data['name'] = $name;
        $data['search'] = $search;
		$data['menu'] = $this->menu_model->findAll();
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/content');
		$this->load->view('layout/menu', $data);
		$this->load->view('menu/list_menu', $data);
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}
}
