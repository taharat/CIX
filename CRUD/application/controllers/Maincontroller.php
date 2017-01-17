<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Maincontroller extends CI_Controller {

	public function _construct()
	{
    parent::_construct();
    $this->baseurl = $this->config->item('base_url' );
   

	}
	
	public function index()
	{
		
		$this->load->view('index','baseurl');


	}
   public function create() 
   {
     
     $this->form_validation->set_rules('username', 'Username', 'required');
     $this->form_validation->set_rules('email', 'Email', 'required');
     $this->form_validation->set_rules('password', 'Password', 'required');

     if($this->form_validation->run()==FALSE){
     	
     	$this->session->set_flashdata('msg','Please insert correctly');
     	redirect('Maincontroller/index');
     }


   }



}

