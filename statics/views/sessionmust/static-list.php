<?php
	get_header();
?>
<div class="container">
	<div class="row">
		<div class="form-page-title">
			<h1>
				Список статических страниц и новостей
			</h1>
		</div>
		<div class="content text">
			<h2 class="static-page-title-2">Страницы новостей</h2>
			<table class="static-list-table">
				<thead>
					<tr>
						<th>Название</th>
						<th>Просм.</th>
						<th>Ред.</th>
						<th>Удалить</th>
						<th>Дата</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if(!empty($data['news'])) {
							foreach($data['news'] as $value) {
								printf('<tr>
											<td title="%s">%s</td>
											<td><a href="%s" target="_blank"><i class="fa fa-search" aria-hidden="true"></i></a></td>
											<td><a href="%s" target="_blank"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
											<td><a href=""><i class="fa fa-trash" aria-hidden="true"></i><a/></td>
											<td class="date">%s</td>
										</tr>', $value['static_name'], mb_substr($value['static_name'], 0, 50, "UTF-8")
											  , PROTOCOL . SITE_NAME . 'statics/watch/' . $value['id']
											  , PROTOCOL . SITE_NAME . 'statics/redact/' . $value['id'], $value['static_date']);
							}
						}
					?>
				</tbody>
			</table>
			<h2 class="static-page-title-2">Статические страницы</h2>
			<table class="static-list-table">
				<thead>
					<tr>
						<th>Название</th>
						<th>Просм.</th>
						<th>Ред.</th>
						<th>Удалить</th>
						<th>Дата</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if(!empty($data['statics'])) {
							foreach($data['statics'] as $value) {
								printf('<tr>
											<td title="%s">%s</td>
											<td><a href="%s" target="_blank"><i class="fa fa-search" aria-hidden="true"></i></a></td>
											<td><a href="%s" target="_blank"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
											<td><a href=""><i class="fa fa-trash" aria-hidden="true"></i><a/></td>
											<td class="date">%s</td>
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