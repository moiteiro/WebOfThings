<h2>Gateways</h2>

<table border='1'>
	<thead>
		<tr>
			<th>ID</th>
			<th>text</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($logs as $log): ?>
			<tr>
				<td>
					<?php echo $log->id; ?>
				</td>

				<td>
					<?php echo timestamp_to_time($log->created_at) . " - " . date_format_DMY(timestamp_to_date($log->created_at))  ." ".$log->text; ?>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>