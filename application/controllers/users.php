<?php
  class Categories extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->model('Users_model');
      $this->load->helper('url');

    }

    public function login_form() {
      $data['title'] = 'login';
      $this->load->view('templates/header', $data);
      $this->load->view('users/login', $data);
      $this->load->view('templates/footer', $data);
    }

    public function login() {

      $name = $this->input->post('name')
      $password = $this->input->post('password')

      $this -> db -> select('id');
      $this -> db -> from('customers');
      $this -> db -> where('customer_name', $name);
      $this -> db -> where('password', MD5($password));
      $this -> db -> limit(1);

      $query = $this -> db -> get();

      if($query -> num_rows() == 1) {
        $this->session->set_userdata('customer_id', $query[0]->id);
        redirect(site_url())
      }

    }
  }
?>