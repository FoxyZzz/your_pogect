<?php
// Эта функция включает буферизацию вывода. Если буферизация вывода активна,
//  никакой вывод скрипта не отправляется (кроме заголовков), а сохраняется во внутреннем буфере.
// Сделано это для того чтобы до установки заголовков ответа ничего не выводилось. 
// Именно на это и ругался скрипт. Заголовки с помощью функции header можно устанавливать
//  только если перед ними ничего не выводилось. Помещая весь вывод в буфер мы можно сказать 
//  передвинули весь контент в конец. Сначала у нас выполняется скрипт, в нем устанавливаются
//   заголовки и потом после того как скрипт выполнился, буфер отдается пользователю очищается 
//   и скрипт завершает выполнение
ob_start(); 
?><!DOCTYPE html>
    <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Online Converter</title>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/fontawesome.min.css">
<link rel="stylesheet" href="css/main.css">

    </head>
    <body>
<div>
    <div>
        <div>
            <!--логотип-->
            <a class="navbar-brand" href="#"><img src="image/logo1.png "/></a>
        </div>
        <div class="top">
            <h1 class="top funny-title section-title">Fast Report Format Converter Online Demo</h1>
        </div>
        <hr>
    </div>
    <div id="testCarousel" class="carousel slide" data-ride="carousel">
        <!-- Индикаторы карусели -->
        <ol class="carousel-indicators">
            <!-- Перейти к слайду №0 с помощью соответствующего атрибута с индексом data-slide-to="0" -->
            <li data-target="#testCarousel" data-slide-to="0" class="active"></li>
            <!-- Перейти к слайду №1 с помощью соответствующего индекса data-slide-to="1" -->
            <li data-target="#testCarousel" data-slide-to="1"></li>
            <!-- Перейти к слайду №1 с помощью соответствующего индекса data-slide-to="2" -->
            <li data-target="#testCarousel" data-slide-to="2"></li>
        </ol>
    
        <!-- Слайды карусели -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-rounded center-block" class="img-fluid" src="image/action4.png"  alt="">
            </div>
            <div class="item">
                <img class="img-rounded center-block" class="img-fluid" src="image/action5.png"  alt="">
            </div>
            <div class="item">
                <img class="img-rounded center-block" class="img-fluid" src="image/action10.png"   alt="">
            </div>
        </div>
        <!-- Навигация карусели (следующий или предыдущий слайд) -->
        <!-- Кнопка, переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
        <a class="left carousel-control" href="#testCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <!-- Кнопка, переход на следующий слайд с помощью атрибута data-slide="next" -->
        <a class="right carousel-control" href="#testCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <hr>
</div>
<div class="centered file">
<?php if(isset($_POST['upload'])): ?>
<?php 

    function file_force_download($file) {
    if (file_exists($file)) {
      // сбрасываем буфер вывода PHP, чтобы избежать переполнения памяти выделенной под скрипт
      // если этого не сделать файл будет читаться в память полностью!
      if (ob_get_level()) {
        ob_end_clean();
      }
      // заставляем браузер показать окно сохранения файла. Заголовки
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename=' . basename($file));
      header('Content-Transfer-Encoding: binary');
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize($file));
      // читаем файл и отправляем его пользователю
      readfile($file);
      exit;
  } else {
      exit('Файл не найден');
  }
  }

    $uploadedFile = $folder.basename($_FILES['uploadFile']['name']);
    if(is_uploaded_file($_FILES['uploadFile']['tmp_name'])){
    if(move_uploaded_file($_FILES['uploadFile']['tmp_name'],
      $uploadedFile))
     
    {
       exec("Export_fp3.exe file.fp3 file.pdf --OUTPUT=PDF");
       file_force_download('file.pdf');
       echo "Файл загружен :)";
    }
    else
    {
       echo "Во  время загрузки файла произошла ошибка!";
    }
    }
    else
    {
     echo "Файл не  загружен :(";
    }
    ?>
<?php else: ?>
<div class="container">
    <div class="row centered">
        <div class="col-lg-6 text-left">
            <p >Расширение FP3, это:</p>
            <ul>
<li>-готовые файл-отчеты, занимающие незначительное дисковое пространство;<li>
<li>-возможность визуального представления 3Д-модели помещения;</li>
<li>-многоуровневые базы данных.</li>
</ul>
           <p>Формат FP3 или FastReport Prepared Report File представляет собой
             формат отчета созданного приложением FastReport. </p>
        </div>
        <div class="col-lg-6 big">
                <img class="img-right image img" src="image/prog4.jpg" alt="">
            </div>
    </div>
    <br>
</div>
<div class="container">
        <div class="row centered">
            <br>
            <div class="col-lg-6 big">
                    <img class="img-left image img" src="image/screen.png" alt="">
                </div>
                <div class="col-lg-6">
                        <h2 >Причем тут "Fast Report"?</h2>
                        <p>Данная программа встраивается в приложения других разработчиков и используется для 
                        создания отчетов. Сам формат FP3 был создан компанией Fast Reports Inc. Файлы этого типа 
                        являются своеобразными логами, результатом работы с проектом отчета FR3. По структуре FP3 
                        файлы больше всего напоминают формат PDF. Могут содержать в себе изображения, текст и 
                        структуру отчета. FP3 – полностью сформированный отчет, для “подготовленных” отчетов
                         FastReport используется формат FR3.</p>
                    </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12 text-left"> 
            <h3 >Как это работает?</h3>
            <p>Вы загружаете файл в программу, выбираете папку сохранения и нажимаете кнопку "Export".</p>
            <p>Готовый файл в формате PDF будет находиться в выбранной папке.</p>  
            <br>       
        </div>
        <div class="col-lg-4 ">
            <img src="image/prog1.png" alt="" class="image img" style="width: 100%">
         </div>
         <div class="col-lg-4">
            <img src="image/prog2.png" alt="" class="image img" style="width: 100%">
        </div>
        <div class="col-lg-4">
            <img src="image/prog3.png" alt="" class="image img" style="width: 100%">
        </div> 
        </div>
    </div>
    <br><hr>
<div class="container">
    <div class="centered">
            <h6>Попробуйте прямо сейчас!</h6>
            <br>
            <!-- форма загрузки -->
            <form class="form-horizontal container form1" method="post" enctype="multipart/form-data" action="">
                <h2 class="centered">Демо конвертер</h2>
                <br>
                <div class="form-group">
             <div class="form-group">
             <div class="col-sm-12">
             <input type="file" required name="uploadFile" id="file">
             </div>
             </div>
             </div>
             <div class="form-group">
             <div class="col-sm-offset-2 col-sm-8">
             <button type="submit"  name="upload" id="submit" class="btn btn-primary button1">СКАЧАТЬ В ФОРМАТЕ PDF</button>
             <div></div>
             </div>
             </div>
            </form>
         
    </div>
</div>
<br><br>
<div class="container text-left">
            <div class=" text-left"> 
            <h3 >Что делать, если:</h3>
            <h3 >У меня нет файла формата FP3 :(</h3>
            <br>
            <p>Вы можете скачать один из подготовленных демонстрационных файлов: </p>
           <li><a href="files/1.fp3" download="" title="Скачать файл">demo_1.fp3x</a></li> 
           <li><a href="files/2.fp3" download="" title="Скачать файл">demo_1.fp3x</a></li>
           <li><a href="files/3.fp3" download="" title="Скачать файл">demo_1.fp3x</a></li>
            <br><br>
        </div>
</div>
<?php endif ?>
</div>
<hr>
<div class="container">
        <h6 class="centered">Подпишись, чтобы быть в курсе событий!</h6>
        <br>
</div>

<br>
<!--форма регистрация-->
<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['name']) and !isset($_POST['email'])){
 ?> 
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal container form2">
<!-- <br> -->
        <h2 class="centered">Создание аккаунта</h2>
        <br>     
    <div class="form-group ">      
      <label class="col-xs-5 control-label ">Email адрес:</label>
      <div class="col-xs-6">
        <input type="email" name="email" required class="form-control " id="email" placeholder="Введите email">
      </div>
    </div>
    <div class="form-group ">
      <label class="col-xs-5 control-label">Имя:</label>
      <div class="col-xs-6">
        <input type="text" name="name" required class="form-control" id="name" placeholder="Введите имя">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-offset-2 col-xs-8">
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="politics" onclick="check();" value="" autocomplete="off"/>
            Я согласен(а) на <a href="file.php">обработку персональных данных</a>
          </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-offset-4 col-xs-4">
        <button type="submit" name="submit"  disabled="" title="" class="btn btn-primary button1">ПОДПИСАТЬСЯ</button>
      </div>
    </div>
  </form>
  <?php
} else {
 //показываем форму
 $name = $_POST['name'];
 $email = $_POST['email'];
 $name = htmlspecialchars($name);
 $email = htmlspecialchars($email);
 $name = urldecode($name);
 $email = urldecode($email);
 $name = trim($name);
 $email = trim($email);
 if (mail("s.savinova2199@gmail.com", "Заявка с сайта. Вы успешно подписаны.", "ФИО:".$name.". E-mail: ".$email ,"From: converter@fast-report.com \r\n")){ 
 echo "Сообщение успешно отправлено вам на почту"; 
 } else { 
 echo "При отправке сообщения возникли ошибки";
 }
}
?>

  <script type="text/javascript">
function check() {
var submit = document.getElementsByName("submit")[0];
if (document.getElementById("politics").checked)
submit.disabled = "";
else
submit.disabled = "disabled";
}
</script>
  <br>
<hr>
    <div class="container">
        <div class="row centered">
            <div class="col-lg-2 b">
                <p>ООО "Фастрепорт"</p>
            </div>
            <div class="col-lg-2 b">
                    <a href="https://www.fastreport.ru/ru/">Сайт</a>
                </div>
                <div class="col-lg-2 b">
                        <a href="https://www.fastreport.ru/ru/forum/index.php">Форум</a>
                    </div>
                    <div class="col-lg-2 b">
                            <a href="https://www.fastreport.ru/ru/contact/">Контакты</a>
                        </div>
                        <div class="col-lg-3 b">
                                <a href="https://www.fastreport.ru/ru/news/411/">Fast Report open source</a>
                            </div>
        </div>
    </div>
    <!-- <br> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="//web-ptica.ru/VRV-files/knopkavverh/19.js"></script>
    </body>
</html>