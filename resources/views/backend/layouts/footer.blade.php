
<!-- jQuery -->
<script src="{{ asset('backend/Templet/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backend/Templet/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/Templet/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('backend/Templet/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('backend/Templet/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->


<!-- jQuery Knob Chart -->
<script src="{{ asset('backend/Templet/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('backend/Templet/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('backend/Templet/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('backend/Templet/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('backend/Templet/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('backend/Templet/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/Templet/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend/Templet/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend/Templet/dist/js/pages/dashboard.js') }}"></script>

<!-- data table are js link here -->
<script src="{{ asset('backend/Templet/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/Templet/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/Templet/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/Templet/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/Templet/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/Templet/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/Templet/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>

<script src="{{ asset('backend/Templet/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script> 
<!-- Toaster -->
<script src="{{ asset('backend/Templet/plugins/alerts/toastr.min.js') }}"></script> 
<script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>  
<!-- sweet alert -->
<script src="{{ asset('backend/Templet/plugins/alerts/sweetalert.js') }}"></script> 
<script>  
         $(document).on("click", "#delete", function(e){
          e.preventDefault();
             var link = $(this).attr("href");
            
             swal({
                title: "Are you sure?",
                text: "You will not be able to recover !",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false
},
function(isConfirm) {
      if (isConfirm) {
  
        swal("Deleted!", "Your imaginary file has been deleted.", "success");
        window.location.href = link;

       
      } else {
        swal("Cancelled", "Your imaginary file is safe :)", "error");
      }
});
            });
    </script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [   "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  </script>

<!-- Summernote -->
<script src="{{ asset('backend/Templet/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Page specific script -->
<script>
  $(document).ready(function() {
  $('.summernote').summernote();
});
</script>