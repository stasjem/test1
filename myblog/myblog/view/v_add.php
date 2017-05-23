<div class="add_article">
	<form action="" method="post">
	    <p>Название статьи</p>
	    <input type="text" name="artTitle" value="<?=$artTitle?>"><br>
	    <p>Текст статьи</p>
	    <textarea name="text" cols = "50" rows="5"><?=$text?></textarea>
	    <input type="submit" class="sub" value="Добавить статью">
	</form>
	<p><?=$msg?></p>
	<a href="<?=ROOT?>">Вернуться на главную страницу</a>
</div>	