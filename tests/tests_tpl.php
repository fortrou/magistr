<head>  		
	<title>Тренувальний тест</title>
	<meta name="description" content=" ">
	<meta name="keywords" content=" ">

	<?php
		include ("../tpl_blocks/head.php");
	?>

</head>
<body>
	<?php
		include ("../tpl_blocks/header.php");
	?>
	
	<div class="content">
		<div class="block0">
			<div class="test_ttts">
			
				<h1>Тренувальний тест</h1>	
				<h5>Назва предмету</h5>
				<h5>Назва теми</h5>	
			<form>
				<div class="test_type_1">
					<h6>№ питання. Текст питання</h6>
					<label><input type="radio" value="1" name="test_type_1"> <span>Відповідь А</span></label><br>
					<label><input type="radio" value="2" name="test_type_1"> <span>Відповідь Б</span></label><br>
					<label><input type="radio" value="3" name="test_type_1"> <span>Відповідь В</span></label><br>
					<label><input type="radio" value="4" name="test_type_1"> <span>Відповідь Г</span></label>
				</div> 
			 
			</form>
			</div> 
		</div> 
	</div> 
	
	<?php
		include ("../tpl_blocks/footer.php");
	?>
</body> 
</html> 