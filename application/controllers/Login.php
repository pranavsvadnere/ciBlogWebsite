<?php
/**
*
*/
class Login extends CI_controller
{

  public function index()
  {
    $this->load->model('users_model');
    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('password','Password','required');

    if($this->form_validation->run()==false){
      $this->load->view('admin/login');
    }
    else {
      $username=$this->input->post('username');
      $password=$this->input->post('password');
      $user=$this->users_model->doLogin($username,$password);

      if (!empty($user)) {
        $this->session->set_userdata('user',$user);
        redirect(base_url().'adminDashboard');
      }

      else {
        $this->session->set_flashdata('errormsg','Either Username or Password Is Incorrct..!!');
        redirect(base_url('login/index'),'refresh');


      }


    }


  }



























} //Class Ends..
?>
