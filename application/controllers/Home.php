<?php

class Home extends CI_Controller
{

  public function index()
  {
    $data = array();
    $this->load->model('Blog_model');
    $this->load->helper('text');
    $allBlogs = $this->Blog_model->get_blog();
    $promoBlog = $this->Blog_model->getPromoBlog();
    $featuredBlogs = $this->Blog_model->getFeaturedBlogs();
    $data['allBlogs']=$allBlogs;
    $data['promoBlog']=$promoBlog;
    $data['featuredBlogs']=$featuredBlogs;
    $this->load->view('home',$data);
  }

  public function blogDetail($blogId)
  {
    // echo $blogId;
    $this->load->model('Blog_model');
    $blog = $this->Blog_model->get_single_blog($blogId);
    if (empty($blog)) {
      redirect(base_url());
    }
    $data = array();
    $data['blog']=$blog;
    $this->load->view('home',$data);
  }

} //Class Ends..





?>
