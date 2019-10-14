
<? 
$dataUser = $_GET;
 if (isset($dataUser['id'])) {
 	$link = new mysqli('localhost', 'root', '', 'test')  or die("Ошибка " . mysqli_error($link));
    $query ="SELECT* FROM user  WHERE id=". $dataUser['id'];
    $result = mysqli_query($link, $query);

    mysqli_close($link);
 }

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require 'template/head.php';?>
	<meta charset="UTF-8">
	<title>Просмотр пользователя</title>

</head>
<body class="body-s">
		<?php require 'template/header.php';?>
			 <div class="col-6">
                    <div class="boxed">
                        <div class="heading_box">
                            Информация о пользователе
                        </div>
                        <div class="info-content">
                            <div class="info-content__item">
                                <div class="info-content__name">
                                   Фамилия
                                </div>
                                <div class="info-content__value">
                                    <input type="text" class="info-content__input" readonly="" <? foreach($result as $p) { ?> value="<?=$p["lastname"]?> "<? } ?> >
                                </div>
                            </div>
                            <div class="info-content__item">
                                <div class="info-content__name">
                                   Имя
                                </div>
                                <div class="info-content__value">
                                    <input type="text" class="info-content__input" readonly="" <? foreach($result as $p) { ?> value="<?=$p["name"]?> "<? } ?>>
                                </div>
                            </div>
                            <div class="info-content__item">
                                <div class="info-content__name">
                                    Логин
                                </div>
                                <div class="info-content__value">
                                    <input type="text" class="info-content__input" readonly="" <? foreach($result as $p) { ?> value="<?=$p["login"]?> " <? } ?>>
                                </div>
                            </div>
                       
                            <div class="info-content__item">
                                <div class="info-content__name">
                                   Пароль
                                </div>
                                <div class="info-content__value">
                                    <input type="text" class="info-content__input" readonly="" <? foreach($result as $p) { ?> value="<?=$p["password"]?> "<? } ?>>
                                </div>
                            </div>
                              <div class="info-content__item">
                                <div class="info-content__name">
                                    email
                                </div>
                                <div class="info-content__value">
                                    <input type="text" class="info-content__input" readonly="" <? foreach($result as $p) { ?> value=" <?=$p["email"]?> "<? } ?>>
                                </div>
                            </div>
                            
                    </div>
                </div>
               </div>
		<?php require 'template/footer.php';?>
	
</body>
</html>