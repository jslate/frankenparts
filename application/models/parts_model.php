<?php

  class Parts_model extends CI_Model {

    public function __construct() {
      $this->load->database();
    }


    public function get_parts($slug = FALSE) {
      if ($slug === FALSE) {
        $query = $this->db->get('parts');
        return $query->result_array();
      }

      $query = $this->db->get_where('parts', array('slug' => $slug));
      return $query->row_array();
    }
  }
?>