<div class='tAnswer'>
    <textarea name="descAnswer" cols="20" rows="20" placeholder="Поле ввода" style="width:100%;max-width: 480px;"><?php
    	print($full_desc);
    ?></textarea>
</div>
<div class='createTest1'><br>
	<input type='submit' name='sbm' class='sbm' value='Редагувати'>
</div>
<div>
	<span><a href="testred.php?tid=<?=$_SESSION['test_red']['testId']?>">Повернутися до меню редагування тесту</a></span>
</div>