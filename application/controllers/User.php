<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function create(){
        $this->load->model('User_model');

        $this->form_validation->set_rules('firstName', 'First Name', 'required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('contact', 'Contact No.', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        
        if($this->form_validation->run() == false){
            $this->load->view('create');
        } else {
            $formArray = array();
            $formArray ['first_name']= $this->input->post('firstName');
            $formArray ['last_name']= $this->input->post('lastName');
            $formArray ['email']= $this->input->post('email');
            $formArray ['contact']= $this->input->post('contact');
            $formArray ['address']= $this->input->post('address');
            $formArray ['posted_at']= date('y-m-d');
            $this->User_model->create($formArray);
            $this->session->set_flashdata('success','Record added Successfully!');
            redirect(base_url().'index.php/user/index');
        }
        
    }
    
    function index(){
        $this->load->model('User_model');
        $users = $this->User_model->allInfo();
        $data=array();
        $data['users']=$users;
        $this->load->view('list',$data);

    }

    function edit($userId){

        $this->load->model('User_model');
        $user = $this->User_model->getUser($userId);
        $data = array();
        $data['user'] = $user;
        
        $this->form_validation->set_rules('firstName', 'First Name', 'required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('contact', 'Contact No.', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        
        if($this->form_validation->run() == false){
            $this->load->view('edit',$data);
        } else {
            
            $formArray = array();
            $formArray ['first_name']= $this->input->post('firstName');
            $formArray ['last_name']= $this->input->post('lastName');
            $formArray ['email']= $this->input->post('email');
            $formArray ['contact']= $this->input->post('contact');
            $formArray ['address']= $this->input->post('address');
            $formArray ['updated_at']= date('y-m-d');
            $this->User_model->updateUser($userId,$formArray);
            
            $this->session->set_flashdata('success','Record updated Successfully!');
            redirect(base_url().'index.php/user/index');
        }

    }

    function delete($userId){
        $this->load->model('User_model');
        $user = $this->User_model->getUser($userId);

        if(!empty($user)){
            $user = $this->User_model->deleteUser($userId);
            $this->session->set_flashdata('success','Record deleted Successfully!');
            redirect(base_url().'index.php/user/index');
        }else{
            $this->session->set_flashdata('failure','Record is not found!');
            redirect(base_url().'index.php/user/index');
        }

    }
	
}
?>