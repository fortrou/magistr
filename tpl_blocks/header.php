
<!DOCTYPE html>
<html lang="en">
	<?php require_once(BLOCK_FOLDER . "/head.php"); ?>
<body>
<div class="container">
	<div class="row">
		<div class="header">
			<div class="header-info">
				<div class="content">
					<div class="col-md-12">				
						<a href="" class="second-tel-show js-second-phone">
							<span class="fa fa-phone "></span>
						</a>
						<a href="tel: +380733226768" class="contacts-phone-second">
							<div class="contacts-text">
								(073) 322-67-68
							</div>
						</a>
						<a href="tel: +380996545428" class="contacts-phone-first">
							<span class="contacts-text hide-480">
								(099) 654-54-28
							</span>
						</a>
						<a href="">
							<span class="fa fa-envelope"></span>
							<span class="contacts-text hide-768">
								magistr.zno@gmail.com
							</span>
						</a>
						<a href="" class="hide-960">
							<span class="fa fa-calendar"></span>
							<span class="contacts-text ">
								ПН-ПТ: 11.00 - 19.00
							</span>
						</a>
						
						<div class="header-info-buttons">
							<a href=""
								class="block-display float-right-block button-full-yellow js-auth-form element-width-70 element-border-radius-5 element-margin-left-10">
								ВХІД
							</a>
							<a href="<?php print PROTOCOL . SITE_NAME . "cabinet_block/registration" ?>"
								target="_blank"
								class="block-display float-right-block button-border-yellow element-width-160 element-border-radius-5 ">
								РЕЄСТРАЦІЯ
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
			<div class="content">
				<div class="header-begin-info col-md-12">
					<div class="logo">
						<a href="/index.php">
							<img src="/tpl_img/logo.png" alt="logo" >	
						</a>
					</div>						
					<div class="header-begin-info-btns">
						<a href="" 
							class="block-display button-border-blue element-width-240 element-border-radius-5">
							СПРОБУВАТИ БЕЗКОШТОВНО
						</a>
						<a href="" 
							class="block-display button-full-blue element-width-160 element-border-radius-5 element-margin-left-10">
							ПОЧАТИ НАВЧАННЯ
						</a>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="menu-desktop">
				<div class="menu">
					<div class="content">
						<ul class="menu-elements">
							<li data-rel-section="1">ГОЛОВНЕ</li>
							<li data-rel-section="2">ЯК РОЗПОЧАТИ</li>
							<li data-rel-section="3">ЯК НАВЧАТИСЯ</li>
							<li data-rel-section="4">ЧОМУ МИ?</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="menu-mobile">
				<div class="menu">
					<div class="content">
						<ul class="menu-elements mobile-menu-elements">
							<li data-rel-section="1">
								<div id="m-btn-main" class="menu-mobile-btn-main"></div>
							</li>
							<li data-rel-section="2">
								<div id="m-btn-start" class="menu-mobile-btn-start"></div>
							</li>
							<li data-rel-section="3">
								<div id="m-btn-learn" class="menu-mobile-btn-learn"></div>
							</li>
							<li data-rel-section="4">
								<div id="m-btn-adv" class="menu-mobile-btn-adv"></div>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>