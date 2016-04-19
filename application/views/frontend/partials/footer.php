<style type="text/css">
 .bottomleft{
   position:fixed;
   left:0;
   bottom: 0;
  }
</style>
<div class="bottomleft"><img src="<?php echo base_url(); ?>assets/img/boy.png" width="100"></div>
<div id="footerwrap">
	<div class="container">
 			<span class="pull-right">&copy; mathMOOC - 2016</span>
 </div>

</div>
<div id="modal_content" class="modal fade"></div>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->
<script src="<?php echo base_url(); ?>assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

<script type="text/javascript">
$(function() {
    // Load modal windows via ajax.
	$('a.toggle-modal').bind('click',function(e) {
	  e.preventDefault();
	  var url = $(this).attr('href');
	  if (url.indexOf('#') == 0) {
	    $('#modal_content').modal('open');
	  } else {
	    $.get(url, function(data) { 
                $('#modal_content').modal();
                $('#modal_content').html(data);
	    }).success(function() { $('input:text:visible:first').focus(); });
	  }
	});

	//Initialize datatable
     $(".datatable").dataTable({ "bLengthChange": false });
});
</script>