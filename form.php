<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>
		Web3
	</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
		<div>
			<h4 id="form"> Форма </h4>
			<form id="form" action="" method="POST">
				<ol>
	
					<li>
						<label>
							Имя: <br>
							<input name="name1">
						</label>
					</li>
	
					<li>
						<label>
							e-mail: <br> 
							<input name="email1" value="email@mail.ru" type="email"> 
	
						</label>
					</li>
	
					<li>
						<label>
							Год: <br> 
							<input name="date1" value="2021" type="text"> 
						</label>
					</li>
					
					<li>
						<label>
							Пол:  <br>
							<input type="radio" name="radio1" value="female"> женский 
						</label>
						<label>	
							<input type="radio" name="radio1" value="male" checked="checked"> мужской
						</label>
					</li>
	
					<li>
						<label>
							Количество конечностей: <br>
							<input type="radio" name="radio2" value="1"> 1
						</label> 
						<label>
							<input type="radio" name="radio2" value="2"> 2
						</label> 
						<label>
							<input type="radio" name="radio2" value="3"> 3 
						</label> 
						<label>
							<input type="radio" name="radio2" value="4"> 4 
						</label>
						<label>
							<input type="radio" name="radio2" value="5" checked="checked"> 5 
						</label>
					</li>
					
					<li>
						<div class="field">
							<label for="form-select" class="label">Сверхспособности</label>
							<div class="control">
								<div class="select is-multiple is-info">
									<select id="form-select" multiple size="3" name="field4[]">
										<option value="immortality">Бессмертие</option>
										<option value="levitation">Левитация</option>
										<option value="walls-walking">Хождение сквозь стены</option>
									</select>
								</div>
							</div>
						</div>
					</li>
					<li>
						<label>
							Биография: <br> 
							<textarea name="field2"> </textarea> 
						</label>
	
					</li>
	
					<li>
						<label>
							<input type="checkbox" checked="checked" name="check1"> С контрактом ознакомлен:
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
