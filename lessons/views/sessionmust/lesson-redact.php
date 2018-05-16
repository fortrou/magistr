<?php
	get_header();
?>
	<form action="" method="post">
		<div class="block_adm_rr">
			<?php
			if ($_POST["is_control"] == 1) {
				print("<input name='uncontrol' type='submit' value='Сделать обычным(Не контрольным)'>");
			}
			else{
				print("<input name='control' type='submit' value='Сделать контрольным'>");
			}
			if ($_POST["is_verbal"] == 1) {
				print("<input name='unverbal' type='submit' value='Сделать оцениваемым'>");
			}
			else{
				print("<input name='verbal' type='submit' value='Сделать устным'>");
			}
			$sql = sprintf("SELECT * FROM os_subjects WHERE id IN (SELECT id_s FROM os_class_subj WHERE class IN(
								   SELECT id_class FROM os_lesson_classes WHERE id_lesson=%s))",$id);
			//print("<br>$sql<br>");
			$res = $mysqli->query($sql);

			?>
			<p>Предмет</p>		
			<select name="subject" multiple size="7" class="select-width-200">
		<?php
		
			if ($_POST["subject"] == 0) {
				print("<option value='0' selected>Не выбран предмет</option>");
			}
			else{
				print("<option value='0'>Не выбран предмет</option>");
			}
			while ($row = $res->fetch_assoc()) {
				if ($_POST["subject"] == $row["id"]) {
					printf("<option value='%s' selected>%s</option>",$row["id"],$row["name_ru"]);
				}
				else{
					printf("<option value='%s'>%s</option>",$row["id"],$row["name_ru"]);
				}
			}
		?>
			</select>
			<?php
				/*Courses meta*/
				$sql = sprintf("SELECT * FROM os_themes WHERE theme_subject = %s AND id IN (SELECT id_theme FROM os_theme_classes WHERE id_class IN ( SELECT id_class FROM os_lesson_classes WHERE id_lesson = %s))", $_POST['subject'], $_POST['id']);
				$res = $mysqli->query($sql);
			?>
			<select id="theme_list" class="select-width-200" name="theme">
			<option value="0">Без темы</option>
				<?php
					while ($row = $res->fetch_assoc()) {
						$selected = "";
						if($_POST['theme'] == $row['id']) $selected = " selected";
						printf("<option value='%s' $selected>%s</option>",$row['id'],$row['theme_name_ru']);
					}
				?>
			</select>
		</div>
		<div class="block_adm_rr">
		<p>Дата проведения(UA)</p>
		<input name="date_ua" type="datetime-local" required value="<? print( strftime("%Y-%m-%dT%H:%M" , strtotime($_POST['date_ua']))) ?>"></input>
		<p>Дата проведения(RU)</p>
		<input name="date_ru" type="datetime-local" required value="<? print( strftime("%Y-%m-%dT%H:%M" , strtotime($_POST['date_ru']))) ?>"></input>
		</div>
		
		<div class="block_adm_rr">
		<p>Название урока</p>
		<label>Русск. язык<input name="title_ru" required="" value="<?=$_POST['title_ru'] ?>" placeholder="RU">
		<label>Укр. мова<input name="title_ua" required="" value="<?=$_POST['title_ua'] ?>" placeholder="UA">
		</div>
		
		<?php if($_SESSION['data']['level']!=2): ?>
		<div class="block_adm_rr">
			<?php
				$sql_teachers = sprintf("SELECT * FROM os_users WHERE level=2 AND 
					id IN (SELECT id_teacher FROM os_teacher_class WHERE id_c IN (SELECT id_class FROM os_lesson_classes WHERE id_lesson='%s')) AND
					id IN (SELECT id_teacher FROM os_teacher_subj WHERE id_s=(SELECT DISTINCT subject FROM os_lessons WHERE id='%s'))",$_GET['id'],$_GET['id']);
				//print("<br>$sql_teachers<br>");
				$res_teachers = $mysqli->query($sql_teachers);
			?>
		<p>Учитель</p>
		UA
		<select id="teacher_ua" name="teacher_ua">
			<option value="0">Учитель не выбран</option>
			<?php 
			while ($row_teachers = $res_teachers->fetch_assoc()) {
				if($_POST["teacher_ua"] == $row_teachers['id'])
					printf("<option selected value='%s'>%s %s ( %s )</option>",
						$row_teachers['id'],$row_teachers['surname'],$row_teachers['name'],$row_teachers['login']);
				else
					printf("<option value='%s'>%s %s ( %s )</option>",
						$row_teachers['id'],$row_teachers['surname'],$row_teachers['name'],$row_teachers['login']);
			}
			?>
		</select>
		RU
		<select id="teacher_ru" name="teacher_ru">
			<option value="0">Учитель не выбран</option>
			<?php
			$res_teachers = $mysqli->query($sql_teachers);
			while ($row_teachers = $res_teachers->fetch_assoc()) {
				if($_POST["teacher_ru"] == $row_teachers['id'])
					printf("<option selected value='%s'>%s %s ( %s )</option>",
						$row_teachers['id'],$row_teachers['surname'],$row_teachers['name'],$row_teachers['login']);
				else
					printf("<option value='%s'>%s %s ( %s )</option>",
						$row_teachers['id'],$row_teachers['surname'],$row_teachers['name'],$row_teachers['login']);
			}
			
			?>
		</select>
		</div>
		<?php endif; ?>

		
		<div class="block_adm_rr">
		<p>Ссылка на видео-трансляцию</p>
		<label>Русск. язык<input name="video_ru" required="" value="<?=$_POST['video_ru'] ?>" placeholder="UA"></label>
		<label>Укр. мова<input name="video_ua" required="" value="<?=$_POST['video_ua'] ?>" placeholder="RU"></label>
		</div>
		

		<?php if($_SESSION['data']['level']!=2): ?>
		<div class="block_adm_rr">		
		<p>Конспект</p>
		<span>Українською мовою</span>
		<textarea name="summary_ua"  cols="100" rows="10"><? print($_POST['summary_ua']); ?></textarea>
		<script type='text/javascript'>
				CKEDITOR.replace('summary_ua');
			</script>
		<span>На русском языке</span>
		<textarea name="summary_ru"  cols="100" rows="10"><? print($_POST['summary_ru']); ?></textarea>
		<script type='text/javascript'>
				CKEDITOR.replace('summary_ru');
			</script>
		</div>
		
		<?php endif; ?>
		<?php if($_SESSION['data']['level']!=2): ?>
		<div class="block_adm_rr">
		<p>Дополнительные ссылки</p>
		<span>Українською мовою</span>
		<textarea name="links_ua" id="" required="" cols="100" rows="10" ><? print($_POST['links_ua']); ?></textarea>
		<script type='text/javascript'>
				CKEDITOR.replace('links_ua');
			</script>
		<span>На русском языке</span>
		<textarea name="links_ru" id="" required="" cols="100" rows="10" ><? print($_POST['links_ru']); ?></textarea>
		<script type='text/javascript'>
				CKEDITOR.replace('links_ru');
			</script>
		</div>
		<?php endif; ?>
		
		
		
		<input type="submit" value="Сохранить" name="send">
		<hr>
		<div class="back_to_less"><a href="watch.php?id=<?=$id?>">Вернуться в урок</a></div>
	</form>
<?php require_once(BLOCK_FOLDER . "/footer.php"); ?>