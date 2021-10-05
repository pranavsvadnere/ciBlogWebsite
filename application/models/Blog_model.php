<?php

class Blog_model extends CI_model
{


  public function create($formArray)
  {
    $this->db->insert('blog',$formArray);
  }



  public function get_blog()
  {
    $this->db->order_by('blog_id','DESC');
    $blog=$this->db->get('blog')->result_array();
    return $blog;
  }

  public function get_single_blog($blogId)
  {
    $this->db->where('blog_id',$blogId);
    $blog=$this->db->get('blog')->row_array();
    return $blog;

  }

public function update_blog($blogId,$formArray)
{
  $this->db->where('blog_id',$blogId);
  $this->db->update('blog',$formArray);
}


public function delete_blog($blogId)
{
  $this->db->where('blog_id',$blogId);
  $this->db->delete('blog');
}


public function getPromoBlog()
{
  $this->db->where('special','promo');
  $this->db->order_by('blog_id','DESC');
  $this->db->limit(1);
  $blog = $this->db->get('blog')->row_array();
  return $blog;
}

public function getFeaturedBlogs()
{
  $this->db->where('special','featured');
  $this->db->order_by('blog_id','DESC');
  $blogs = $this->db->get('blog')->result_array();
  return $blogs;
}


public function blogDetail($blogId)
{
  // code...
}

}   // Class ends..



?>
