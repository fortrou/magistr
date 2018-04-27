<?php

	get_header();
?>
<div class="container">
	<div class="row">
		<h1>Список статических страниц и новостей</h1>
		<div class="content">
			<h2>Новости</h2>
			<table>
				<thead>
					<tr>
						<td>Название</td>
						<td>Просмотр</td>
						<td>Редактирование</td>
						<td>Удалить</td>
						<td>Дата</td>
					</tr>
				</thead>
				<tbody>
					<?php
						if(!empty($data['news'])) {
							foreach($data['news'] as $value) {
								printf('<tr>
											<td title="%s">%s</td>
											<td><a href="%s">Посмотреть</a></td>
											<td><a href="%s">Редактировать</a></td>
											<td></td>
											<td>%s</td>
										</tr>', $value['static_name'], mb_substr($value['static_name'], 0, 50, "UTF-8")
											  , PROTOCOL . SITE_NAME . 'statics/watch/' . $value['id']
											  , PROTOCOL . SITE_NAME . 'statics/redact/' . $value['id'], $value['static_date']);
							}
						}
					?>
				</tbody>
			</table>
			<h2>Статические страницы</h2>
			<table>
				<thead>
					<th>
						<td>Название</td>
						<td>Просмотр</td>
						<td>Редактирование</td>
						<td>Удалить</td>
						<td>Дата</td>
					</th>
				</thead>
				<tbody>
					<?php
						if(!empty($data['statics'])) {
							foreach($data['statics'] as $value) {
								printf('<tr>
											<td title="%s">%s</td>
											<td><a href="%s">Посмотреть</a></td>
											<td><a href="%s">Редактировать</a></td>
											<td></td>
											<td>%s</td>
										</tr>', $value['static_name'], mb_substr($value['static_name'], 0, 50, "UTF-8")
											  , PROTOCOL . SITE_NAME . 'statics/watch/' . $value['id']
											  , PROTOCOL . SITE_NAME . 'statics/redact/' . $value['id'], $value['static_date']);
							}
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php require_once(BLOCK_FOLDER . "/footer.php"); ?>