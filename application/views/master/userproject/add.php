<div class="row">

  <!-- Area Chart -->
  <div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Add New userproject</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="chart-area">
          <?php echo validation_errors(); ?>
          <?php echo form_open('userprojects/add') ?>
            <div class="form-group">
              <label for="username">Username:</label>
              <select name="username" class="form-control" id="username" required>
                <option value="">Pilih</option>
                <?php foreach ($users as $user): ?>
                  <option value="<?php echo $user['username'] ?>"><?php echo $user['name'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="custproject">Cust project:</label>
              <select name="custproject" class="form-control" id="custproject" required>
                <option value="">Pilih</option>
                <?php foreach ($projects as $project): ?>
                  <option value="<?php echo $project['custproject'] ?>"><?php echo $project['custproject'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="statususer">Status user:</label>
              <input name="statususer" type="text" value="<?php echo set_value('statususer');?>" class="form-control" id="statususer" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          <?php echo form_close() ?>
        </div>
      </div>
    </div>
  </div>
</div>
