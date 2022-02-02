
<!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <title>LAVANDEBOX ADMIN</title>

		
    </head>
    <body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php 


 if (isset($_POST['title']) && isset($_POST['par']) && isset($_POST['section']) && isset($_POST['submit']) and $_FILES ){

	require_once "functions.php";

	$link=mysqli_connect($host,$user,$password,$database)
		or die("error" . mysqli_error($link));

		$lastupdated = date("Y-m-d H:i:s");
		$id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));
		$title = htmlentities(mysqli_real_escape_string($link, $_POST['title']));
		$par = htmlentities(mysqli_real_escape_string($link, $_POST['par']));
		$section = htmlentities(mysqli_real_escape_string($link, $_POST['section']));
		$price = htmlentities(mysqli_real_escape_string($link, $_POST['price']));
		move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$_FILES['file']['name']);
   		$path = $_FILES['file']['name'];

	if ( $section == 1){
		$id = 0;
	$query = " INSERT INTO news VALUES ('$id','$title','$par','$lastupdated','$path')"  ;
		$id = $id +1;
	} else if ($section == 2) {
		$id = 0;
		$query = " INSERT INTO authors VALUES ('$id','$title','$par','$path','$lastupdated')"  ;
			$id = $id +1;
	}
	else if ($section == 3) {
		$id = 0;
		$query = " INSERT INTO catalogs VALUES ('$id','$title','$par','$lastupdated','$path','$price')"  ;
			$id = $id +1;
	} else if ($section == 4) {
		$query = " DELETE FROM authors WHERE id = '$id' ";
	}else if ($section == 5) {
		$query = " DELETE FROM catalogs WHERE id = '$id' ";
	}
	else if ($section == 6) {
		$query = " DELETE FROM news WHERE id = '$id' ";
	}
	
	
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

	if(!$result)
	{
	    echo "Выполнение запроса прошло успешно";
}



	mysqli_close($link);

}
?>
<?php

if(isset($_POST['submit']) and $_FILES){
    
    echo "<script>
		alert('Успешно!');
	</script>";
} 

?>



<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	
	<title>Панель Администратора LAVANDEBOX</title>

<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/site.webmanifest">
<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet"> 


</head>
<body>
	<div class="container2">
		<h1>Панель Администратора LAVANDEBOX <a href="index.php" class="exit" id="1rrr" >Выход</a>
			
			
			<form action="" method="post"  id="login">

				<label for="">Логин
					<input type="" required name="login">
				</label>
				<br>
				<label for="">Пароль
					<input type="Password" required name="pass">
				</label>
				<br>
				<input type="submit" value="Войти" class="button">
			</form>
			<?php if ($_POST['pass'] == '' and $_POST['login'] == '') {
				echo "<p></p>";
				# code...
			}
			else{
				echo "<p class='error' id='login1'>Неверный пароль</p>";
			} if ($_POST['pass'] == 'pass' and $_POST['login'] == 'lavande'){
				echo '<script>document.getElementById("login1" ).style.display = "none"; </script>'
				;
			}
			


			?>
			

<?php 
			if ($_POST['pass'] == 'pass' and $_POST['login'] == 'lavande' ) {
				echo '

				<p>
					<script>document.getElementById("login" ).style.display = "none"; </script>
					<script>document.getElementById("1rrr" ).style.display = "inline-block"; </script>
					<script>document.getElementById("2rrr" ).style.display = "inline-block"; </script>
					<a href="/textolite">Редактор верстки и текстов</a>
					
				</p>

				<h1>Добавление контента:</h1>
				<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Добавление новости на главную страницу
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<form action="" method="post" target="frame" enctype="multipart/form-data">
				<label for="">Выбeрите Функцию
					<select name="section" id="" required>
						<option value="1">Добавление новости</option>

					</select>
				</label>
				<br>
			<label for="">Загрузить Изображение<input  type="file" name="file" required></label>
			<br>
				<label for="">Заголовок: <input type="text" name="title" required></label>
				<br>
				<p>Текст Новости:</p>
					<textarea required  id="ta" placeholder="Введите текст новости" cols="30" rows="10" name="par" ></textarea>
				</label>
				
				<br>
		
				<input type="submit" name="submit" value="Выполнить!" class="button margin">
			</form>
				</div>
			  </div>
			  <br>
			  <div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Добавление товара в каталог
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<form action="" method="post" target="frame" enctype="multipart/form-data">
				<label for="">Выбeрите Функцию
					<select name="section" id="" required>
						<option value="3">Добавление товара в каталог</option>
						
					</select>
				</label>
				<br>
			<label for="">Загрузить Изображение<input required  type="file" name="file"></label>
			<br>
				<label for="">Название товара: <input type="text" name="title" required></label>
				<br>
				<p>Описание товара:</p>
					<textarea required  id="ta" placeholder="Описание товара" cols="30" rows="10" name="par" ></textarea>
				</label>
				<br>
				<label for="">Цена: <input type="text" name="price" required></label>
				<input type="submit" name="submit" value="Добавить" class="button margin">
			</form>

			</form>
				</div>
			  </div>
			  <br>
			  
			  </div>

				

				</div>
			  </div>
			  <br>
			  '

			  
			 
			 ;}?>


<iframe name="frame" class="sd"></iframe>
	</div>
	

</body>