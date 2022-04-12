<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('Menu_model');
			$this->load->model('Cards_model');
		}
	
	public function index()
	{
		
		
		
		$result =  $this->Menu_model->getMenu();


		$data["menu"] = $result->result();

		$data["title"] = "Administration Page";

		$this->load->view('header',$data);
		$this->load->view('admin/main_page',$data);
	}


	public function add_new(){
		$this->load->helper('form');


		$data["title"] = "Add new menu";

		$this->load->view('header',$data);
		$this->load->view('admin/add_new',$data);
	}

	public function insert_menu(){
			$data = [
				"menu_name"=>$this->input->post('menu_name'),
				"href"=>$this->input->post('href'),
				"page_id"=>$this->input->post('page_id'),
			];
			
			$result = $this->Menu_model->insertMenu($data);

			if($result){
				redirect(base_url('admin/index'));
			}
	}


	public function edit($id){
		$this->load->helper('form');
		$data["title"] = "Edit menu";
		$data["curr_menu"] = $this->Menu_model->showMenu($id)->row();
		$this->load->view('header',$data);
		$this->load->view('admin/edit',$data);
	}



	public function update_menu(){
		$data = [
			"menu_name"=>$this->input->post('menu_name'),
			"id"=>$this->input->post('id'),
			"href"=>$this->input->post('href'),
			"page_id"=>$this->input->post('page_id'),
		];
		
		$result = $this->Menu_model->update($data,$data["id"]);

		if($result){
			redirect(base_url('admin/index'));
		}
	}
	public function delete($id=NULL){

		$result = $this->Menu_model->delete($id);

		if($result){
			redirect(base_url('admin/index'));
		}


		// Статьи или новости добавить в меню Контроллер
		


	}
}
