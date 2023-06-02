<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.1
    </div>
    <strong>Copyright &copy; 2023 <a href="javascript:void(0)">Wallet ISO.COM.AZ</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- select2 -->
<script src="plugins/select2/js/select2.min.js"></script>
<!-- sweet alert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- custom js -->
<script>
  $(document).ready(function(){
    $("#navExitButton").on("click",function(){
      Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "{{URL::base('home/exit')}}";
      }
    }));
    });
  });
</script>
</body>
</html>
