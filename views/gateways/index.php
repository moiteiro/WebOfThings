<h2>Gateways</h2>

<table border='1'>
	<thead>
		<tr>
			<th>ID</th>
			<th>URL</th>
			<th>hora</th>
			<th>data</th>
			<th>status</th>
			<th>consultar</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($gateways as $gateway): ?>
			<tr>
				<td>
					<?php echo $gateway->id; ?>
				</td>

				<td>
					<?php echo $gateway->url; ?>
				</td>

				<td>
					<?php echo timestamp_to_time($gateway->created_at); ?>
				</td>

				<td>
					<?php echo date_format_DMY(timestamp_to_date($gateway->created_at)); ?>
				</td>

				<td>
					FUNCIONANDO
				</td>

				<td>
					<a href="<?php echo $gateway->url ?>" class='consult'> consultar </a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

<?php include('_form.php'); ?>

<script type="text/javascript">
	$().ready(function(){
		$('.consult').click(function(){

			var link = $(this).attr('href');

			$.getJSON(
				"/controllers/log.php",
				{'view':'create','text':link},
				function(data){}
			)
			return false;
		})
	})
</script>