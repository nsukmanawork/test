<div class="row">

  <!-- Area Chart -->
  <div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Add New cntmnt</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="chart-area">
          <?php echo validation_errors(); ?>
          <?php echo form_open('cntmnts/add') ?>
            <div class="form-group">
              <label for="sgcode">Cntmnt:</label>
              <input name="sgcode" type="text" value="<?php echo set_value('sgcode');?>" class="form-control" id="sgcode" required>
            </div>
            <div class="form-group">
              <label for="cntyear">Cnt Year:</label>
              <input name="cntyear" type="text" value="<?php echo set_value('cntyear');?>" class="form-control" id="cntyear" required>
            </div>
            <div class="form-group">
              <label for="counter">Counter:</label>
              <input name="counter" type="text" value="<?php echo set_value('counter');?>" class="form-control" id="counter" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          <?php echo form_close() ?>
        </div>
      </div>
    </div>
  </div>
</div>
