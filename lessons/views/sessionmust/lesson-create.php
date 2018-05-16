<?php
	get_header();
?>
<form class="lesson-create" action="" method="post">
		<label><input type="checkbox" name="control">Сделать контрольным</label>
		<label><input type="checkbox" name="same_lang" value="1">Заполнить все в одном варианте</label>
		<label><input type="checkbox" name="is_verbal">Устный урок</label>
		<table>
		<tr>
			<td>
				<table>
					<tr>
						<td>
							<p style="text-align: start;margin-left: 30px;">Курсы</p>
							<select id="course_list" class="select-width-200" name="course" data-filter="lesson-create">
								<option value="0">Без курса</option>
							</select>
							<p style="text-align: start;margin-left: 30px;">Темы</p>
							<select id="theme_list" class="select-width-200" name="theme">
								<option value="0">Без темы</option>
							</select>
						</td>
					</tr>
				</table>
<table class="lesson-create-teach-container">
	<tr>
		<td>
			<p>Предмет</p>
			<select id="subject" class="select-width-200" name="subject" data-filter="lesson-create">
				<option value="0">--</option>
			</select>
		</td>
		<td>
			<p>Учитель</p>
			RU
			<select id="teacher_ru" name="teacher_ru" class="select-width-200">
				<option>--</option>
			</select><br>
			UA
			<select id="teacher_ua" name="teacher_ua" class="select-width-200">
				<option>--</option>
			</select>
		</td>
	</tr>
</table>

			</td>
			<td>

			<p>Дата проведения(RU)</p>
			<input name="date_ru" type="datetime-local" required ></input>
			<p>Дата проведения(UA)</p>
			<input name="date_ua" type="datetime-local" ></input>
			</td>
			<td>
			<p>Название урока</p>
			<input name="title_ru" required="" placeholder="RU">
			<input name="title_ua" placeholder="UA">



			<p>Ссылка на видео-трансляцию</p>
			<input name="video_ru" required="" placeholder="RU">
			<input name="video_ua" placeholder="UA">
			</td>
		</tr>
		</table>
		<p>Дополнительные ссылки</p>
		<textarea name="links_ru" id="" required="" cols="100" rows="10" >RU</textarea>
		<script type='text/javascript'>
				CKEDITOR.replace('links_ru');
			</script>

		<textarea name="links_ua" id="" cols="100" rows="10" >UA</textarea>
		<script type='text/javascript'>
				CKEDITOR.replace('links_ua');
			</script>
	
		<input type="submit" value="Далее" name="send">

	</form>
<?php require_once(BLOCK_FOLDER . "/footer.php"); ?>