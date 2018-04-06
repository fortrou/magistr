<?php require_once(BLOCK_FOLDER . "/header.php"); ?>
	<div class="container">
		<div class="row">
			<div class="registration-form">
				<form action="" method="post">
					<div class="registration-form-block">
						<div class="registration-form-block-title">
									Інформація для входу
						</div>
						<div class="form-item">
							<label for="email" class="form-item-title">
									Введіть ваш email *
							</label>
							<input id="email" name="email" type="email">
							<div class="form-item-tooltip">	
									Ваш email буде використовуватися для входу в особистий профіль
							</div>
						</div>
						<div class="form-item">
							<label for="password" class="form-item-title">
									Введіть ваш пароль *
							</label>
							<input id="password" name="password" type="password">
							<div class="form-item-tooltip">	
									Оберіть надійний пароль із латинських символів та/або цифр
							</div>
						</div>
						<div class="form-item">
							<label for="password-re-enter" class="form-item-title">
									Повторіть ваш пароль *
							</label>
							<input id="password-re-enter" name="password-re-enter" type="password">
							<div class="form-item-tooltip">	
									Повторіть пароль
							</div>
						</div>
					</div>
					<div class="registration-form-block">
						<div class="registration-form-block-title">
									Особиста інформація
						</div>
						<div class="form-item">
							<label for="lastname" class="form-item-title">
									Прізвище *
							</label>
							<input id="lastname" name="lastname" type="text">
							<div class="form-item-tooltip">	
									Вкажіть своє прізвище
							</div>
						</div>
						<div class="form-item">
							<label for="firsname" class="form-item-title">
									Ім'я *
							</label>
							<input id="firstname" name="firstname" type="text">
							<div class="form-item-tooltip">	
									Вкажіть своє ім'я
							</div>
						</div>
						<div class="form-item">
							<label for="middlename" class="form-item-title">
									По-батькові
							</label>
							<input id="middlename" name="middlename" type="text">
							<div class="form-item-tooltip">	
									Вкажіть своє по-батькові
							</div>
						</div>
						<div class="form-item">
							<label for="telephone" class="form-item-title">
									Телефон(-и) *
							</label>
							<input id="telephone" name="telephone" type="telephone">
							<div class="form-item-tooltip">	
									Вкажіть свій номер телефону або декілька номерів через кому
							</div>
						</div>
						<div class="form-item">
							<label for="city" class="form-item-title">
									Місто *
							</label>
							<input id="city" name="city" type="text">
							<div class="form-item-tooltip">	
									Вкажіть місто, в якому ви живете
							</div>
						</div>	
					</div>
					<div class="registration-form-block">
						<div class="registration-form-block-title">
									Додаткова інформація
						</div>
						<div class="form-item">
							<label for="education" class="form-item-title">
									Вуз і факультет *
							</label>
							<input id="education" name="education" type="text">
							<div class="form-item-tooltip">	
									Вкажіть вуз і факультет, на якому ви навчаєтесь
							</div>
						</div>
						<div class="form-item form-item--photo">
							<label for="photo" class="form-item-title">
									Фото *
							</label>				
							<form enctype="multipart/form-data" method="post">
	   							<input id="photo" name="photo" type="file" accept="image/*,image/jpeg,,image/jpg,image/png,image/bmp">
	   							<!--<input type="submit" value="Отправить">-->
  							</form>
  							<div class="form-item-tooltip">	
									Завантажте фото об'ємом до 5МБ. Підтримуються формати .jpeg, .jpg, .png, .bmp
							</div>
						</div>
						<div class="form-item form-item--textarea">
							<label for="info" class="form-item-title">
									Звідки ви дізналися про "МагістрЗНО"? *
							</label>
							<textarea id="info" name="info" id="" cols="" rows="">
							</textarea>
							<div class="form-item-tooltip">	
									Вкажіть, будь ласка, джерело, з якого ви дізналися про наш сайт
							</div>
						</div>
						<div class="form-item-title">
									* Поля, відмічені зірочками, заповнюються обов'язково.
						</div>	
					</div>
					
					<!--<input type="button" value="ЗАРЕЄСТРУВАТИСЯ">-->
					
			
				</form>
			</div>
		</div>
	</div>
<?php require_once(BLOCK_FOLDER . "/footer.php"); ?>