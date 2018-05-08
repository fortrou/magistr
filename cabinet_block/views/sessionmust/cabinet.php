<?php //require_once(BLOCK_FOLDER . "/header.php"); ?>

<!DOCTYPE html>
<html lang="en">
	<?php require_once(BLOCK_FOLDER . "/head.php"); ?>
<body>
	<div class="header">
		<div class="menu-desktop menu-cabinet">
			<div class="menu">
				<div class="content">
					<ul class="menu-elements">
						<div class="menu-cabinet-elements-block-left">
							<li class="menu-cabinet-logo">
								<a href="/index.php" target="_blank">
									<img src="/tpl_img/logo-mini-white.png" alt="mini-logo">
								</a>
							</li>
							<li class="menu-cabinet-elements">
								<a href="">
									<img src="/tpl_img/calendar.png" alt="calendar">
								</a>
							</li>
							<li class="menu-cabinet-elements">
								<a href="">
									<img src="/tpl_img/homework.png" alt="homework">
								</a>
							</li>
							<li class="menu-cabinet-elements">
								<a href="">
									<img src="/tpl_img/messages.png" alt="messages">
								</a>
							</li>
						</div>
						<div class="menu-cabinet-elements-block-right">
							<li id="mobMenu" class="menu-cabinet-mobile-icon">
								<a href="">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</a>	
							</li>
							<div class="block-right-mobile">	
							<li class="menu-cabinet-submenu">
								<a href="">
									Курс
								</a>
								<ul>
									<li class="menu-cabinet-submenu-item">
										<a href="">
											Название курса 1
										</a>
									</li>
									<li class="menu-cabinet-submenu-item">
										<a href="">
											Название курса 2
										</a>
									</li>
									<li class="menu-cabinet-submenu-item">
										<a href="">
											Название курса 3
										</a>
									</li>
								</ul>
							</li>
							<li class="menu-profile-element menu-cabinet-submenu">
								<a href="">
									Профіль
								</a>
								<ul>
									<li class="menu-cabinet-submenu-item">
										<a href="">
											Персональна інформація
										</a>
									</li>
									<li class="menu-cabinet-submenu-item">
										<a href="">
											Керування розсилками
										</a>
									</li>
									<li class="menu-cabinet-submenu-item">
										<a href="">
											Оплата курсів
										</a>
									</li>
									<li class="menu-cabinet-submenu-item">
										<a href="">
											Вихід
										</a>
									</li>
								</ul>
								<div class="menu-profile-photo">
									<img src="/tpl_img/logo-mini.png" alt="profile-photo" class="">
								</div>
								<img src="/tpl_img/sort_down.png" alt="sort_down" class="menu-arrow-down">
							</li>
							</div>
							
						</div>
					</ul>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
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
				</ul>
				
				<?php 
					//global $user_cookie;
					//if(!empty($user_cookie) && $user_cookie['level'] == 1) {
						require_once(VIEW . '/template_parts/personal-info.php');
						require_once(VIEW . '/template_parts/messages-info-student.php');
						require_once(VIEW . '/template_parts/payment-info-student.php');
					//}
				?>
					
					
					
				
			</div>


		</div>
	</div>
<?php require_once(BLOCK_FOLDER . "/footer.php"); ?>