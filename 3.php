<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="col-6 mx-auto bg-secondary pt-5" style="margin-top: 10px; height: 600px;">
		<div class="row">
			<div class="col-6 pt-5">  
				<?php 
					#создайте картинку backpack.jpg из папки img на php и задайте картинке класс w-100 
					
				?>
			</div>

			<div class="col-6"> 
				<?php  
					#добавь новые ключи ассоциативному массиву и заполни пустые дивы
					$backpack = [
						"weapon" => "M-16", //не знаете или не помните оружия или другие вещи, гуглите
						"ammo" => 30,
		

					]
				?>
				<h2>My Inventory</h2>
				<div class="row">
					<div class="col-4 bg-light" style="height: 100px">
						<h5 class="text-secondary">Оружие</h5>
						<?php 
							echo "<h5>".$backpack["weapon"]."</h5>"
						?>
					</div>
					<div class="col-4 bg-primary" style="height: 100px">
						<h5 class="text-secondary">Патроны</h5>
						<?php 
							echo "<h5>".$backpack["ammo"]."</h5>"
						?>
					</div>
					<div class="col-4 bg-warning" style="height: 100px">
						<h5 class="text-secondary">Аптечка</h5> 
									
					</div>
				</div>

				<div class="row mt-2">
					<div class="col-4 bg-light" style="height: 100px">
						<h5 class="text-secondary">Пистолет</h5>
							
					</div>
					<div class="col-4 bg-primary" style="height: 100px">
						<h5 class="text-secondary">Патроны</h5>
									
					</div>
					<div class="col-4 bg-warning" style="height: 100px">
						<h5 class="text-secondary">Энергия</h5>  <!--количество-->
									
					</div>
				</div>

				<div class="row mt-2">
					<div class="col-4 bg-light" style="height: 100px">
						<h5 class="text-secondary">Граната</h5> <!-- вид гранат -->
		
					</div>
					<div class="col-5 bg-primary" style="height: 100px">
						<h5 class="text-secondary">Количество</h5>
						
					</div>

				</div>


			</div>
		</div>
	</div>
</body>
</html>