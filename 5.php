<!-- Добавьте новые товары в массив market, телефоны и ноутбуки (товары прогуглите) -->
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php 
		$users = [
					[
						"id" => 1, 
						"login" => "user",
						"avatar" => "img/ava1.png"
					],
					[
						"id" => 2, 
						"login" => "user2",
						"avatar" => "img/ava2.png"		
					],
			
				]
	?>
	<div class="col-6 mx-auto bg-info pt-2" style="margin-top: 10px; height: 600px;">
		<?php 
			#добавьте тег img в созданный див на php, укажите адрес картинки из массива users
			#добавьте в users еще два usera укажите адрес картинок 
			#с помощью echo выведите на сайт каждого юзера
			#поставьте размеры картинкам, используя класс w-50
			#выведите всех циклом
			#добавь дивам класc border 
			#поставь дивы в ряд



			echo "<div><h1 >".$users[0]["id"]. " " .$users[0]["login"]."</h1></div>";
			
		

		?> 
					
	</div>
</body>
</html>