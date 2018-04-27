<?php get_header(); ?>
<div class="container">
	<div class="row">
	<?php
		if(!empty($data) && $data) {
			printf('<h1 class="title-static">%s</h1>
					<div class="text">
					%s
					</div>'
					, htmlspecialchars_decode($data['static_name']), htmlspecialchars_decode($data['static_content']));
		}
	?>
	</div>
</div>
<?php require_once(BLOCK_FOLDER . "/footer.php"); ?>