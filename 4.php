<!-- Добавьте новые товары в массив market, телефоны и ноутбуки (товары прогуглите) -->
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php 
		$market = [ #Добавьте новые товары в массив market, телефоны и ноутбуки (товары прогуглите и сами найдите) 
					[
						"img" => "img/tv1.jpg", 
						"name" => "Телевизор Samsung UE43NU7097U",
						"price" => "27 990 p"
					],				
				]
	?>
	<div class="col-6 mx-auto bg-info pt-2" style="margin-top: 10px; height: 600px;">
		<h3 class="text-center">Телевизоры</h3>
		<div class="row">
			<div class="col-4 border">  
				<?php 
					echo "<img src='". $market[0]["img"] ."' >";
					echo "<p>". $market[0]["name"] . "</p>";
					echo "<h4>". $market[0]["price"] . "</h4>"
				 ?>
			</div>
		</div>


		<h3 class="text-center">Телефоны</h3>
		<div class="row">
			<div class="col-4 border">  
				<?php 
				
				 ?>
			</div>
		</div>
		<h3 class="text-center">Ноутбуки</h3>
		<div class="row">
			<div class="col-4 border">  
				<?php 
				
				 ?>
			</div>
		</div>
	</div>
</body>
</html>