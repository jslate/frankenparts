<?php

  class Orders_model extends CI_Model {

    public function __construct() {
      $this->load->database();
    }

    public function get_past_orders($customer_id) {
      $query = $this->db->get_where('orders', array('customer_id' => $customer_id, 'orders.submitted' => TRUE));
      $results = array();
      foreach ($query->result_array() as $order) {
        $query2 = $this->db->join('parts', 'orders_parts.part_id = parts.id');
        $query2 = $this->db->get_where('orders_parts', array('order_id' => $order['id']));
        array_push($results, array('order' => $order, 'parts' => $query2->result_array()));
      }
      return $results;
    }

    public function get_order($id) {
      $query = $this->db->join('parts', 'orders_parts.part_id = parts.id');
      $query = $this->db->join('orders', 'orders_parts.order_id = orders.id');
      $query = $this->db->get_where('orders_parts', array('order_id' => $id));
      return $query->result_array();
    }

    public function update_order($order_id, $part_id, $quantity) {

      $array = array('order_id' => $order_id,'part_id' => $part_id);

      $query = $this->db->get_where('orders_parts', $array);
      $result = $query->result_array();

      if(count($result) == 1) {
        $data = array('quantity' => $this->input->post('quantity'));
        $this->db->update('orders_parts', $data, $array);

      } else {
        $data = array(
           'order_id' => $this->session->userdata('order_id'),
           'customer_id' => $this->session->userdata('customer_id'),
           'part_id' => $this->input->post('part_id'),
           'quantity' => $this->input->post('quantity')
        );

        $this->db->insert('orders_parts', $data);

      }
    }

    public function submit_order($order_id) {
      $this->db->update('orders', array('submitted' => TRUE), array('id' => $order_id));
      $data = array('customer_id' => $this->session->userdata('customer_id'));
      $this->db->insert('orders', $data);
      return $this->db->insert_id();
    }

  }
?>