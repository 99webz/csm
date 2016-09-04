<?php
Class Search_model extends CI_Model {

public function search() {
	$q = $this->input->get('query');

$query = $this->db->query("SELECT * FROM customers WHERE(first_name LIKE '%$q%'OR last_name LIKE '%q%' OR city LIKE '%$q%') ORDER BY first_name");
return $query->result();
}
}