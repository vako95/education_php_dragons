<script src="<?php echo base_url('public/admin/assets/'); ?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url('public/admin/assets/'); ?>bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('public/admin/assets/'); ?>js/app-style-switcher.js"></script>
<script src="<?php echo base_url('public/admin/assets/'); ?>plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url('public/admin/assets/'); ?>js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url('public/admin/assets/'); ?>js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url('public/admin/assets/'); ?>js/custom.js"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="<?php echo base_url('public/admin/assets/'); ?>plugins/bower_components/chartist/dist/chartist.min.js"></script>
<script src="<?php echo base_url('public/admin/assets/'); ?>plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo base_url('public/admin/assets/'); ?>js/pages/dashboards/dashboard1.js"></script>

<!-- Creat Page -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Creat Page -->

<script src="https://cdn.tiny.cloud/1/t3349wm8jxfh2mrqyd2mfnrm608ttnyliyx5m6kuyf8kl9b1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


<script>
  tinymce.init({
    selector: '#mytextarea',
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolory | outdent indent',
    plugins: 'code',
    forced_root_block: '""'
  });
</script>


<script>
  <?php if ($this->session->flashdata('success')) {  ?>
    var isi = <?php echo json_encode($this->session->flashdata('success')) ?>;
    Swal.fire({
      title: 'Təbriklər!',
      text: isi,
      icon: 'success',
      // confirmButtonText: 'Cool'
    })
  <?php } ?>

  <?php if ($this->session->flashdata('error')) {  ?>
    var isi = <?php echo json_encode($this->session->flashdata('error')) ?>;
    Swal.fire({
      title: 'Diqqet!',
      text: isi,
      icon: 'error',
      // confirmButtonText: 'Cool'
    })
  <?php } ?>
</script>



<script>
  $(document).on('click', '.btn-hapus', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        document.location.href = href;
      }
    })
  })
</script>

<script>
  $(document).on('click', '.btn-hapuss', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        document.location.href = href;
      }
    })
  })
</script>

<script>
  $('body').on('input', '.input-suma-credit', function(){
    this.value = this.value
      .replace(/\D/g, '')
        .replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ')
        + ' $';
  });
</script>

</body>

</html>