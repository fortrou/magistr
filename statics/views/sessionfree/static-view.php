<?php get_header(); ?>
<div class="container">
	<div class="row">
	<?php
		if(!empty($data) && $data) {
			printf('<h1>%s</h1>
					<div class="text">
					%s
					</div>'
					, $data['static_name'], $data['static_content']);
		}
	?>
	</div>
</div>
<?php require_once(BLOCK_FOLDER . "/footer.php"); ?>