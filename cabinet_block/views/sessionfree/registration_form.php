<?php 
	if(isset($_POST['action']) && $_POST['action'] == 'registration_user') {
		try {
			User::registr_user($_POST);
		} catch(Exception $e) {
			print($e);
		}
	}
	require_once(BLOCK_FOLDER . "/header-watch.php");
?>
<div class="container">
	<div class="row">
		<div class="form-page-title">
			<h1>
				РЕЄСТРАЦІЯ НОВОГО КОРИСТУВАЧА
			</h1>
		</div>
		<div class="form">
				<form action="" method="post" id="registration_form_user" enctype="multipart/form-data">
					<input type="hidden" name="action" value="registration_user">
					<div class="form-block">
						<div class="form-block-title">
							Інформація для входу
						</div>
						<div class="form-item">
							<label for="email" class="form-item-title">
								Введіть ваш email *
							</label>
							<input id="email" name="user_email" type="email" pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})" title="Наприклад: yourname@gmail.com" required />
							<div class="form-item-tooltip">
								Ваш email буде використовуватися для входу в особистий профіль
							</div>
						</div>
						<div class="form-item">
							<label for="password" class="form-item-title">
								Введіть ваш пароль *
							</label>
							<input id="password" name="user_password" type="password" pattern=".{6,}" title="Пароль має містити не менше 6 символів" required />
							<div class="form-item-tooltip">
								Оберіть надійний пароль із латинських символів та/або цифр
							</div>
						</div>
						<div class="form-item">
							<label for="password-re-enter" class="form-item-title">
								Повторіть ваш пароль *
							</label>
							<input id="password-re-enter" name="password-re-enter" type="password" pattern=".{6,}" title="Пароль має містити не менше 6 символів" required />
							<div class="form-item-tooltip">
								Повторіть пароль
							</div>
						</div>
					</div>
					<div class="form-block">
						<div class="form-block-title">
							Особиста інформація
						</div>
						<div class="form-item">
							<label for="lastname" class="form-item-title">
								Прізвище *
							</label>
							<input id="lastname" name="user_surname" type="text" pattern="[А-Яа-яЇїІіҐґЄє`´ʼ’ʼ’]{3,}" title="Прізвище повинно бути українською мовою" required />
							<div class="form-item-tooltip">
								Вкажіть своє прізвище
							</div>
						</div>
						<div class="form-item">
							<label for="firsname" class="form-item-title">
								Ім'я *
							</label>
							<input id="firstname" name="user_name" type="text" pattern="[А-Яа-яЇїІіҐґЄє`´ʼ’ʼ’]{3,}" title="Ім'я повинно бути українською мовою" required />
							<div class="form-item-tooltip">
								Вкажіть своє ім'я
							</div>
						</div>
						<div class="form-item">
							<label for="middlename" class="form-item-title">
								По батькові
							</label>
							<input id="middlename" name="user_lastname" type="text" pattern="[А-Яа-яЇїІіҐґЄє`´ʼ’ʼ’]{3,}" title="По батькові повинно бути українською мовою">
							<div class="form-item-tooltip">
								Вкажіть своє по-батькові
							</div>
						</div>
						<div class="form-item">
							<label for="telephone" class="form-item-title">
								Телефон(-и) *
							</label>
							<input id="telephone" name="user_phone" type="telephone"  pattern="\+([0-9]{1,2})(\([0-9]{3,4}\))-([0-9]{3})-([0-9]{2})-([0-9]{2})" title="Приклад: +380(93)-000-00-00" required />
							<div class="form-item-tooltip">
								Вкажіть свій номер телефону або декілька номерів через кому
							</div>
						</div>
						<div class="form-item">
							<label for="city" class="form-item-title">
								Місто *
							</label>
							<input id="city" name="user_city" type="text" pattern="[А-Яа-яЇїІіҐґЄє`´ʼ’ʼ’]{3,}" title="Введіть назву міста проживання українською мовою" required />
							<div class="form-item-tooltip">
								Вкажіть місто, в якому ви живете
							</div>
						</div>
					</div>
					<div class="form-block">
						<div class="form-block-title">
							Додаткова інформація
						</div>
						<div class="form-item">
							<label for="education" class="form-item-title">
								Вуз і факультет
							</label>
							<input id="education" name="user_academy" type="text" pattern="[А-Яа-яЇїІіҐґЄє`´ʼ’ʼ’]{3,}" title="Введіть назву вузу українською мовою"  required />
							<div class="form-item-tooltip">
								Вкажіть вуз і факультет, на якому ви навчаєтесь
							</div>
						</div>
						<div class="form-item form-item--photo">
							<label for="photo" class="form-item-title">
								Фото
							</label>
							<div class="loaded-photo"></div>
	   						<input id="photo" name="user_avatar" type="file" class="hide-input" accept="image/*,image/jpeg,,image/jpg,image/png,image/bmp" required />
	   						<label for="photo" class="button button-big button-full button-full--blue"><span>Обрати фото</span></label>
  							<div class="form-item-tooltip">
								Завантажте фото об'ємом до 5МБ. Підтримуються формати .jpeg, .jpg, .png, .bmp
							</div>
						</div>
						<div class="form-item form-item--textarea">
							<label for="info" class="form-item-title">
								Звідки ви дізналися про "МагістрЗНО"? *
							</label>
							<textarea id="info" name="user_registred" id="" cols="" rows="" required ></textarea>
							<div class="form-item-tooltip">
								Вкажіть, будь ласка, джерело, з якого ви дізналися про наш сайт
							</div>
							<div class="form-item-title">
								* Поля, відмічені зірочками, заповнюються обов'язково.
							</div>
						</div>
					</div>
					<div class="form-item form-item--send">
						<a href=""
							class="submitter button button-full button-width button-full--blue"
							data-form="registration_form_user">
							ЗАРЕЄСТРУВАТИСЯ
						</a>
					</div>
				</form>
		</div>
	</div>
</div>
<?php require_once(BLOCK_FOLDER . "/footer.php"); ?>