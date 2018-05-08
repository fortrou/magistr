<?php
	if(isset($_GET['tab']) && $_GET['tab'] == 2) $active = "active";
?>
<div class="tabs-content <?php echo $active; $active = ''; ?>">
						<div class="form profile-form profile-form-email-post">
							<div class="profile-title">
								Налаштування розсилок
							</div>
							<form action="" method="post" id="">
								<div class="form-item">
									<input id="check-all" name="check-all" type="checkbox" class="checkbox">
									<label for="check-all" class="checkbox-title">
										Обрати все
									</label>
								</div>
								<div class="form-item">
									<input id="check-lesson" name="check-lesson" type="checkbox" class="checkbox">
									<label for="check-lesson" class="checkbox-title">
										Перенос онлайн-урока
									</label>
								</div>
								<div class="form-item">
									<input id="check-message" name="check-message" type="checkbox" class="checkbox">
									<label for="check-message" class="checkbox-title">
										Нове повідомлення в чаті
									</label>
								</div>
								<div class="form-item">
									<input id="check-news" name="check-news" type="checkbox" class="checkbox">
									<label for="check-news" class="checkbox-title">
										Новини
									</label>
								</div>
								<div class="form-item">
									<input id="check-mark" name="check-mark" type="checkbox" class="checkbox">
									<label for="check-mark" class="checkbox-title">
										Оцінка за ДЗ
									</label>
								</div>
								<div class="form-item form-item--btn">
									<a href=""
										class="submitter block-display button-full-blue element-border-radius-5 element-width-200"
										data-form="profile_form_user">
										ЗБЕРЕГТИ
									</a>
								</div>
							</form>
						</div>
					</div>