<?php $this->load->view('admin/login_page/visitor_portal/visitor_header') ?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<a class="pull-right btn-success btn btn-lg" style="border-radius:50px;"  href="<?php echo base_url('admin_programming_skills_edit'); ?>">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
</a>
  <h1 class="page-header">Programming Skills</h1>
  <?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close alert-dismissible" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong><?php echo $this->session->flashdata('success'); ?></strong>
                </div>
            <?php } ?> 
  <div class="row">
    <div class="col-xs-12">
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <th style="width:250px;">Programing Languages:</th>
            <td> <?php echo $skills->prog_languages;   ?></td>
          </tr>
          <tr>
            <th>Backend Frameworks:</th>
            <td> <?php echo $skills->backend_frameworks; ?></td>
          </tr>
          <tr>
            <th>Frontend Frameworks:</th>
            <td> <?php echo $skills->frontend_frameworks; ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          
            <div style="width: 100%; height: 40px; background-color:white;"></div>
<?php $this->load->view('admin/login_page/visitor_portal/visitor_footer') ?>