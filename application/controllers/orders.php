<?php
  class Orders extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->model('orders_model');
      $this->load->helper('url');
      $this->load->library('session');
    }

    public function view($id) {
      $order_id = $this->session->userdata('order_id');
      $data['orders_parts'] = $this->orders_model->get_order($order_id);
      $data['title'] = 'Your Order';
      $this->load->view('templates/header', $data);
      $this->load->view('orders/view', $data);
      $this->load->view('templates/footer', $data);
    }

    public function past_orders() {
      $customer_id = $this->session->userdata('customer_id');
      $data['orders'] = $this->orders_model->get_past_orders($customer_id);
      $data['title'] = 'Past Orders';
      $this->load->view('templates/header', $data);
      $this->load->view('orders/past_orders', $data);
      $this->load->view('templates/footer', $data);
    }

    public function submit_order() {
      $order_id = $this->session->userdata('order_id');
      $new_order_id = $this->orders_model->submit_order($order_id);
      $this->session->set_userdata('order_id', $new_order_id);
      $data['title'] = 'Order Submitted';
      $this->load->view('templates/header', $data);
      $this->load->view('orders/submitted', $data);
      $this->load->view('templates/footer', $data);
    }

    public function add_to_order() {

      $customer_id = $this->session->userdata('customer_id');
      $order_id = $this->session->userdata('order_id');
      $part_id = $this->input->post('part_id');
      $quantity = $this->input->post('quantity');

      $this->orders_model->update_order($order_id, $part_id, $quantity);

      $data['title'] = 'Orders';
      $this->load->view('templates/header', $data);
      $this->load->view('templates/footer', $data);

    }


  }
?>