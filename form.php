<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>
		Web4
	</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
		<div>
			<h4 id="form"> Форма </h4>
			<form id="form" action="" method="POST">
				<?php
					//Проходим по массиву messages и выводим все сообщения
					if (!empty($messages)) {
						print('<div id="messages">');
						// Выводим все сообщения.
						foreach ($messages as $message) {
							print($message);
						}
						print('</div>');
					}
					
					// Далее выводим форму отмечая элементы с ошибками классом error
					// и задавая начальные значения элементов ранее сохраненными.
				?>
				<ol>
					<label for="nameInput">Имя </label>
					<input id="nameInput" name="name" type="text" <?php if ($errors['name']) {print 'class="error"';} ?> value="<?php print $values['name']; ?>" />
				
					<li>
						<label>
							e-mail: <br> 
							<input name="email" value="email@mail.ru" type="email"<?php if ($errors['email']) {print 'class="error"';} ?> value="<?php print $values['email']; ?>" >
	
						</label>
					</li>
	
					<li>
						<label for="selectInput">Год рождения</label>
						<select name="year">
							<?php
								// Пробегаем от 2014 до 1965 и вставляем option
								for ($i = 2014; $i > 1965; $i--) {
									print('<option value="'.$i.'" ');
									// Если в values стоит текущий год, то выбираем его
									if ($values['year'] == $i) print('selected ');
									print('>'.$i.'</option> ');
								}
							?>
						</select>
					</li>
					
					<li>
						<label>
							Пол:  <br>
							<input type="radio" name="sex" value="female" <?php if ($values['sex'] == 'female') print("checked"); ?> >
							женский 
						</label>
						<label>	
							<input type="radio" name="sex" value="male" <?php if ($values['sex'] == 'male') print("checked"); ?> >
							мужской
						</label>
					</li>
	
					<li>
						<label>Количество конечностей</label>
						<label>
							<input type="radio" name="limbs" value="2" <?php if ($values['limbs'] == 2) print("checked"); ?> >
							2
						</label>
						<label>
							<input type="radio" name="limbs" value="4" <?php if ($values['limbs'] == 4) print("checked"); ?> >
							4
						</label>
						<label>
							<input type="radio" name="limbs" value="8" <?php if ($values['limbs'] == 8) print("checked"); ?> >
							8
						</label>
					</li>
					
					<li>
						<label for="powersSelect">Суперспособности <br>
						<select id="powersSelect" <?php if ($errors['powers']) {print 'class="error"';} ?> name="powers[]" multiple size="4">
							<?php
								foreach ($powers as $key => $value) {
									$selected = empty($values['powers'][$key]) ? '' : ' selected="selected" ';
									printf('<option value="%s",%s>%s</option>', $key, $selected, $value);
								}
							?>
						</select>
						</label>
					</li>
					<li>
						<label for="bioArea">Биография<br>					<textarea id="bioArea" name="bio" rows="8" cols="30" placeholder="Напишите что-нибудь о себе..." <?php if ($errors['bio']) {print 'class="error"';} ?>><?php print $values['bio']; ?></textarea>
						</label>
					</li>
	
					<li>
						<label
							<?php if ($errors['check']) 
								{
									print 'class="error"';
								} ?>
							>
							<input type="checkbox" name="check" value="ok"> С контрактом ознакомлен(а)
						</label>
					</li>
					
					<li>
						<label>
							<input type="submit" value="Отправить" />
						</label>
					</li>
	
				</ol>
			</form>
		</div>
		<div class="footer">
			<div class="name_authpor">
				(c) Дмитрий Савинов
			</div>
		</div>
</body>

</html>
