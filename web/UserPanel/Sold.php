

<?php 
include("Uheader.php");
?>  

<?php 
include("Aside.php");
?>  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css" />

<div class="row">
<h2 style="margin: 0 auto;">Manage All Sold Trades</h2>
 </div>
<br>
  <table id="table_id" class="display">
    <thead>
        <tr>
            <th>SR#</th>
            <th>Portfolio#</th>
            <th>Currency</th>
            <th>Amount</th>
            <th>Amount Deduct</th>
            <th>Trade Amount</th>
            <th>Waiting Profit</th>
            <th>Profit</th>
            <th>Payment Mode</th>
            <th>Status</th>
            <th>Date Created</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
       
    </tbody>
</table>


<?php 
include("footer.php");
?>  



<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script>
	$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
