<?php  
	$name = $_POST['name'];
	$amount = $_POST['amount'];
	$price = $_POST['price'];

	if(!empty($name) && !empty($amount) && !empty($price)){
		$str = "Наименование: ".$name.", кол-во: ".$amount.", цена(за штуку): ".$price."$;  \r\n";
		$file = fopen('product.txt', "a+");
		fwrite($file, $str);
		fclose($file);
	}
	echo $str;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		h1{
			text-align: center;
		}
		form{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		input{
			width: 300px;
			margin-bottom: 10px;
			padding: 4px;
		}
		input[type = "submit"]{
			padding: 4px;
			width: 150px;
			border: none;
			border-radius: 5px;
			background-color: green;
			color: white;
		}
	</style>
</head>
<body>
	<h1>Введите данные о товаре</h1>
	<form method="POST">
		<input type="text" name="name" placeholder="Название">
		<input type="number" name="amount" placeholder="Кол-во">
		<input type="number" name="price" placeholder="Цена">
		<input type="submit" name="submit" value="Отправить">
	</form>	
</body>
</html>