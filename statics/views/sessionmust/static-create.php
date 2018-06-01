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
		<h1 class="form-page-title">Створення статичних сторінок та новин</h1>
		<div class="content">
		<div class="url-data">
			<?php
				if(!empty($url)) {
					printf('<h3>Посилання на сторінку: <a href="%s" target="_blank">%s</a></h3>', $url, $url);
				}
			?>
		</div>
		<form action="" class="static-create" method="post" id="creation_static_admin">
			<div class="static-form-group float-left-block">
				<label> <p>Ключові слова</p>
					<textarea name="static_keywords" id="static_keywords" class="element-width-350"></textarea>
				</label>
				<br>
				<label> 
					<p>Опис сторінки</p>
					<textarea name="static_description" id="static_description" class="element-width-350"></textarea>
				</label>
			</div>
			<div class="static-form-group float-left-block element-margin-left-20">
				<p>Тип статичної сторінки</p>
				<label><input type="radio" name="static_type" value="1" checked=""> Новина</label> <br>
				<label><input type="radio" name="static_type" value="2"> Статична сторінка</label>
			</div>
			<div class="clear"></div>
			<div class="static-form-group">
				<label> <p>Назва сторінки</p>
					<input type="text" name="static_name" class="element-width-350">
				</label>
				<br>
				<label> <p>Вміст сторінки</p>
					<textarea name="static_content" id="static_content"></textarea>
					<script type='text/javascript'>
						CKEDITOR.replace('static_content');
					</script>
				</label>
			</div>
			<input type="hidden" name="static_date" value="<?php echo Date('Y-m-d'); ?>">
			<input type="hidden" name="action" value="create-static-post">
			<a href=""
				class="submitter block-display button button-full button-full--blue button-width"
				data-form="creation_static_admin">
				СТВОРИТИ
			</a>
		</form>
	</div>
</div>
</div>
<?php require_once(BLOCK_FOLDER . "/footer.php"); ?>