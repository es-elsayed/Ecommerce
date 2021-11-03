<script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
<script src="{{ asset('assets/admin/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script>
	$(document).ready(function() {
		$('#Transaction-History').DataTable({
			lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
		});
	  } );
</script>
<script src="{{ asset('assets/admin/js/index.js')}}"></script>
<!--app JS-->
<script src="{{ asset('assets/admin/js/app.js')}}"></script>
{{-- <script>
	new PerfectScrollbar('.product-list');
	new PerfectScrollbar('.customers-list');
</script> --}}
