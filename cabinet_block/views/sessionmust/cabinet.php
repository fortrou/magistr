<?php require_once(BLOCK_FOLDER . "/header-cabinet.php"); ?>
	<div class="container">
		<div class="row">
			<div class="tabs">
				<ul class="tabs-links">
					<?php
						if((isset($_GET['tab']) && $_GET['tab'] == 1) || !isset($_GET['tab'])) $active = "active";
					?>
					<li class="<?php echo $active; $active = ''; ?>">
						<a href="">
							Персональна інформація
						</a>
					</li>
					<?php
						if(isset($_GET['tab']) && $_GET['tab'] == 2) $active = "active";
					?>
					<li class="<?php echo $active; $active = ''; ?>">
						<a href="">
							Керування розсилками
						</a>
					</li>
					<?php
						if(isset($_GET['tab']) && $_GET['tab'] == 3) $active = "active";
					?>
					<li class="<?php echo $active; $active = ''; ?>">
						<a href="">
							Оплата курсів
						</a>
					</li>
					<?php
						if(isset($_GET['tab']) && $_GET['tab'] == 4) $active = "active";
					?>
					<li class="<?php echo $active; $active = ''; ?>">
						<a href="">
							Списки користувачів
						</a>
					</li>
				</ul>
				<?php 
					//global $user_cookie;
					//if(!empty($user_cookie) && $user_cookie['level'] == 1) {
						require_once(VIEW . '/template_parts/personal-info.php');
						require_once(VIEW . '/template_parts/messages-info-student.php');
						require_once(VIEW . '/template_parts/payment-info-student.php');
						require_once(VIEW . '/template_parts/users-list-admin.php');
					//}
				?>	
			</div>
		</div>
	</div>
<?php require_once(BLOCK_FOLDER . "/footer.php"); ?>