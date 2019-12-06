<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard user</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-user-plus fa-sm text-white-50"></i> Add User project</a>
</div>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data user</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Username</th>
            <th>Cust project</th>
            <th>Status user</th>
            <th>Createdate</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $userproject_detail['username'] ?></td>
            <td><?php echo $userproject_detail['custproject'] ?></td>
            <td><?php echo $userproject_detail['statususer'] ?></td>
            <td><?php echo $userproject_detail['createdate'] ?></td>
            <td><a href="<?php echo site_url('userprojects/update/'.$userproject_detail['username']) ?>">Edit</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- nandar -->

<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js')?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('js/demo/datatables-demo.js')?>"></script>
