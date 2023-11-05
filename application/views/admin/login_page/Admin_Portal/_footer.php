
</div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
<style>

 
.swal2-popup {
  font-size: 1.6rem !important;
}

</style>

   









   


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
  function sendForm(e){
    
    e.preventDefault();
    Swal.fire({
      title: 'Diqqet!',
      icon: 'question',
      showCancelButton: true,
    }).then(result=> {
      if(result.isConfirmed){
        const myForm = document.getElementById('myForm');
        myForm.submit();
      }
    })
  }
</script>


<script>
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
  </body>
</html>
