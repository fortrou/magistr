<?php
	if((isset($_GET['tab']) && $_GET['tab'] == 1) || !isset($_GET['tab'])) $active = "active";
?>
<div class="tabs-content <?php echo $active; $active = ''; ?>">
						<div class="form profile-form">
							<div class="profile-title">
								Налаштування облікового запису
							</div>
							<form action="" method="post" id="profile_form_user" enctype="multipart/form-data">
								<input type="hidden" name="action" value="profile_user">
								<div class="form-block form-block--auth">
									<div class="form-block-title">
										Інформація для входу
									</div>
									<div class="form-item form-item--changeable">
										<label for="email" class="form-item-title">
											Ваш логін
										</label>
										<input id="email" name="user_email" type="email" required />
										<div class="form-item-tooltip">
											Ваш email буде використовуватися для входу в особистий профіль
										</div>
									</div>
									<div class="form-item form-item--changeable">
										<label for="password" class="form-item-title">
											Пароль/Змінити пароль
										</label>
										<input id="password" name="user_password" type="password" required />
										<div class="form-item-tooltip">
											Введіть свій поточний пароль
										</div>
									</div>
									<div class="form-item form-item--changeable">
										<label for="password-re-enter" class="form-item-title">
										</label>
										<input id="password-re-enter" name="password-re-enter" type="password" required />
										<div class="form-item-tooltip">
											Для зміни введіть новий пароль
										</div>
									</div>
									<div class="form-item form-item--changeable">
										<label for="password-re-enter-re" class="form-item-title">
										</label>
										<input id="password-re-enter-re" name="password-re-enter-re" type="password" required />
										<div class="form-item-tooltip">
											Повторіть новий пароль
										</div>
									</div>
									<div class="form-item form-item--btn">
										<a href=""
											class="submitter block-display button-full-blue element-border-radius-5 element-width-200"
											data-form="profile_form_user">
											ЗБЕРЕГТИ
										</a>
									</div>
								</div>
								<div class="form-block form-block--info">
									<div class="form-block-title">
										Особиста інформація
									</div>
									<div class="form-item">
										<label for="lastname" class="form-item-title">
											Прізвище
										</label>
										<input id="lastname" name="user_surname" type="text" disabled />
									</div>
									<div class="form-item">
										<label for="firsname" class="form-item-title">
											Ім'я
										</label>
										<input id="firstname" name="user_name" type="text" disabled />
									</div>
									<div class="form-item">
										<label for="middlename" class="form-item-title">
											По батькові
										</label>
										<input id="middlename" name="user_lastname" type="text" disabled />
									</div>
									<div class="form-item">
										<label for="telephone" class="form-item-title">
											Телефон(-и)
										</label>
										<input id="telephone" name="user_phone" type="telephone" disabled />
									</div>
									<div class="form-item">
										<label for="city" class="form-item-title">
											Місто *
										</label>
										<input id="city" name="user_city" type="text" disabled />
									</div>
								</div>
								<div class="form-block form-block--more">
									<div class="form-block-title">
										Додаткова інформація
									</div>
									<div class="form-item">
										<label for="education" class="form-item-title">
											Вуз і факультет *
										</label>
										<input id="education" name="user_academy" type="text" disabled />
									</div>
									<div class="form-item form-item--photo form-item--changeable">
										<label for="photo" class="form-item-title">
											Фото *
										</label>
										<div class="loaded-photo"></div>
				   						<input id="photo" name="user_avatar" type="file" accept="image/*,image/jpeg,,image/jpg,image/png,image/bmp" required />
			  							<div class="form-item-tooltip ">
											Завантажте фото об'ємом до 5МБ. Підтримуються формати .jpeg, .jpg, .png, .bmp
										</div>
									</div>
									<div class="form-item form-item--textarea">
										<label for="info" class="form-item-title">
											Звідки ви дізналися про "МагістрЗНО"?
										</label>
										<textarea id="info" name="user_registred" id="" cols="" rows="" disabled></textarea>
									</div>
									<div class="form-item form-item--btn">
										<a href=""
											class="submitter block-display button-full-blue element-border-radius-5 element-width-200"
											data-form="profile_form_user">
											ЗБЕРЕГТИ
										</a>
									</div>
								</div>
							</form>
						</div>
					</div>