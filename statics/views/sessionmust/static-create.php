<?php 
	if(isset($_POST['action']) && $_POST['action'] == 'create-static-post') {
		try {
			$id = StaticPages::create_static($_POST);
			$url = PROTOCOL . SITE_NAME . "statics/watch/" . $id;
		} catch(Exception $e) {
			print($e);
		}
	}
	get_header(); 
?>
<div class="container">
	<div class="row">
		<h1 class="form-page-title">Создание статических страниц и новостей</h1>
		<div class="url-data">
			<?php
				if(!empty($url)) {
					printf('<h3 style="margin: 10px 250px;">Ссылка на страницу: <span style="font-weight: bold; color: red;">%s</span></h3>', $url);
				}
			?>
		</div>
		<form action="" class="static-create" method="post" id="creation_static_admin">
			<div class="form-group float-left-block">
				<label> <p>Ключевые слова</p>
					<textarea name="static_keywords" id="static_keywords" class="element-width-350"></textarea>
				</label>
				<br>
				<label> <p>Описание страницы</p>
					<textarea name="static_description" id="static_description" class="element-width-350"></textarea>
				</label>
			</div>
			<div class="form-group float-left-block element-margin-left-20">
				<p>Тип статической страницы</p>
				<label><input type="radio" name="static_type" value="1" checked=""> Новости</label> <br>
				<label><input type="radio" name="static_type" value="2"> Статические страницы</label>
			</div>
			<div class="clear"></div>
			<div class="form-group">
				<label> <p>Название страницы</p>
					<input type="text" name="static_name" class="element-width-350">
				</label>
				<br>
				<label> <p>Содержимое страницы</p>
					<textarea name="static_content" id="static_content"></textarea>
					<script type='text/javascript'>
						CKEDITOR.replace('static_content');
					</script>
				</label>
			</div>
			<input type="hidden" name="static_date" value="<?php echo Date('Y-m-d'); ?>">
			<input type="hidden" name="action" value="create-static-post">
			<a href=""
				class="submitter block-display button-full-blue element-border-radius-5 element-width-400"
				data-form="creation_static_admin">
				СОЗДАТЬ
			</a>
		</form>
	</div>
</div>
<?php require_once(BLOCK_FOLDER . "/footer.php"); ?>