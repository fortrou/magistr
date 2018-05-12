<?php
	if(isset($_GET['tab']) && $_GET['tab'] == 4) $active = "active";
?>
<div class="tabs-content <?php echo $active; $active = '';?>">
	<div class="form user-list-block">
		<div class="profile-title">
			Списки користувачів
		</div>
	</div>
</div>