<!-- задания в дивах -->

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php 
		$actors = ["Tom Holland","Samuel L. Jackson","Jake Gyllenhaal", "Zendaya", "Cobie Smulders", "Marisa Tomei", "Jon Favreau", "Jacob Batalon", "Tony Revolori", "Angourie Rice", "Remy Hii", "Martin Starr", "J.B. Smoove", "Jorge Lendeborg Jr.", "Numan Acar", "Nicholas Gleaves","Claire Rushbrook","J.K. Simmons", "Michael de Roos"];
	?>
	<div class="col-6 mx-auto" style="margin-top: 10px">
		<div class="row">
			<div class="col-6 bg-info" style="height: 550px">  
				<?php 
					#создайте картинку на php и задайте картинке класс w-100
					
				?>
			</div>
			<div class="col-6 bg-warning" style="height: 750px"> 
				<?php 					
					# 1. выведите все элементы массива с помощью цикла
					# 2. если цикл сработал и все элементы вывелись, добавьте html-тег <p> каждому элементу массива
					 
						echo $actors[0];
				
				?>
			</div>
		</div>
	</div>
</body>
</html>