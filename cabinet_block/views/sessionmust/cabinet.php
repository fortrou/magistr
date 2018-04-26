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
									<img src="/tpl_img/logo-mini.png" alt="mini-logo">
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
							<li>
								<a href="">
									Курс
								</a>
							</li>
							<li class="menu-profile-element">
								<a href="">
									Профіль
								</a>
								<div class="menu-profile-photo">
									<img src="/tpl_img/logo-mini.png" alt="profile-photo" class="">
								</div>
								<img src="/tpl_img/sort_down.png" alt="sort_down" class="menu-arrow-down">
							</li>
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
					<li class="active">
						<a href="">
							Персональна інформація
						</a>
					</li>
					<li>
						<a href="">
							Керування розсилками
						</a>
					</li>
					<li>
						<a href="">
							Оплата курсів
						</a>
					</li>
				</ul>
				
					<div class="tabs-content ">
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
					<div class="tabs-content">
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
					<div class="tabs-content active">
						<div class="form profile-form profile-form-pay">
							<div class="profile-title">
								Формування платежів
							</div>
							<div class="form-item">	
								Інформація щодо сплати <span class="fa fa-question-circle info-tooltip" aria-hidden="true"></span>
								<div class="info-tooltip-block">
									<p>1) Онлайн-оплата навчання</p>
									<p>Здійснюється за допомогою інтернет-сервісу електронних платежів 
									 <a href="http://wwww.liqpay.com" target="_blank">LIQPAY</a>. Кошти автоматично перераховуються на рахунок Онлайн-школи з врахуванням комісії протягом 1 банківського дня.
									</p>
									<p>2) Оплата навчання по квитанції.</p>
									<p>Ви можете створити квитанцію для оплати, роздрукувати її, оплатити навчання в будь-якому банку і завантажити назад нам оплачений чек, щоб ми подовжили вам доступ до навчання.</p>
								</div>
							</div>
							<div class="form-item course-blocks">	
								<div class="course-block payed-course">	
									<div class="course-element course-element--name">
										Курс: 
										<span class="course-name-title"></span>
									</div>
									<div class="course-element course-element--price">
										Сума: 
										<span class="course-price-summ"></span>
									</div>
									<div class="course-element course-element--button">
										<a href="" class="course-pay-button">
											ПОДОВЖИТИ
										</a>
									</div>
									<div class="course-element course-element--term">
										Термін оплати: 
										<span class="course-term-days"></span>
									</div>
								</div>
								<div class="course-block unpayed-course">	
									<div class="course-element course-element--name">
										Курс: 
										<span class="course-name-title"></span>
									</div>
									<div class="course-element course-element--price">
										Сума: 
										<span class="course-price-summ"></span>
									</div>
									<div class="course-element course-element--button">
										<a href="" class="course-pay-button">
											СПЛАТИТИ
										</a>
									</div>
									<div class="course-element course-element--term">
										Термін оплати: 
										<span class="course-term-days"></span>
									</div>
								</div>

							</div>
							<div class="form-item pay-block">	
								Сплатити через банк (натисніть на кнопку 'Сгенерувати платiжку', щоб отримати реквізити для cплати у банку)
								<div class="form-item form-item--btn">
										<a href=""
											class="submitter block-display button-full-blue element-border-radius-5 "
											data-form=" ">
											Згенерувати платіжку
										</a>
										<a href=""
											class="submitter block-display button-full-blue element-border-radius-5 "
											data-form=" ">
											Прикріпити файл
										</a>
										<a href=""
											class="submitter block-display button-full-blue element-border-radius-5 "
											data-form=" ">
											Відправити квитанцію
										</a>
								</div>
							</div>
							<div class="form-item pay-block">	
								Щоб вiдправити копію чека про сплату квитанції, сфотографуйте її або вiдскануйте, натисніть на кнопку "Прикріпити файл", оберіть файл, i коли вiн завантажиться, натисніть на кнопку "Вiдправити квитанцію" і вiдправте її нам. Можна завантажити файли формату: .png, .jpeg, .jpg
							</div>
						</div>
						

					</div>
				
			</div>

			<?php 
				//global $user_cookie;
				//if(!empty($user_cookie) && $user_cookie['level'] == 1) {
					//require_once(VIEW . '/template_parts/personal-info.php');
				//}
			?>

		</div>
	</div>
<?php require_once(BLOCK_FOLDER . "/footer.php"); ?>