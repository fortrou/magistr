<?php
session_start();
/*if(strpos($_SERVER['HTTP_REFERER'],'redactme') != false && !isset($_SESSION['referer'])){
    $_SESSION['referer'] = "redact";
}*/
//var_dump($_SESSION['referer']);

/*if(!isset($_SESSION['test'])){
	header("Location:create.php");
}

if(!isset($_SESSION['data'])){
header("Location:../index.php");
}*/

require '../tpl_php/autoload.php';
$db = Database::getInstance();
    $mysqli = $db->getConnection();

	if(!isset($_SESSION['counter'])){
        $_SESSION['counter'] = 4;
        $cnt = 4;
    }
    else{
        $cnt = $_SESSION['counter'];
    }
    if(!isset($_SESSION['matchcnt'])){
        $_SESSION['matchcnt'] = 5;
        $matchcnt = 5;
    }
    else{
        $matchcnt = $_SESSION['matchcnt'];
    } 
    if (!isset($_SESSION['typeGlobal'])) {
        $_SESSION['typeGlobal'] = 1;
    }
    if(isset($_POST['select'])){
        $_SESSION['typeGlobal'] = $_POST['type'];
    }
    if(!isset($_SESSION['correct']))
        $_SESSION['correct'] = array();
    if(!isset($_SESSION['an_pics']))
        $_SESSION['an_pics'] = array();
    if(!isset($_SESSION['doc']))
        $_SESSION['doc'] = array();

    /*** Добавление/удаление поля с вариантом ответа ***/
    if(isset($_POST['add_more'])){
        $_SESSION['counter']++;
        //var_dump($_SESSION['correct']);
        //unset($_POST['add_more']);
        header("Location:createquestion.php");
    }
    if(isset($_POST['del_last'])){
        $_SESSION['counter']--;
        //var_dump($_SESSION['correct']);
        //unset($_POST['del_last']);
        header("Location:createquestion.php");
    }
    
    /*** Добавление/удаление поля с вариантом ответа ***/
    
    /*** Добавление/удаление поля с вариантом соответствия ***/
    if(isset($_POST['add_match'])){
        $_SESSION['matchcnt']++;
        header("Location:createquestion.php");
    }
    if(isset($_POST['del_match'])){
        $_SESSION['matchcnt']--;
        header("Location:createquestion.php");
    }
    /*** Добавление/удаление поля с вариантом соответствия ***/
    
    if(isset($_POST['quest'])){
        $_SESSION['correct']['quest'] = $_POST['quest'];
        $full_desc = $_POST['descAnswer'];
        $cost = $_POST['rangecost'];
    }
    for($var_c = 0;$var_c < $cnt; $var_c++){
        
        /*** Определяем название элемента массива ПОСТ для варианта ответа ***/
        $tstr1 = sprintf("answ%s",$var_c+1);
        /*** Определяем название элемента массива ПОСТ для варианта ответа ***/
        
        if(isset($_POST[$tstr1])){
            $_SESSION['correct'][$var_c] = $_POST[$tstr1];
            /*print("<br>");
            var_dump($_POST[$tstr1]);
            print("<br>");*/
        }
    }
    for($var_c = 0;$var_c < $matchcnt; $var_c++){
        
        /*** Определяем название элемента массива ПОСТ для варианта ответа ***/
        $tstr1 = sprintf("match%s",$var_c+1);
        /*** Определяем название элемента массива ПОСТ для варианта ответа ***/
        
        if(isset($_POST[$tstr1])){
            $_SESSION['match'][$var_c] = $_POST[$tstr1];
            /*print("<br>");
            var_dump($_POST[$tstr1]);
            print("<br>");*/
        }
    }
    
    /*** Добавление/удаление полей ***/
    
        if(isset($_POST['sbm'])){
            $desc = $_POST['descAnswer'];
            if($_SESSION['typeGlobal'] == 1){
                if(!isset($_POST['id1'])){
                    $ra = 0;
                }
                else{
                    $ra = $_POST['id1'];
                }
                
                //print("<br>".$ra."<br>");
                Quest::format_sql_1($_SESSION['correct']['quest'], $_SESSION['correct'], $_SESSION['typeGlobal'], 
                $cost, $_SESSION['counter'],$_SESSION['test']['id'],$ra,$desc,$_SESSION['doc']);
                
                Quest::unset_data();
                header("Location:createquestion.php");
            }
            if($_SESSION['typeGlobal'] == 2){
                $rArr = array();
                for($a = 1;$a<=$cnt;$a++){
                    $tca = sprintf("id%s",$a);
                    if(isset($_POST[$tca])){
                        $rArr[] = $_POST[$tca];
                    }
                }
                //var_dump($rArr);
                //print("<br>".$ra."<br>");
                Quest::format_sql_1($_SESSION['correct']['quest'], $_SESSION['correct'], $_SESSION['typeGlobal'],
                $cost, $_SESSION['counter'],$_SESSION['test']['id'],$rArr,$desc);
                
                Quest::unset_data();
                header("Location:createquestion.php");
            }
            
            if($_SESSION['typeGlobal'] == 3){
                $rArr = array();
                for($a = 1;$a<=$cnt;$a++){
                    $tca = sprintf("id%s",$a);
                    if(!isset($_POST[$tca])){
                        $rArr[] = 0;
                    }
                    else{
                        $rArr[] = $_POST[$tca];
                    }
                    
                }
                Quest::format_sql_4($_SESSION['correct']['quest'], $_SESSION['correct'], $_SESSION['typeGlobal'],
                $cost, $_SESSION['counter'],$_SESSION['test']['id'],$rArr,$desc);
                
                Quest::unset_data();
                header("Location:createquestion.php");
            }
            
            if($_SESSION['typeGlobal'] == 4){
                $rArr = array();
                for($a = 1;$a<=$cnt;$a++){
                    $tca = sprintf("id%s",$a);
                    //print("<br>$tca<br>");
                    if(!isset($_POST[$tca])){
                        $rArr[] = 0;
                    }
                    else{
                        $rArr[] = $_POST[$tca];
                    }
                }
                Quest::format_sql_4($_SESSION['correct']['quest'], $_SESSION['correct'], $_SESSION['typeGlobal'],
                $cost, $_SESSION['counter'],$_SESSION['test']['id'],$rArr,$desc);
                Quest::add_matches($_SESSION['correct']['quest'],$_SESSION['match'],$matchcnt);
                
                Quest::unset_data();
                //header("Location:createquestion.php");
            }
            if($_SESSION['typeGlobal'] == 5){
                Quest::format_sql_5($_SESSION['correct']['quest'], $_SESSION['typeGlobal'], 
                    $cost, $_SESSION['test']['id'], $desc, $_POST['answer']);
                Quest::unset_data();
                header("Location:createquestion.php");
            }
        }
    
    
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Створити тест</title>
        <?php require_once('../tpl_blocks/head.php'); ?>
		<meta name="description" content=" ">
		<meta name="keywords" content=" ">
        <script type="text/javascript" src="../editors/ckeditor/ckeditor.js"></script>
  <!--   <style>
      .matchRadio{
          list-style:none;
      }
      
      .matchRadio li{
          float:left;
          width:15px;
          margin-left:10px;
          border:1px solid transparent;
          text-align:center;
      }
  </style> -->
	</head>
	<body>
        <?php require_once('../tpl_blocks/header.php'); ?>
        <div class="content">
		<div class='createTest' >
    			<div class="testes">
                        <span class='testText'> Тест успішно створено, можна створювати форму </span>
                        <?php
                                $sql = "SELECT * FROM mag_tests WHERE id='".$_SESSION['test']['id']."'";
                                $res = $mysqli->query($sql);
                                $row = $res->fetch_assoc();
                                printf("<h2>Тип тесту: %s [ %s ]</h2>",$row['name'],$row['lang']);

                        ?>
                        <h5 class="text-left">
                            Список питань:
                        </h5>
                        <div id="quests_list" class="text-center">
                            <ul class="list_q">
                            <?php
                                $sql = "SELECT * FROM mag_test_quest WHERE id_test='".$_SESSION['test']['id']."'";

                                $res = $mysqli->query($sql);

                                while ($row = $res->fetch_assoc()) {
                                    printf("<li>%s | балл: %s | ",$row['name'],$row['cost']);
                                    switch((int)$row['type']){
                                        case 1:
                                            print(" | Питання з одним варіантом відповіді ");
                                        break;
                                        case 2:
                                            print(" | Питання з кількома варіантами відповідей ");
                                        break;
                                        case 3:
                                            print(" | Питання на встановлення правильної послідовності ");
                                        break;
                                        case 4:
                                            print(" | Питання на встановлення відповідностей ");
                                        break;
                                        case 5:
                                            print(" | Питання з короткою відповіддю ");
                                        break;
                                    }
                                    print("</li>");
                                }
                                //var_dump($_SESSION['referer']);
                            ?>
                        </ul>
                        </div>
                        <div id="quests_error">
                            
                        </div>
                        <?php if(!isset($_SESSION['referer']) && $_SESSION['referer']!= 'redact'):?>
                        <a href="../lessons/stage2.php?id=<?=$_SESSION['lesson']['lesson_id']?>">
                            <center><span class='end_create_test'>Завершити заповнення тесту</span></center>
                        </a>
                        <?php else: ?>
                        <a href="../lessons/redactme.php?id=<?=$_SESSION['lesson']['lesson_id']?>">
                           <center> <span class='end_create_test'>Завершити заповнення тесту</span></center>
                        </a>
                        <?php endif; ?><br></br>
                        <form method="post" action="createquestion.php">
                        <span class='testText' > Оберіть 1 з 5 типів тестів та натисніть "Обрати"</span>
                        <p><select class="create-test" id="select_quests" name='type' size='1'>
                            <?php if($_SESSION['typeGlobal'] == 1): ?>
                                <option value='1' selected>Питання з одним варіантом відповіді</option>
                            <?php else: ?>
                                <option value='1'>Питання з одним варіантом відповіді</option>
                            <?php endif; ?>

                            <?php if($_SESSION['typeGlobal'] == 2): ?>
                                <option value='2' selected>Питання з кількома варіантами відповідей</option>
                            <?php else: ?>
                                <option value='2'>Питання з кількома варіантами відповідей</option>
                            <?php endif; ?>

                            <?php if($_SESSION['typeGlobal'] == 3): ?>
                                <option value='3' selected>Питання на встановлення правильної послідовності</option>
                            <?php else: ?>
                                <option value='3'>Питання на встановлення правильної послідовності</option>
                            <?php endif; ?>

                            <?php if($_SESSION['typeGlobal'] == 4): ?>
                                <option value='4' selected>Питання на встановлення відповідностей</option>
                            <?php else: ?>
                                <option value='4'>Питання на встановлення відповідностей</option>
                            <?php endif; ?>

                            <?php if($_SESSION['typeGlobal'] == 5): ?>
                                <option value='5' selected>Питання з короткою відповіддю</option>
                            <?php else: ?>
                                <option value='5'>Питання з короткою відповіддю</option>
                            <?php endif; ?>
                            <!--<option value='5'>Вопрос выбором ответов из списка</option>
                            <option value='6'>Вопрос с открытым ответом</option>-->
                        </select>
                        <input id="change_quest" type='submit' name='select' value='Обрати'></p>
                        <!--<input id="change_quest" type='button' name='select' value='Выбрать'>-->
                        </form>
                        <div id="questionBlock">
                            <!--<input type="hidden" value="<?php echo $_SESSION['testId']; ?>" name="test_id">-->
                            <?php
                          //  print((int)$_SESSION['typeGlobal']);
                            switch((int)$_SESSION['typeGlobal']){
                                case 1:
                                if ($_SESSION['counter'] == 1) {
                                    $cnt = 4;
                                    $_SESSION['counter'] = 4;
                                }
                                    require_once('quest1.php');
                                break;
                                case 2:
                                if ($_SESSION['counter'] == 1) {
                                    $cnt = 4;
                                    $_SESSION['counter'] = 4;
                                }
                                    require_once('quest2.php');
                                break;
                                case 3:
                                if ($_SESSION['counter'] == 1) {
                                    $cnt = 4;
                                    $_SESSION['counter'] = 4;
                                }
                                    require_once('quest3.php');
                                break;
                                case 4:
                                if ($_SESSION['counter'] == 1) {
                                    $cnt = 4;
                                    $_SESSION['counter'] = 4;
                                }
                                if ($_SESSION['matchcnt'] == 1) {
                                    $matchcnt = 5;
                                    $_SESSION['matchcnt'] = 5;
                                }
                                    require_once('quest4.php');
                                break;
                                case 5:
                                    require_once('quest5.php');
                                break;
                            }
                            
                            /*
                            require('quest1.php');
                            require('quest2.php');
                            require('quest3.php');
                            require('quest4.php');
                            */
                            ?>
                    </div>
    			</div>
        </div>
        </div>
    <?php require_once('../tpl_blocks/footer.php'); ?>  
    	</body>
</html>