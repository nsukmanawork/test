<div class="row">

  <!-- Area Chart -->
  <div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Add New User</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="chart-area">
          <?php echo validation_errors(); ?>
          <?php echo form_open('users/add') ?>
            <div class="form-group">
              <label for="username">Username:</label>
              <input name="username" type="text" value="<?php echo set_value('username');?>" class="form-control" id="username" required>
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input name="password" type="password" value="<?php echo set_value('password');?>" class="form-control" id="pwd" required>
            </div>
            <div class="form-group">
              <label for="name">Name:</label>
              <input name="name" type="text" value="<?php echo set_value('name');?>" class="form-control" id="name" required>
            </div>
            <div class="form-group">
              <label for="Custproject">Custproject:</label>
              <input name="custproject" type="text" value="<?php echo set_value('custproject');?>" class="form-control" id="Custproject" required>
            </div>
            <div class="form-group">
              <label for="level">Level:</label>
              <input name="level" type="text" value="<?php echo set_value('level');?>" class="form-control" id="level" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          <?php echo form_close() ?>
        </div>
      </div>
    </div>
  </div>
</div>
