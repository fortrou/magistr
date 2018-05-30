<div class='createTest'>
    <div id="quest2" class="create-test-content" >
        <form method='post' action="<?=$_SERVER['REQUEST_URI'];?>" enctype="multipart/form-data" >
			<?php
				require_once('choose_mark.php');
			?>
			<p> <span class='testText'>Введіть питання</span></p>
			<textarea type='text' name='quest' class='quest' style='width:960px; min-height: 200px;'><? print( $_SESSION['correct']['quest']); ?></textarea>
			<script type='text/javascript'>
				CKEDITOR.replace('quest');
			</script><br>
 
			<p> <span class='testText'>Введіть правильну відповідь</span></p>
			<input class="create-test-formItem" type="text" name="answer" placeholder="Введіть відповідь"></input>


			<?php
				require_once('solution_definition.php');
			?>
            
        </form>
    </div>
</div>