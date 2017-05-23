<form action="" method="post">
  	<p>Название статьи</p>
    <input type="text" name="artTitle" value="<?=$articleInfo['title']?>">
    <p>Текст статьи</p>
    <textarea name="text" cols = "50" rows="5"><?=$articleInfo['text']?></textarea>
    <input type="submit" class="sub" value="Добавить статью">
</form>
<p><?=$msg?></p>
