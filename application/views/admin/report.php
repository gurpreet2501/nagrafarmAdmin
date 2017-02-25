<div id="content">
	<div class="container top-margins">
			<div class="row">
					<div class="col-xs-12">
					<h1>Stock Report</h1>
					<table class="table table-condensed">
						<tr>
							<th>Total Bags</th>
							<th>Chamber</th>
							<th>Potato Name</th>
							<th>Dispatch</th>
							<th>Stacker</th>
							<th>Owner</th>
							<th>#Contact</th>
							<th>Condition</th>
						</tr>
				  <?php $total_bags = 0; foreach ($data as $key => $record): 
				   	$total_bags = $total_bags + $record['bags'];
				  ?>
				  	<tr class="<?=$record['dispatch'] ? 'danger' : '' ?>">
				  		<td width="10%"><?=$record['bags']?></td>
				  		<td width="10%"><?=$record['chamber']?></td>
				  		<td><?=$record['name']?></td>
				  		<td><?=$record['dispatch'] ? $record['dispatch'] : 0?></td>
				  		<td><?=$record['Stacker']?></td>
				  		<td><?=$record['owner']?></td>
				  		<td><?=$record['customer_no']?></td>
				  		<td><?=$record['condition']?></td>
				  	</tr>
					<?php endforeach; ?>
					<tr>
						<td><h2>Total Bags  = <span class="label label-danger"><?=$total_bags?></span></h2></td>
					</tr>

					</table>
					
					</div>
				</div> <!-- row ends -->	
	</div>
</div>
