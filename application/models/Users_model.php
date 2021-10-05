<?php

class Users_model extends CI_model
{


public function doLogin($username,$password){

  $this->db->where('username',$username);
  $this->db->where('password',$password);
  $user=$this->db->get('users')->row_array(); //SELECT * FROM `users` WHERE `username` = ' ' AND `password` = ''
    // echo $this->db->last_query();
  return $user;
  }

public function getUser($username)
{
  $this->db->where('username',$username);
  return $user=$this->db->get('users')->row_array();
}






















} // Class Closed...
?>
