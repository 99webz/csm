<?php
Class Login_model extends CI_Model {

public function get_users() {

$query = $this->db->query("SELECT * FROM customers WHERE first_name LIKE 'a%' ");
return $query->result();
}
}