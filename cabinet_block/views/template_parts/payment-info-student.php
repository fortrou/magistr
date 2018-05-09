<?php
	if(isset($_GET['tab']) && $_GET['tab'] == 3) $active = "active";
?>
<div class="tabs-content <?php echo $active; $active = '';?>">
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
								<div class="course-block unpayed-course">	
									<div class="course-element course-element--courseName">
										<span class="course-item">КУРС:</span>
										<span class="course-item course-item--value">Course Name</span>
									</div>
									<div class="course-element course-element--price">
										<span class="course-item">СУМА:</span>
										<span class="course-item course-item--value">1000 грн.</span>
									</div>
									<div class="course-element course-element--button">
										<a href="" class="course-pay-button">
											СПЛАТИТИ
										</a>
									</div>
									<div class="course-element course-element--term">
										<span class="course-item">ТЕРМІН ОПЛАТИ:</span> 
										<span class="course-item course-item--value">30 днів</span>
									</div>
								</div>
								<div class="course-block payed-course">	
									<div class="course-element course-element--courseName">
										<span class="course-item">КУРС:</span>
										<span class="course-item course-item--value">Course Name</span>
									</div>
									<div class="course-element course-element--price">
										<span class="course-item">СУМА:</span>
										<span class="course-item course-item--value">1000 грн.</span>
									</div>
									<div class="course-element course-element--button">
										<a href="" class="course-pay-button">
											ПОДОВЖИТИ
										</a>
									</div>
									<div class="course-element course-element--term">
										<span class="course-item">ТЕРМІН ОПЛАТИ:</span> 
										<span class="course-item course-item--value">30 днів</span>
									</div>
								</div>
																<div class="course-block payed-course">	
									<div class="course-element course-element--courseName">
										<span class="course-item">КУРС:</span>
										<span class="course-item course-item--value">Course Name</span>
									</div>
									<div class="course-element course-element--price">
										<span class="course-item">СУМА:</span>
										<span class="course-item course-item--value">1000 грн.</span>
									</div>
									<div class="course-element course-element--button">
										<a href="" class="course-pay-button">
											ПОДОВЖИТИ
										</a>
									</div>
									<div class="course-element course-element--term">
										<span class="course-item">ТЕРМІН ОПЛАТИ:</span> 
										<span class="course-item course-item--value">30 днів</span>
									</div>
								</div>

							</div>
							<div class="form-item pay-block">	
								Сплатити через банк (натисніть на кнопку 'Сгенерувати платiжку', щоб отримати реквізити для cплати у банку)
								<div class="form-item form-item--btn">
										<a href=""
											class="submitter button button-full button-full--blue"
											data-form=" ">
											Згенерувати платіжку
										</a>
										<a href=""
											class="submitter button button-full button-full--blue"
											data-form=" ">
											Прикріпити файл
										</a>
										<a href=""
											class="submitter button button-full button-full--blue"
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