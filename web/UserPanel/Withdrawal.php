

<?php 
include("Uheader.php");
?>  

<?php 
include("Aside.php");
?>  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css" />

<div class="row">
<h2 style="margin: 0 auto;">Your Withdrawal Funds List</h2>
<br></br>
 <button class="btn btn-primary"><i class="fa fa-plus"></i> New Withdrawal</button>
 </div>
<br>
  <table id="table_id" class="display">
    <thead>
        <tr>
            <th>SR#</th>
            <th>Portfolio#</th>
            <th>Amount</th>
            <th>Currency</th>
            <th>Transfer Fee</th>
            <th>Withdrawal Mode</th>
            <th>Status</th>            
            <th>Created at</th>            
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
