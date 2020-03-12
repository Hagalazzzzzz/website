<?php
/*
$link = mysqli_connect("localhost", "f0381178_Recipe", "DBRecipe", "f0381178_Recipe");

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Соединение с MySQL установлено!" . PHP_EOL;
echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
*/
if ($_SERVER['REQUEST_URI'] == '/') {
    $Page = 'index';
    $Module = 'index';
} else {
    $URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $URL_Parts = explode('/', trim($URL_Path, ' /'));
    $Page = array_shift($URL_Parts);
    $Module = array_shift($URL_Parts);


    if (!empty($Module)) {
        $Param = array();
        for ($i = 0; $i < count($URL_Parts); $i++) {
            $Param[$URL_Parts[$i]] = $URL_Parts[++$i];
        }
    }
}







if ($Page == 'index') include('pages/main.php');
else if ($Page == 'video') include('pages/video.php');
else if ($Page == 'contacts') include('pages/contacts.php');
else if ($Page == 'faq') include('pages/faq.php');
else if ($Page == 'register') include('pages/register.php');
else if ($Page == 'search1') include('pages/search.php');




function head($title=""){
    echo '<head>
  <title>'.$title.'</title>
  <meta http-equiv="content-type" content="text/html charset=utf-8">
  <link rel="stylesheet" type="text/css" href="/resource/style.css">
  <link rel="shortcut icon" href="resource/images/smilik2.png">
	<meta name="resource-type" content="document">



  </head>
';
}

function head_menu(){
    echo '<div id="head">
                    
                    Дмитрий Андреевич, можно сдать лабу?
        </div> 
         
          <div id="menu">
              <ul>
                  <li><a href="/index">ГЛАВНАЯ</a></li>
                  <li><a href="/video">ВИДЕО</a></li>
                  <li><a href="/contacts">КОНТАКТЫ</a></li>
                  <li><a href="/faq">ВОПРОС-ОТВЕТ</a></li>
                  
              </ul>
          </div>';
}

function sidebar(){
    echo '<div id="sidebar">
             <br><br>
              <a href="/register"><input type="button" value="Супер-поиск"></a><br><br>
              <img src="/resource/images/smilik2.png" alt="smilik2" width="120" height="120">
          </div>';
}

function footer(){
    echo '<div id="footer">
             All Right Reserved 2020
          </div>';
}
?>