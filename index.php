<?php 
    $link = new mysqli('localhost', 'root', '', 'test')  or die("Ошибка " . mysqli_error($link));
    $query ="SELECT * FROM user";
    $result = mysqli_query($link, $query);
    $today = date("Y-m-d");    

    mysqli_close($link);

    $dataDel = $_GET;

    if (isset($dataDel['delete-user']) and !empty($dataDel['delete-user'])) {
         $linkDel = new mysqli('localhost', 'root', '', 'test')  or die("Ошибка " . mysqli_error($link));


         $queryLogs ="SELECT * FROM user where id =".$dataDel['delete-user'];


        $resQueryLogs = mysqli_query($linkDel,$queryLogs);

        foreach(  $resQueryLogs  as $s) { 
            $lastname = $s["lastname"];
            $name = $s["name"];
            $login = $s["login"];
            $pass = $s["password"];
            $email =$s["email"] ;

        }




      

        $queryLogsDel =  "INSERT INTO logs VALUES('','$lastname', '$name', '$login','$pass', '$email', 'Удален пользователь' ,'$today' )";
        mysqli_query($linkDel, $queryLogsDel);

         

         $queryDel = "DELETE FROM user where id =" .$dataDel['delete-user'];

         $resultsDel = mysqli_query( $linkDel, $queryDel);

         mysqli_close($linkDel);
         header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Пользователи</title>
</head>

<body class="body-s">
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top style-nav">
       
    </nav>
</header>
    <main class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-5">

                    <div class="wrap_heading">
                        <div class="box_heading heading_page">Список пользователей</div>
                        <a href="add-user.php" class="btn  btn-in btn_small">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" width="20px" height="20px">
                                <path d="m23,10h-8.5c-0.3,0-0.5-0.2-0.5-0.5v-8.5c0-0.6-0.4-1-1-1h-2c-0.6,0-1,0.4-1,1v8.5c0,0.3-0.2,0.5-0.5,0.5h-8.5c-0.6,0-1,0.4-1,1v2c0,0.6 0.4,1 1,1h8.5c0.3,0 0.5,0.2 0.5,0.5v8.5c0,0.6 0.4,1 1,1h2c0.6,0 1-0.4 1-1v-8.5c0-0.3 0.2-0.5 0.5-0.5h8.5c0.6,0 1-0.4 1-1v-2c0-0.6-0.4-1-1-1z" fill="currentColor"></path>
                            </svg>
                            Добавить Пользователя
                        </a>

                          
                    </div>
                </div>
                <div class="col-3">
                  <form action="goglTable.php">
                              <input type="date" class="form-control" name="dates">
                              <input type="submit" value="отчет" class="btn  btn-in btn_small">
                          </form>
                </div>
                <div class="col-12">
                    <div class="boxed">
                        <table class="table fs-12px">
                        <thead class="thead-dark">
                            <tr>
                                <th>Фамилия</th>
                                <th>Имя</th>
                                <th>Логин</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php     foreach( $result  as $p) { ?>
                           <tr>
                            <td>
                                <?=$p["lastname"]?>
                            </td>
                            <td><?=$p["name"]?></td>
                            <td><?=$p["login"]?></td>
                            <td>
                                <a   href="view.php?id=<?php echo $p["id"]?>" method="POST">
                                            <button type="submit" class="btn btn-info" name="view-user" value='<?php echo $p["id"]?>'>Просмотр</button>
                                        </a>

                                <form action="index.php" method="get">
                                        <button type="submit" class="btn btn-danger" name="delete-user" value='<?php echo $p["id"]?>'>Удалить</button>
                                </form>
                            </td>
                               
                           </tr>
                        <? } ?>


                        </tbody>
                    </table>
                        
                    </div>
                </div>
                     
                
            </div>
        </div>
    </main>
<footer class="footer">
  <div class="container">
      <div class="text-center">
          <span>© 2019</span>
      </div>
  </div>
</footer>
</body>