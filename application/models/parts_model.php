<?php

  class Parts_model extends CI_Model {

    public function __construct() {
      $this->load->database();
    }

    public function get_parts($cateogry_id = FALSE) {

      if ($cateogry_id === FALSE) {
        $this->db->join('categories', 'category_id = categories.id');
        $this->db->select('parts.id as part_id, part_name, description, category_name');
        $query = $this->db->get('parts');
        return $query->result_array();
      }

      $this->db->join('categories', 'category_id = categories.id');
      $this->db->select('parts.id as part_id, part_name, description, category_name');
      $query = $this->db->get_where('parts', array('category_id' => $cateogry_id));
      return $query->result_array();
    }

  }
?>