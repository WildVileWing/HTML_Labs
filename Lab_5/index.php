<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<title>Атлетический клуб</title>
	</head>
	<!-- Header Begin -->
	<body>
		<div class="container-fluid">
				<nav class="navbar navbar-expand-md sticky-top navbar-light bg-warning font-weight-bold">
					<div class="collapse navbar-collapse">
						<ul class="navbar-nav mr-auto">
							<li class = "nav-item active">
								<a class = "nav-link" href = "/Lab_5/index.php">Новости<span class = "sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href = "/Lab_5/index.php?id=about">О нас<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">	
								<a class="nav-link" href="/Lab_5/index.php?id=gbook"> Гостевая книга <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="/Lab_5/index.php?id=contact">Абонименты<span class="sr-only">(current)</span></a>
							</li>
						</ul>		
					</div>
			</nav>
			
			<img src="img/Second.jpg" style = "width: 100%; height: 300px;" class="img-fluid">
			
			<div class="row bg-warning" style="height: 80px; padding-top: 10px; margin: 0px;">		   
			    <div class="col-4" style="padding-top: 5px;text-align: right;"><h2> Абонимент </h2></div>
			    <div class="col-1" style="padding-top: 10px">
			      	<input type="text" class="form-control" placeholder="Начало">	 
		    	</div>
		    	<div class="col-1" style="padding-top: 10px">
			      	<input type="text" class="form-control " placeholder="Конец">	 
		    	</div>
		    	<div class="col-1" style="padding-top: 10px">
			      	<input type="text" class="form-control"  placeholder="Цена">	 
		    	</div>
		    	<button  type="button" class="btn btn-success"  style="height: 40px; margin-top: 10px" ><h4> Поиск </h4></button>
	    	</div>
	    	<!-- Header End -->
	    	
	    	<!-- Content Begin -->
	    	
 			<?php 
	    		include 'routing.php';
	    	?>
	    	
	    	<!-- Content End -->
	    	
	    	 <!-- Footer -->
	    	<div class="container-fluid bg-warning" style="margin-top: 40px;">
	    		<div class="row" style = "text-align: center;">
					<div class = "col-2"></div>
	    			<div class ="col-3 h4 text-dark" style = "padding-top: 10px;">Сайт работает с 0:00 до 23:59</div>
	    			<div class ="col-2"> <a href = "#" class="h4 text-dark nav-link"> Разработчики</a></div>
	    			<div class ="col-2"> <a href = "#" class = "h4 text-dark nav-link"> Тех-поддержка</a></div>
	    			<div class ="col-2 h4 text-dark nav-link" style = "padding-top: 10px;">+7 979 797 97 97</div>
	    		</div>
	    	</div>
		</div>
	</body>
</html>