<?php $this->load->view('admin/header'); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Blog</h1>
  </div>

  <form name="blogForm" id="blogForm" action="<?php echo base_url('blog/add'); ?>" method="post">

    <div class="col-md-8">

      <div class="form-group">
        <strong> <label for="title">Title</label></strong>
        <input type="text" name="title" id="title" value="<?php echo set_value('title'); ?>" class="form-control"><br/>
        <strong><span style="color:red;"><?php echo form_error('title'); ?></span></strong>
      </div>

      <div class="form-group">
        <strong> <label for="description">Description</label></strong>
        <textarea name="description" id="description" class="form-control" rows="5"> <?php echo set_value('description'); ?> </textarea>
        <strong><span style="color:red;"><?php echo form_error('description'); ?></span></strong>
      </div>

      <br>  <div class="form-group">
        <strong><label for="author">Author</label></strong>
        <input type="text" name="author" id="author" value="<?php echo set_value('author'); ?>" class="form-control">
        <strong><span style="color:red;"><?php echo form_error('author'); ?></span></strong>
      </div><br>


      <div class="form-group">
        <strong><label for="special">Special</label></strong>
        <select class="form-control" id="special" name="special">
          <option value="">--Select a Value--</option>
          <option value="featured">Featured</option>
            <option value="promo">Promotional</option>
        </select>
      </div><br>



  <input type="submit" class="btn  btn-sm btn-primary"  name="submit" value="Add Blog">

    </div>

  </form>

</main>

<?php $this->load->view('admin/footer'); ?>
