<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

  function getUsers(){
 
    $response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('user');
    $response = $q->result_array();

    return $response;
  }

}