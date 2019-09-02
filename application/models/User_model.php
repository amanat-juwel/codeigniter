<?php

class User_model extends CI_Model {

	function create($formData){

		$this->db->insert("users",$formData);

	}

	function all(){

		return $this->db->get("users")->result_array();

	}

	function getUser($id){

		$this->db->where('id', $id);

		return $this->db->get("users")->row_array();

	}

	function updateUser($id, $formData){

		$this->db->where('id', $id);

		return $this->db->update("users",$formData);

	}

	function deleteUser($id){

		$this->db->where('id', $id);

		return $this->db->delete("users");

	}
}
