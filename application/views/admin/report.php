<div id="content">
	<div class="container">
	<div class="row">
			<div class="col-xs-12">
			<h1>Stock Report</h1>
			<table class="table table-condensed">
				<tr>
					<th>Total Bags</th>
					<th>Chamber No</th>
					<th>Potato Name</th>
					<th>Dispatch</th>
					<th>Stacker</th>
					<th>Owner</th>
					<th>Customer No</th>
					<th>Potato Condition</th>
				</tr>
		  <?php foreach ($data as $key => $record):?>
		  	<tr class="<?=$record['dispatch'] ? 'danger' : 'success'?>">
		  		<td><?=$record['bags']?></td>
		  		<td><?=$record['chamber']?></td>
		  		<td><?=$record['name']?></td>
		  		<td><?=$record['dispatch'] ? $record['dispatch'] : 0?></td>
		  		<td><?=$record['Stacker']?></td>
		  		<td><?=$record['owner']?></td>
		  		<td><?=$record['customer_no']?></td>
		  		<td><?=$record['condition']?></td>
		  	</tr>
			<?php endforeach; ?>
			</table>
			
			</div>
		</div> <!-- row ends -->	
	</div>
</div>
