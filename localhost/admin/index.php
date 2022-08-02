<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
//-----------------//
$login = 'hotel-igor';          // Логин
$password = 'aPHmpmr4bD';      // Пароль
//-----------------//

if (($_COOKIE['login'] == $login) && ($_COOKIE['password'] == $password) || ($_SESSION['password'] == md5($login.':'.$password)))
 {
    include ('admin.php');
 }
 else
 {
  echo '<html>
         <head>
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
          <title>Авторизация</title>
         </head>
          <body>         
           <form id="need-rem" name="autorization"  action="" method="POST"style="
                margin: 200 auto;
                display: flex;
                flex-direction: column;
                width: 300px;
            ">
            Логин:&nbsp;<input type="text" name="login"><br>
            Пароль:&nbsp;<input type="password" name="password"><br>
            <p>
            <input type="submit" name="data" value="Вход">
           </form>
          </body>
         </html>';
  if(($_POST['login']) && ($_POST['password']))
   {
  if((trim($_POST['login']) == $login) && (trim($_POST['password']) == $password))
   {
    if(!$_POST['save_cookie'])
     {
      $_SESSION['password'] = md5($login.':'.$password);
      echo '<script>alert(\'Вы авторизированны! (сессия)\')</script>';
     }
     include ('admin.php');
   }
   else
   {
    echo '<script>alert(\'Логин или пароль не верны!\')</script>';
   }
  } 
  else
  {
   if((!$_POST['login']) && (!$_POST['password'])) 
   {
   }
   else
   {
   echo '<script>alert(\'Введите все значения!\')</script>';
   }
  }
  }
?>