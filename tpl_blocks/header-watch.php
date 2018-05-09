
<!DOCTYPE html>
<html lang="en">
<?php require_once(BLOCK_FOLDER . "/head.php"); ?>
<body>
<div class="container">
	<div class="row">
		<div class="header">
			<div class="static-page-header">
				<div class="content">
					<div class="col-md-12">
						<div class="static-page-menu">
							<div class="logo">	
								<a href="/index.php" target="_blank">
									<img src="/tpl_img/logo-mini.png" alt="mini-logo">
								</a>
							</div>
							<div class="header-info-buttons">
								<a href="" 
									class="button button-border button-border--blue">
									СПРОБУВАТИ БЕЗКОШТОВНО
								</a> 
								<a href="<?php print PROTOCOL . SITE_NAME . "cabinet_block/registration" ?>"
									target="_blank"
									class="button button-full button-icon button-full--blue ">	
									<i class="fa fa-user-plus" aria-hidden="true"></i>
								</a>
								<a href=""
									class="button button-full button-icon button-full--blue js-auth-form">
									<i class="fa fa-sign-in" aria-hidden="true"></i>
								</a>
								<div class="auth-form">
									<form action="">
										<div class="auth-form-item auth-form-item--head">
											<i class="fa fa-times-circle close-form" aria-hidden="true"></i>
											<span class="auth-form-item--head-title">
												Увійти в особистий кабінет
											</span>
										</div>
										<div class="auth-form-item">
											<input type="email" placeholder="Ваш логін">
										</div>
										<div class="auth-form-item">
											<input type="password" placeholder="Ваш пароль">
										</div>
										<div class="auth-form-item">
											<a href="">
												<span class="lost-pass-text">
													Забули пароль?
												</span>
											</a>
											<a href=""
												class="inline-block-display button-full-blue element-width-90 element-border-radius-5">
												УВІЙТИ
											</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>