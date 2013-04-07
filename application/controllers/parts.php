<?php
  class Parts extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->model('parts_model');
      $this->load->helper('url');
      $this->load->library('session');
      $this->session->set_userdata('customer_id', 1);
      $this->session->set_userdata('order_id', 1);
    }

    public function index() {
      $data['parts'] = $this->parts_model->get_parts();
      $data['title'] = 'Parts';
      $this->load->view('templates/header', $data);
      $this->load->view('parts/index', $data);
      $this->load->view('templates/footer', $data);
    }

    public function for_category($category_id) {
      $data['parts'] = $this->parts_model->get_parts($category_id);
      $data['title'] = 'Parts';
      $this->load->view('templates/header', $data);
      $this->load->view('parts/index', $data);
      $this->load->view('templates/footer', $data);
    }

  }
?>