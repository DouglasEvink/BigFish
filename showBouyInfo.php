<?php include ('template/allPagesCode.php')?>
<!DOCTYPE html>
<html lang="en">
  <head>
	  <?php include ('template/head.php'); ?>
<style type="text/css" title="currentStyle">
	@import "css/demo_page.css";
	@import "css/demo_table.css";
</style>

<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		$('#example').dataTable();
	} );
</script>

  </head>

  <body>

	  <?php include ('template/header.php'); ?>
	  
	  <?php
	  include ('classes/class.dbAccess.php');
	  $dbAccess = new dbAccess();
	  $bouyInfo = $dbAccess->selectWeatherAll();
	  ?>
    <div class="container">


				<h3>Example</h3>
				<div class="full_width">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" style="width:980px">
	<thead>
		<tr>
			<th>ID</th>
			<th>Date</th>
			<th>Platform(s)</th>
			<th>Engine version</th>
			<th>CSS grade</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($bouyInfo as $row) { ?>
		<tr class="gradeX">
			<td><?php echo $row['idweather']; ?></td>
			<td><?php echo date('m/d/y h:i:s A',$row['dateStamp']); ?></td>
			<td>Win 95+</td>
			<td class="center">4</td>
			<td class="center">X</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
				</div>
				
				
		<table id=myTableId>
			<tr>
				<td>Data</td>
				<td>Data</td>
				<td>Data</td>
				
			</tr>
		</table>
       
      </div>
	  
	  <?php include('template/footer.php'); ?>
	  
  </body>
</html>
