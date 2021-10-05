
<!-- <pre>
<?php //print_r($blogs); ?>
</pre> -->


<?php $this->load->view('admin/header'); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h1 class="h2">List Blog</h1>
  </div>

  <center>

    <div class="col-md-12">

      <table id="example" class="table table-striped table-bordered table-dark table-responsive table-hover" style="width:100%">

        <thead>
          <tr>
            <th>Blog ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>Created At</th>
            <th>Special</th>
            <th colspan="2" style="text-align:center;">Action</th>
          </tr>
        </thead>

        <?php if (!empty($blogs))
        {
          foreach($blogs as $blog) { ?>

            <tr>
              <td><?php echo $blog['blog_id'];  ?></td>
              <td><?php echo $blog['title'];  ?></td>
              <td><?php echo $blog['description'];  ?></td>
              <td><?php echo $blog['author'];  ?></td>
              <td><?php echo $blog['created_at'];  ?></td>
              <td>
                <?php if ($blog['special']=='featured') {
                  // Print Featured..
                  echo "Featured Blog";
                } elseif ($blog['special']=='promo') {
                  // Print Promotional...
                  echo "Promotional Blog";
                } else {
                  // Print N/A
                  echo "N/A";
                }?>


              </td>

              <td>
                <a href="<?php echo base_url('blog/editBlog/').$blog['blog_id']; ?>"  type="button" class="btn btn btn-sm btn-primary"> Edit</a>
              </td>
              <td>
                <a href="#" type="button" onclick="delblog(<?php echo $blog['blog_id']; ?>);" class="btn btn btn-sm btn-danger"> Delete</a>
              </td>
            </tr>

          <?php }  }else {  ?>

            <td colspan="5"> <center>No Records Found..!!</center></td>

          <?php }  ?>

        </table>

      </div>

    </center>

  </main>

  <?php $this->load->view('admin/footer'); ?>

  <script>

  function delblog(id) {

    if (confirm("Are you sure you want to delete ??")) {

      window.location.href="<?php echo base_url('blog/deleteblog/')?>"+id;

    }
  }
  </script>
