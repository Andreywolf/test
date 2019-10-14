<?php 

$data = $_POST;
if( isset($data['add-user']) ) {
 	if( !empty($data['lastname']) &&  !empty($data['name'])   && !empty($data['login'] ) && !empty($data['password'])  && !empty($data['email'] ))  {
		$link = new mysqli('localhost', 'root', '', 'test')  or die("Ошибка " . mysqli_error($link));
		$lastname = $data["lastname"];
		$name = $data["name"];
		$login = $data["login"];
		$pass = $data["password"];
		$email = $data["email"] ;
        $today = date("Y-m-d");    
		$query = "INSERT INTO user VALUES('','$lastname', '$name', '$login','$pass', '$email')";

        $queryLogs =  "INSERT INTO logs VALUES('','$lastname', '$name', '$login','$pass', '$email', 'Добавлен пользователь' ,'$today' )";
        mysqli_query($link,  $queryLogs);

		$result = mysqli_query($link, $query);

		mysqli_close($link);
     

 header("Location: index.php");

 	} else {
 		$check = true;
	 }

        
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php require 'template/head.php'; ?>
	<meta charset="UTF-8">
	<title>Добавление пользователя</title>
</head>
<body class="body-s">
	<?php require 'template/header.php';?>

	 <main class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="heading_page">Добавить пользователя</h1>
                    <?  if($check == true)  echo 'ошибка' ?>
                </div>
                <div class="col-6">
                    <div class="boxed clearfix">
                        <form action="add-user.php" id="form-add-user" method="post">
                        <div class="item-wrap clearfix">
                            <div class="heading_label">Фамилия</div>
                            <input type="text" class="form-control" name="lastname" id="">
                            <div class="heading_label">Имя</div>
                            <input type="text" class="form-control" name="name" id="#login">
                            <div class="heading_label">Логин</div>
                            <input type="text" name="login" class="form-control">
                            <div class="heading_label">Пароль</div>
                            <input type="password" name="password" class="form-control">
                            <div class="heading_label">email</div>
                            <input type="email" name="email" class="form-control">
                            </div>
                            <button type="submit" class="btn btn_blue btn__mod" name="add-user">Добавить</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </main>
		<?php require 'template/footer.php';?>
</body>
</html>