<?php
    $alphabet = array("А","Б","В","Г","Ґ","Д","Е","Є","Ж","З");
?>
<div class='createTest'>
    <div id="quest3" class="create-test-content">
        <form method='post' action="<?=$_SERVEr['REQUEST_URI']?>" enctype="multipart/form-data" >
            <?php
            require('choose_mark.php');
            ?>
                       <p> <span class='testText'>Введіть питання</span></p>
                        <textarea style="width: 960px; min-height: 200px;" type='text' name='quest' class='quest'><? print( $_SESSION['correct']['quest']); ?></textarea>
                <script type='text/javascript'>
                CKEDITOR.replace('quest');
            </script>
                  
                    <ul>
                    <?
                        for($i = 0; $i < $cnt; $i++){
                            $value = $_SESSION['correct'][$i];
                            printf("<li>
							<span class='testText'>%s-а відповідь</span>
                                <textarea style='width: 960px; min-height: 200px;' type='text' name='answ%s' class='answer'>%s</textarea>
                                <script type='text/javascript'>
                                    CKEDITOR.replace('answ%s');
                                </script>
                                <br>
                                
                            </li>",$i+1,$i+1,$value,$i+1);
                        }
                    ?> 
					</ul>
                
            <div class="clear"></div>
            <input type='submit' name='add_more' value='Додати варіант відповіді'> 
            <input type='submit' name='del_last' value='Прибрати останній доданий варіант відповіді'>
			<p> <span class='testText'>Правильна відповідь</span></p>
                <ul >
                      
                    <?php
                        for($i = 0; $i < $cnt; $i++){
                            printf("<li>
                                %s:<input type='text' name='id%s'>
                            </li>",$i+1,$i+1);
                        }
                    ?>
                </ul>
            <?php
            require('solution_definition.php');
            ?>
        </form>
    </div>
</div>