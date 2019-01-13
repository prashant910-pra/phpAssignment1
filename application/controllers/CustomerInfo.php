<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CustomerInfo extends CI_Controller {


   public $CustomerInfo;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct(); 


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('CustomerInfoModel');


      $this->CustomerInfo = new CustomerInfoModel;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['data'] = $this->CustomerInfo->get_CustomerInfo();


       $this->load->view('theme/header');       
       $this->load->view('CustomerInfo/list',$data);
       $this->load->view('theme/footer');
   }


   /**
    * Show Details this method.
    *
    * @return Response
   */
   public function show($id)
   {
      $item = $this->CustomerInfo->find_item($id);


      $this->load->view('theme/header');
      $this->load->view('CustomerInfo/show',array('item'=>$item));
      $this->load->view('theme/footer');
   }


   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function create()
   { 
      $this->load->view('theme/header');
      $this->load->view('CustomerInfo/create');
      $this->load->view('theme/footer');   
   }


   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile_no', 'Mobile', 'required');
        $this->form_validation->set_rules('about_you', 'About You', 'required');
        $this->form_validation->set_rules('dob', 'Date Of Birth', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('CustomerInfo/create'));
        }else{
           $this->CustomerInfo->insert_item();
           redirect(base_url('CustomerInfo'));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $item = $this->CustomerInfo->find_item($id);


       $this->load->view('theme/header');
       $this->load->view('CustomerInfo/edit',array('item'=>$item));
       $this->load->view('theme/footer');
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('country', 'Country', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('mobile_no', 'Mobile', 'required');
    $this->form_validation->set_rules('about_you', 'About You', 'required');
    $this->form_validation->set_rules('dob', 'Date Of Birth', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('CustomerInfo/edit/'.$id));
        }else{ 
          $this->CustomerInfo->update_item($id);
          redirect(base_url('CustomerInfo'));
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $item = $this->CustomerInfo->delete_item($id);
       redirect(base_url('CustomerInfo'));
   }
}