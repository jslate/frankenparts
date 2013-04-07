<?php
  class Orders extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->model('orders_model');
      $this->load->helper('url');
      $this->load->library('session');
    }

    public function index() {

    }

    public function add_to_order() {

      //log_message('error', 'wtf????')
      //$customer_id = $this->session->userdata('customer_id')
      // $order_id = $this->session->userdata('order_id')
       //$part_id = $this->input->post('part_id')
      //$quantity = $this->input->post('quantity')

      //$this->orders_model->update_order($order_id, $part_id, $quantity);

      $data['title'] = 'Orders';
      $this->load->view('templates/header', $data);
      $this->load->view('templates/footer', $data);

    }


  }
?>