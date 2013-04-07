<?php
  class Categories extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->model('categories_model');
      $this->load->helper('url');

    }

    public function index() {
      $data['categories'] = $this->categories_model->get_categories();
      $data['title'] = 'Categories';

      $this->load->view('templates/header', $data);
      $this->load->view('categories/index', $data);
      $this->load->view('templates/footer', $data);


    }
  }
?>