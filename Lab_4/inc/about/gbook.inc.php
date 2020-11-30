<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="CSS/main.css"> 
		<title>Гостевая книга</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-3"></div>
				<div class="col-5">
					<div class="container" id="FormCentr" >
						<form>
							<div class="row">
								<label >Ф.И.О.</label>
								<input class="form-control" placeholder="Иванов Иван Иванович ">
							</div>
							<div class="row">
								<label >Электронная почта</label>
								<input class="form-control" placeholder="VanSamaOfficial@gmail.com ">
							</div>
							<div class="row">
								<label>Сообщение</label>
								<textarea  class="form-control" placeholder="Сообщение" name="text"></textarea>
							</div>
							<div class="row" id="btnn" style = "padding-top: 20px;" >
								<button type="submit" class="btn btn-primary" >Отправить</button>
							</div>
						</form>
					</div>
				</div>
			</div>	
		</div>
	</body>
</html>

