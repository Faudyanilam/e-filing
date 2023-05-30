
<div class="table-responsive table-responsive-data2">
    <table border="1" width="100%" class="table table-striped table-bordered table-data2" id="dataTables">
     <tr bgcolor="black">
         <th style="color: white;">No</th>
         <th style="color: white;">NPWP</th>
         <th style="color: white;">Efin</th>
     </tr>
 </table>
</div>
<script src="../plugins/jquery/jquery-1.12.0.min.js"></script>
<script src="assets/DataTables/DataTables-1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables').DataTable({
            "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]],
        });
    } );
</script>