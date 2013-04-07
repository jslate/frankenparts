<?php
  class Parts extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->model('parts_model');
      $this->load->helper('url');

    }

    public function index() {
      $data['parts'] = $this->parts_model->get_parts();
      $data['title'] = 'Parts';

      $this->load->view('templates/header', $data);
      $this->load->view('parts/index', $data);
      $this->load->view('templates/footer', $data);


    }
  }
?>