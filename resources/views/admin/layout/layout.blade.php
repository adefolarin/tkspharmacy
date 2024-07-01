<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" >
  <title>Shalom Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ url('admin/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ url('admin/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ url('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ url('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ url('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{ url('admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{ url('admin/plugins/bs-stepper/css/bs-stepper.min.css') }}">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{ url('admin/plugins/dropzone/min/dropzone.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('admin/css/adminlte.min.css') }}">
  <!--<link rel="stylesheet" href="{{ url('admin/css/jquery-ui-1.8.4.custom.css') }}">
  <link rel="stylesheet" href="{{ url('admin/css/jquery-datetimepicker.css') }}">-->

  <link rel="stylesheet" href="{{ url('admin/css/custom.css') }}">
</head>
<body class="hold-transition sidebar-mini dark-mode layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!--<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{ url('admin/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>-->

@include('admin.layout.header')
@include('admin.layout.sidebar')

@yield('content')

@include('admin.layout.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ url('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ url('admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ url('admin/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ url('admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ url('admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ url('admin/plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<!--<script src="{{ url('admin/js/demo.js') }}"></script>-->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('admin/js/pages/dashboard2.js') }}"></script>

<!-- DataTables  & Plugins -->
<script src="{{ url('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ url('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('admin/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ url('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ url('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ url('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ url('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ url('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Select2 -->
<script src= "{{ url('admin/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{ url('admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ url('admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ url('admin/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ url('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ url('admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Bootstrap Switch -->
<script src="{{ url('admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<!-- BS-Stepper -->
<script src="{{ url('admin/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
<!-- dropzonejs -->
<script src="{{ url('admin/plugins/dropzone/min/dropzone.min.js') }}"></script>
<!-- AdminLTE App -->
<!-- date-range-picker -->
<script src="{{ url('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>

<!--<script src="{{ url('admin/js/jquery.datetimepicker.full.js') }}"></script>-->

<!-- AdminLTE App -->
<script src="{{ url('admin/js/adminlte.js') }}"></script>

<!-- Custom JS File -->
<script src="{{ url('admin/js/custom.js') }}"></script>

<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
  $(function () {
    $("#cmspages").DataTable();
    $("#tablepages").DataTable({
      "ordering": false,
       scrollY: true,

    });

    $("#divtablepages").DataTable({
       scrollY: true,

    });


    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });

    new DataTable('#tablepagesevent', {
    initComplete: function () {
        this.api()
            .columns(0)
            .every(function () {
                let column = this;
 
                // Create select element
                let select = document.createElement('select');
                select.add(new Option('Search By Time of Availability'));
                select.add(new Option('All'));
                select.add(new Option('9:00am - 9:30am'));
                select.add(new Option('9:30am - 10:00am'));
                select.add(new Option('10:00am - 10:30am'));
                select.add(new Option('10:30am - 11:00am'));
                select.add(new Option('11:00am - 11:30am'));
                select.add(new Option('11:30am - 12:00pm'));
                select.add(new Option('12:00am - 12:30pm'));
                select.add(new Option('12:30pm - 1:00pm'));
                select.add(new Option('1:00pm - 1:30pm'));
                select.add(new Option('1:30pm - 2:00pm'));
                select.add(new Option('2:00pm - 2:30pm'));
                select.add(new Option('2:30pm - 3:00pm'));
                select.add(new Option('3:00pm - 3:30pm'));
                select.add(new Option('3:30pm - 4:00pm'));
                select.add(new Option('4:00pm - 4:30pm'));
                select.add(new Option('4:30pm - 5:00pm'));
                select.add(new Option('5:00pm - 5:30pm'));
                select.add(new Option('5:30pm - 6:00pm'));
                column.header().replaceChildren(select);

 
                // Apply listener for user change in value
                select.addEventListener('change', function () {
                    column
                        .search(select.value, {exact: true})
                        .draw();

                    //let numRows = this.rows().count();
                   
                });

                document.getElementById('demo').innerHTML = oTable.fnSettings().fnRecordsDisplay();
             
 
                // Add list of options
                /*column
                    .data()
                    .unique()
                    .sort()
                    .each(function (d, j) {
                        select.add(new Option(d));
                    });*/
                    //let api = this.api();
                   
            });

            
      },

       order: [[0, 'asc']],
       paging: false
    });

   /* $("#tablepages").DataTable({
    // execute callback when DataTable is completely initialiazed
    "initComplete": function() {
      // Select the column whose header we need replaced using its index(0 based)
      this.api().column(0).every(function() {
        var column = this;
        // Put the HTML of the <select /> filter along with any default options 
        var select = $('<select class="form-control input-sm"><option value="">Time Of Availability</option></select>')
          // remove all content from this column's header and 
          // append the above <select /> element HTML code into it 
          .appendTo($(column.header()).empty())
          // execute callback when an option is selected in our <select /> filter
          .on('change', function() {
            // escape special characters for DataTable to perform search
            var val = $.fn.dataTable.util.escapeRegex(
              $(this).val()
            );

            // Perform the search with the <select /> filter value and re-render the DataTable
            column
              .search(val ? '^' + val + '$' : '', true, false)
              .draw();
          });
        // populate options in the <select /> filter with unique values from the column's data
        column.data().unique().sort().each(function(d, j) {
          select.append("<option value='" + d + "'>" + d + "</option>")
        });
      });
    },
    // disable sorting on the column with the filter in its header.
      "ordering": false,
       scrollY: true,

       "columnDefs": [{
        targets: [2],
        orderable: false
       }]
    });*/




  });
</script>


<script>

  $(function () {
    //'use strict';

    //jQuery('#events_startdate, #events_enddate').datetimepicker({format: 'Y-m-d',timepicker: true });
    
      //Date and time picker

    $('#events_startdate').datetimepicker(
      { 
        format: 'Y-MM-DD HH:mm',
        timePicker: true,
        icons: { time: 'far fa-clock' }
      }
    );


    $('#events_enddate').datetimepicker(
      { 
        format: 'Y-MM-DD HH:mm',
        timePicker: true,
        icons: { time: 'far fa-clock' }
      }
    );

    $('#campaigns_startdate').datetimepicker(
      { 
        format: 'Y-MM-DD HH:mm',
        timePicker: true,
        icons: { time: 'far fa-clock' }
      }
    );


    $('#campaigns_enddate').datetimepicker(
      { 
        format: 'Y-MM-DD HH:mm',
        timePicker: true,
        icons: { time: 'far fa-clock' }
      }
    );

    $('#livecountdowns_datetime').datetimepicker(
      { 
        format: 'Y-MM-DD HH:mm',
        timePicker: true,
        icons: { time: 'far fa-clock' }
      }
    );


    $('#foodbanks_date').datetimepicker(
      { 
        format: 'Y-MM-DD',
      }
    );

    $('#voldatetime').datetimepicker(
      { 
        format: 'Y-MM-DD HH:mm',
        timePicker: true,
        icons: { time: 'far fa-clock' }
      }
    );

    $('#sermons_date').datetimepicker(
      { 
        format: 'Y-MM-DD',
      }
    );

    $('#reviews_year').datetimepicker(
      { 
        format: 'Y',
      }
    );


});

</script>

</body>
</html>
