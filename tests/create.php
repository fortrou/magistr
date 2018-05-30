<?php
/*if(!isset($_GET['tab'])){
	header("Location:create.php?tab=1");
}*/
require_once('../tpl_php/autoload.php');
session_start();
/*if(!isset($_SESSION['data'])){
header("Location:../index.php");
}*/
//var_dump($_POST);
//var_dump($_SESSION['lesson']);
$db = Database::getInstance();
$mysqli = $db->getConnection();
if(isset($_POST['createTest'])){
	Test::createTest($_POST['tName'], 4);
	/*$sql = sprintf("INSERT INTO os_lesson_test(id_lesson,id_test,type) VALUES(%s,%s,%s)",
		$_SESSION['lesson']['lesson_id'],$_SESSION['test']['id'],$_SESSION['lesson']['test_type']);
	//print($sql);
	$result = $mysqli->query($sql*/	
	header("Location:createquestion.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Створити тест</title>
		<meta name="description" content=" ">
		<meta name="keywords" content=" ">
		<?php
			include ("../tpl_blocks/head.php");
		?>
		<!--<script src="../tpl_js/lessons.js"></script>-->
	</head>
	<body>
	<?php
		include ("../tpl_blocks/header-cabinet.php");
	?>
		<div class="content">
			<div class="testes">
				<form method='post' action='create.php' class='createTest'>    
					<input type='text' name='tName' class='questForm' placeholder='Введіть назву тесту' required>
					<span class='testText'>Введіть назву тесту</span>
					<br>
					<input type='submit' name='createTest' class='sbm' value='Створити'>
				</form>
			</div>
		</div>
	<?php
		include ("../tpl_blocks/footer.php");
	?>
	</body>
</html>