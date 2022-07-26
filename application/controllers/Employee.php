<?php
 class Employee extends CI_Controller{

	public function __construct() {
		parent::__construct(); 
		$this->load->library('form_validation');
		$this->load->library('session');
   
	 }

     public function index(){
		$this->load->model("Crud");
		$data['records'] = $this->Crud->getRecord();
		
		$this->load->view("employee/index", $data);
	 }

	 public function create()
	 {
		$data['title'] = "Create Project";
		$this->load->view("employee/create",$data);
	 }

	 public function store()
  {
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
	$this->form_validation->set_rules('phone', 'Phone', 'required');
	$this->form_validation->set_rules('designation', 'Designation', 'required');
	
 
    if (!$this->form_validation->run())
    {
        $this->session->set_flashdata('errors', validation_errors());
        redirect(base_url('Employee/create'));
    }
    else
    {
		$this->load->model("Crud");
       $this->Crud->store();
       $this->session->set_flashdata('success', "Saved Successfully!");
       redirect(base_url('home'));
    }
 
  }


  public function edit($id)
  {
	$this->load->model("Crud");
    $data['employee'] = $this->Crud->get($id);
    $data['title'] = "Edit Project";
    $this->load->view('employee/edit', $data);
  }

  public function update($id)
  {
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
	$this->form_validation->set_rules('phone', 'Phone', 'required');
	$this->form_validation->set_rules('designation', 'Designation', 'required');
 
    if (!$this->form_validation->run())
    {
        $this->session->set_flashdata('errors', validation_errors());
        redirect(base_url('Employee/edit/' . $id));
    }
    else
    {
		$this->load->model("Crud");
       $this->Crud->update($id);
       $this->session->set_flashdata('success', "Updated Successfully!");
       redirect(base_url('home'));
    }
 
  }
 
  /*
    Delete a record
  */
  public function delete($id)
  {
	$this->load->model("Crud");
    $item = $this->Crud->delete($id);
    $this->session->set_flashdata('success', "Deleted Successfully!");
    redirect(base_url('home'));
  }
 

 }


?>
