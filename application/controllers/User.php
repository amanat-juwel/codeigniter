<?php

class User extends CI_Controller {

	public function __construct(){

	     parent::__construct();

	     // Load model
	     $this->load->model('User_model');
	  }


	public function index(){

		$users = $this->User_model->all();

		$data['users'] = $users;

		$this->load->view('user/list',$data);
	}

	public function create()
	{

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');

		if($this->form_validation->run() == false){
		
			$this->load->view('user/create');
		
		} else {
			$formData = array(
			        'name' => $this->input->post('name'),
			        'email' => $this->input->post('email'),
			        'created_at' => date('Y-m-d')
			);

			$this->User_model->create($formData);
			$this->session->set_flashdata('success','Record added successfully');
			redirect(base_url().'user/index');
		}

	}

	public function edit($id)
	{

		$user = $this->User_model->getUser($id);

		$data['user'] = $user;

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');

		if($this->form_validation->run() == false){

			$this->load->view('user/edit',$data);
		
		} else {
			$formData = array(
			        'name' => $this->input->post('name'),
			        'email' => $this->input->post('email')
			);

			$this->User_model->updateUser($id, $formData);
			$this->session->set_flashdata('success','Record updated successfully');
			redirect(base_url().'user/index');
		}

		
	}

	public function delete($id)
	{

		$user = $this->User_model->getUser($id);

		if(empty($user)){
			$this->session->set_flashdata('failure','Record not found in database');
			redirect(base_url().'user/index');
		}

		$this->User_model->deleteUser($id);
		$this->session->set_flashdata('success','Record deleted successfully');
		redirect(base_url().'user/index');
	}
}
