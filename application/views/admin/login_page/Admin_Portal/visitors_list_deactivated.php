<?php $this->load->view('admin/login_page/admin_portal/_header') ?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Visitors Account (Deactivated)</h1>
  <div class="row">
    <div class="col-xs-12">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Username</th>
            <th class="text-right">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          if (isset($result) && !empty($result)) {
            foreach ($result as $key => $row) {
              $id = $row->user_id;
          ?>
              <tr>
                <td><?php echo  creat_fullname($row->fname, $row->mname, $row->lname, $row->xname); ?></td>
                <td><?php echo $row->username; ?></td>

                <td class="text-right">

                  <a href="<?php echo base_url('reactivate_visitor/' .$id); ?>" onclick="return confirm('Are you sure you want do reactivate this account?')" class="btn btn-xs btn-success">Reactivate</a>
                </td>
              </tr>
            <?php
            }
          } else {
            ?>
            <tr><td colspan="4" class="text-center"> No record found</td></tr>
          <?php
          }
          ?>
         
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

<?php $this->load->view('admin/login_page/admin_portal/_footer') ?>