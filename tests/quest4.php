<?php
    $alphabet = array("А","Б","В","Г","Ґ","Д","Е","Є","Ж","З","И","І","Ї");
?>
<div class='createTest'>
    <div id="quest4" class="create-test-content" >
        <form method='post' action="<?=$_SERVER['REQUEST_URI'];?>" enctype="multipart/form-data" >
            <?php
            require('choose_mark.php');
            ?>
            <br>
                <!--<input type="hidden" name="typeOfQuest" value="4">-->
                <div style='clear:both;'></div>
               <p> <span class='testText'>Введіть питання</span></p>
                <textarea style='width:960px; min-height: 200px;' type='text' name='quest' class='quest'><? print( $_SESSION['correct']['quest']); ?></textarea>
                <script type='text/javascript'>
                CKEDITOR.replace('quest');
            </script>
                <ul style='float:left;list-style:none; width:450px;'>
                    <li>
                        <h2>Варіанти відповідей</h2>
                    </li>
                    <?
                        for($i = 0; $i < $cnt; $i++){
                            $value = $_SESSION['correct'][$i];
                            printf("<li><span class='testText'>відповідь №%s </span>
                                <textarea style='width:470px; min-height: 200px;' type='text' name='answ%s' class='answer'>%s</textarea>
                                <script type='text/javascript'>
                                    CKEDITOR.replace('answ%s');
                                </script>
                                <br>
                            </li>",$i+1,$i+1,$value,$i+1);
                        }
                    ?>
                </ul>

                <ul style='float:right;margin-right:20px;list-style:none;width:450px;'>
                    <li>
                        <h2>Варіанти відповідностей</h2>
                    </li>
                    <?php
                        for($i = 0; $i < $matchcnt; $i++){
                            $value = $_SESSION['match'][$i];
                            printf("<li><span class='testText'>відповідність №%s </span>
                                <textarea style='width:470px; min-height: 200px;' type='text' name='match%s' class='match'>%s</textarea>
                                <script type='text/javascript'>
                                    CKEDITOR.replace('match%s');
                                </script><br>
                                
                            </li>",$i+1,$i+1,$value,$i+1);
                        }
                    ?>
                </ul>
                <div style='clear:both;'></div>
                <ul style='width:450px;margin-top:25px; list-style:none;'>
                    <?php
                    print("<li>
                        <ul class='matchRadio'>");
                        printf("<li style='width:80px;'></li>");
                        
                        for($it = 0; $it < $matchcnt; $it++){
                            printf("<li>%s</li>",$alphabet[$it]);
                        }
                        print("</ul>
                        <div style='clear:both;'></div>
                    </li>");
                        for($i = 1; $i <= $cnt; $i++){
                            print("<li>
                            <ul class='matchRadio'>");
                            printf("<li style='width:80px;'><span>Відповідь №%s</span></li>",$i);
                            for($it = 1; $it <= $matchcnt; $it++){
                                printf("<li><input type='radio' name='id%s' value='%s'></li>",$i,$it);
                            }
                            print("</ul>
                            <div style='clear:both;'></div>
                            </li>");
                        }
                    ?>
                </ul>
            <div class="clear"></div>
            <table style="text-align:center;">
                <tr>
                    <td>
                        <input type='submit' name='add_more' value='Додати варіант відповіді'><br>
                    </td>
                    <td>
                        <input type='submit' name='add_match' value='Додати варіант відповідності'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type='submit' name='del_last' value='УПрибрати останній доданий варіант відповіді'>
                    </td>
                    <td>
                        <input type='submit' name='del_match' value='Прибрати останній доданий варіант відповідності'>
                    </td>
                </tr>
            </table>
            <?php
            require('solution_definition.php');
            ?>
        </form>
    </div>
</div>