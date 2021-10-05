<?php
/**
*
*/
class Blog extends CI_controller
{
  public function index()
  {
    $formArray = array();
    $this->load->model('Blog_model');
    $blog=$this->Blog_model->get_blog();
    $formArray['blogs']=$blog;
    $this->load->view('admin/blog/list',$formArray);
  }

  public function add()
  {
    $this->load->library('form_validation');
    $this->load->model('Blog_model');
    $this->form_validation->set_rules('title','title','trim|required');
    $this->form_validation->set_rules('description','description','trim|required');
    $this->form_validation->set_rules('author','author','trim|required');


    if ($this->form_validation->run()==true) {
      // Form Data Is Inserted into Blog table using Blog_model model..
      $formArray = array();
      $formArray['title']=$this->input->post('title');
      $formArray['description']=$this->input->post('description');
      $formArray['author']=$this->input->post('author');
      $formArray['special']=$this->input->post('special');
      $formArray['created_at']=date('Y-m-d');

      $this->Blog_model->create($formArray);   //insert data...
      $this->session->set_flashdata('success','Blog Created successful..!!');
      redirect(base_url('blog/index'));
    }
    else {
      // Failed to valdation..
      $this->load->view('admin/blog/add');
    }

  }


  public function editBlog($blogId)
  {
    $this->load->model('Blog_model');
    $this->load->library('form_validation');
    $data = array();
    $blog=$this->Blog_model->get_single_blog($blogId);
    $data['blog']=$blog;

    $this->form_validation->set_rules('title','title','trim|required');
    $this->form_validation->set_rules('description','description','trim|required');
    $this->form_validation->set_rules('author','author','trim|required');


    if ($this->form_validation->run()==true) {
      $formArray = array();
      $formArray['title']=$this->input->post('title');
      $formArray['description']=$this->input->post('description');
      $formArray['author']=$this->input->post('author');
      $formArray['special']=$this->input->post('special');
      $this->Blog_model->update_blog($blogId,$formArray);
      $this->session->set_flashdata('success','Data Updated Successfuliy..!!');
      redirect(base_url('blog/index'));
    }
    else {
      $this->load->view('admin/blog/edit',$data);
    }

  }


  public function deleteblog($blogId)
  {
    $this->load->model('Blog_model');
    $blog=$this->Blog_model->get_single_blog($blogId);

    if (empty($blog))
    {
      $this->session->set_flashdata('faiure','Data not Found..!!');
      redirect(base_url('blog/index'));
    }
    $this->Blog_model->delete_blog($blogId);
    $this->session->set_flashdata('success','Data deleted Successfuliy..!!');
    redirect(base_url('blog/index'));
  }




















} //class ends...

?>
