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
							<span class="tooltip">	
									Ваш email буде використовуватися для входу в особистий профіль
							</span>
						</div>
						<div class="form-item">
							<label for="password" class="form-item-title">
									Введіть ваш пароль *
							</label>
							<input id="password" name="password" type="password">
							<span class="tooltip">	
									Оберіть надійний пароль із латинських символів та/або цифр
							</span>
						</div>
						<div class="form-item">
							<label for="password-re-enter" class="form-item-title">
									Повторіть ваш пароль *
							</label>
							<input id="password-re-enter" name="password-re-enter" type="password">
							<span class="tooltip">	
									Повторіть пароль
							</span>
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
							<span class="tooltip">	
									Вкажіть своє прізвище
							</span>
						</div>
						<div class="form-item">
							<label for="firsname" class="form-item-title">
									Ім'я *
							</label>
							<input id="firstname" name="firstname" type="text">
							<span class="tooltip">	
									Вкажіть своє ім'я
							</span>
						</div>
						<div class="form-item">
							<label for="middlename" class="form-item-title">
									По-батькові
							</label>
							<input id="middlename" name="middlename" type="text">
							<span class="tooltip">	
									Вкажіть своє по-батькові
							</span>
						</div>
						<div class="form-item">
							<label for="telephone" class="form-item-title">
									Телефон(-и) *
							</label>
							<input id="telephone" name="telephone" type="telephone">
						</div>
						<div class="form-item">
							<label for="city" class="form-item-title">
									Місто *
							</label>
							<input id="city" name="city" type="text">
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
						</div>
						<div class="form-item form-item--photo">
							<label for="photo" class="form-item-title">
									Фото *
							</label>
							<input id="photo" name="photo" type="text">
						</div>
						<div class="form-item form-item--textarea">
							<label for="info" class="form-item-title">
									Звідки ви дізналися про "МагістрЗНО"? *
							</label>
							<textarea id="info" name="info" id="" cols="30" rows="10"></textarea>
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