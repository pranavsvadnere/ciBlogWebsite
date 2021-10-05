<?php


class AdminDashboard extends CI_controller
{

  public function index()

  {
    // echo "Login Successful...!!<br/>";
    // print_r($this->session->userdata['user']);
    if (empty($this->session->userdata['user']))
    {
      redirect(base_url().'login');

    }
    // echo "<a href='".base_url().'adminDashboard/signOut'."'>SignOut</a>";
    //

    $this->load->view('admin/dashboard');

  }



  public function signOut()
  {
    $this->session->unset_userdata('user');
    redirect(base_url('login'));

  }
































} //class closed..
?>
