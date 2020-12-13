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
						<form action = "form.php" method = "POST">
							<div class="row">
								<label >Ф.И.О.</label>
								<input class="form-control" type="text" placeholder="Иванов Иван Иванович " name="name">
							</div>
							<div class="row">
								<label >Электронная почта</label>
								<input class="form-control"type="text" placeholder="VanSamaOfficial@gmail.com " name="email">
							</div>
							<div class="row">
								<label>Сообщение</label>
								<textarea  class="form-control" placeholder="Сообщение" type = "text" name = "text"></textarea>
							</div>
							<div class="row" id="btnn" style = "padding-top: 20px;" >
								<input class="btn btn-info" name = "submit" type = "submit" value="Отправить"></input >
							</div>
						</form>					
														
						<table border="1" align="center" class="table" ">
							<tr>
								<td>Имя пользователя</td>
								<td>Емейл</td>
								<td>Комментарий</td>
							</tr>
							<?php
							include "bd.php";
								foreach (getAll() as $row) {
									echo 
									"<tr>
									<td>". $row["name"]	. "</td>
									<td>". $row["email"]. "</td>
									<td>". $row["text"] . "</td>
									</tr>";
								}
							?>
						</table>
					</div>
				</div>
			</div>	
		</div>
	</body>
</html>

