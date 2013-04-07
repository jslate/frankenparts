<?php

  class Orders_model extends CI_Model {

    public function __construct() {
      $this->load->database();
    }

    public function update_order($order_id, $part_id, $quantity) {

      $query = $this->db->get_where('orders_parts', array(
        'order_id' => $order_id,
        'part_id' => $part_id
        ));

      $result = $query->result_array();

      // $data = array(
      //    'order_id' =>
      //    'customer_id' => $this->session->userdata('customer_id'),
      //    'part_id' => $this->input->post('part_id'),
      //    'quantity' => $this->input->post('quantity')
      // );

      // $query = $this->db->get_where('orders_parts', array(
      //   'customer_id' => $customer_id,
      //   'order_id' => $order_id,
      //   'part_id' => $part_id
      //   ));

      // $this->db->insert('orders_parts', $data);

    }

  }
?>