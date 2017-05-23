<div class="items">
	
		<?php 
			foreach($posts as $post){ ?>
				<div class="item">
					<div class="article_title">
						<strong><a href="<?=ROOT?>post/<?=$post['id']?>"><?=$post['title']?></a></strong>
					</div>
					<img src="<?=ROOT?>img/<?=$post['image']?>">
					<?=$post['text']?>
					<?php
						if($_SESSION['login'] == admin){ ?>
							<div>
								<a href="<?=ROOT?>edit/<?=$post['id']?>" class="btn1">Редакт.</a>
								<a href="<?=ROOT?>delete/<?=$post['id']?>" class="btn1">Удалить</a>
							</div>
						<?php } ?>
				</div>	
		<?php } ?>
	</ul>
	<?php	
	if($isAuth){ ?>
		
		<p><a href="<?=ROOT?>add" class="btn">Добавить статью</a></p>
		<p><a href="<?=ROOT?>login" class="btn">Выйти</a></p>
	<?php }else{ ?>
			<div class="buttons">
				<a href="<?=ROOT?>login" class="btn">Войти</a><span> || </span>
				<a href="<?=ROOT?>registration" class="btn">Зарегистрироваться</a>
			</div>	
	<?php } ?>
</div>