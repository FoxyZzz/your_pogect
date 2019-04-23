<!DOCTYPE html>
    <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Online Converter</title>
<!-- открытие картинки на экран скрипт-->
<LINK rel="stylesheet" href="/css/template.css" type="text/css">
<SCRIPT type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>
<SCRIPT type="text/javascript" src="/js/popup_img.js"></SCRIPT>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/fontawesome.min.css">
<link rel="stylesheet" href="css/main.css">
    </head>
    <body>
<div>
    <div>
        <div>
            <!--логотип изменить-->
            <a class="navbar-brand" href="#">ЛОГО ПРОГРАММЫ</a>
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
                <img class="img-rounded center-block" class="img-fluid" src="image/k1.jpg"  alt="">
                <div class="carousel-caption">
                    Дополнительная информация слайда 1
                </div>
            </div>
            <div class="item">
                <img class="img-rounded center-block" class="img-fluid" src="image/k1.jpg"  alt="">
                <div class="carousel-caption">
                    Дополнительная информация слайда 2
                </div>
            </div>
            <div class="item">
                <img class="img-rounded center-block" class="img-fluid" src="image/k1.jpg"   alt="">
                <div class="carousel-caption">
                    Дополнительная информация слайда 3
                </div>
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
    $uploadedFile = $folder.basename($_FILES['uploadFile']['name']);
    if(is_uploaded_file($_FILES['uploadFile']['tmp_name'])){
    if(move_uploaded_file($_FILES['uploadFile']['tmp_name'],
      $uploadedFile))
    {
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
        <div class="col-lg-6">
            <p >Today by substantial holders of prestigious cottages, and the happy couple,
                             who entered a one-room «Khrushchev,» I want the decor was beautiful and comfortable,
                              and most importantly – unique, reflecting their interests and tastes </p>
        </div>
        <div class="col-lg-6 big">
                <img class="img-right image" src="image/s1.jpg" alt="">
            </div>
    </div>
    <br>
</div>
<div class="container">
        <div class="row centered">
            <br>
            <div class="col-lg-6 big">
                    <img class="img-left image" src="image/s1.jpg" alt="">
                </div>
                <div class="col-lg-6">
                        <h2 >Причем тут "Fast Report"?</h2>
                        <p>Today by substantial holders of prestigious cottages, and the happy couple,
                             who entered a one-room «Khrushchev,» I want the decor was beautiful and comfortable,
                              and most importantly – unique, reflecting their interests and tastes</p>
                    </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row centered">
            <div class="col text-left"> 
            <h3 >Как это работает?</h3>
            <p>Today by substantial holders of prestigious cottages, and the happy couple,
                    who entered a one-room «Khrushchev,» I want the decor was beautiful and comfortable,
                     and most importantly – unique, reflecting their interests and tastes</p>
            <br><br>
        </div>
            <div class="col-lg-4 ">
                <div class="tilt">
                    <img src="image/s1.jpg" alt="" class="image">
                </div>
            </div>
            <div class="col-lg-4">
                    <div class="tilt">
                        <img src="image/s1.jpg" alt="" class="image">
                    </div>
                </div>
                <div class="col-lg-4">
                        <div class="tilt">
                            <img src="image/s1.jpg" alt="" class="image">
                        </div>
                    </div> 
        </div>
    </div>
    <br><hr>
<div class="container">
    <div class="centered">
            <h6>Попробуйте прямо сейсас!</h6>
            <br>

            <!-- форма загрузки -->
            <form class="form-horizontal container form1" method="post" enctype="multipart/form-data" action="">
                <h2 class="centered">Демо конвертер</h2>
                <br>
                <div class="form-group">
           
             <div class="col-sm-5">
             <input type="text" id="name" class="form-control" name="name" placeholder="Название файла">
             </div>
             <div class="form-group">
             <div class="col-sm-12">
             <input type="file" name="uploadFile" id="file">
             </div>
             </div>
             
             </div>
             <div class="form-group">
             <label for="file"  class="col-sm-5 control-label">Файл</label>
             </div>
             <div class="form-group">
             <div class="col-sm-offset-2 col-sm-8">
             <button type="submit" name="upload" id="submit" class="btn btn-primary button1">Загрузить</button>
             <div></div>
             </div>
             </div>
            </form>
         
    </div>
</div>
<br><br>
<div class="container text-left">
            <div class=" text-left"> 
            <h3 >У меня нет файла формата FP3 :(</h3>
            <br>
            <p>Вы можете скачать один из подготовленных демонстрационных файлов: </p>
           <li><a href="#">demo_1.fp3x</a></li> 
           <li><a href="#">demo_1.fp3x</a></li>
           <li><a href="#">demo_1.fp3x</a></li>
            <br><br>
        </div>
</div>
<?php endif ?>
</div>
<hr>
<div class="container">
        <h6 class="centered">Зарегистрируйтесь, и будьте в курсе событий!</h6>
        <br>
        <div class="row">
            <div class="col-lg-6">
            <p>Зарегистрируйтесь и получите доступ к полному инструментарию</p>
        </div>
        <div class="col-lg-6 text-right">
                <a href="#">Подробнее</a>
            </div>
        </div>

        <div class="row">
                <div class="col-lg-6">
                <p>Зарегистрируйтесь и получите доступ к полному инструментарию</p>
            </div>
            <div class="col-lg-6 text-right">
                    <a href="#">Подробнее</a>
                </div>
            </div>

            <div class="row">
                    <div class="col-lg-6">
                    <p>Зарегистрируйтесь и получите доступ к полному инструментарию</p>
                </div>
                <div class="col-lg-6 text-right">
                        <a href="#">Подробнее</a>
                    </div>
                </div>
</div>

<br>
<!--форма регистрация-->
<form class="form-horizontal container form2">
        <h2 class="centered">Создание аккаунта</h2>
        <br>
    <div class="form-group ">
            
      <label for="email" class="col-xs-5 control-label ">Email адрес:</label>
      <div class="col-xs-6">
        <input type="email" class="form-control " id="email" placeholder="Введите email">
      </div>
    </div>
    <div class="form-group ">
      <label for="password" class="col-xs-5 control-label">Пароль:</label>
      <div class="col-xs-6">
        <input type="password" class="form-control" id="password" placeholder="Введите пароль">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-offset-6 col-xs-5">
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="save">
            <label name="save" class="form-check-label" for="save">Запомнить меня</label>
          </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-offset-4 col-xs-4">
        <button type="submit" class="btn btn-primary button1">Зарегистрироваться</button>
      </div>
    </div>
  </form>
  <br>
<hr>
    <div class="container">
        <div class="row centered">
            <div class="col-lg-2 b">
                <p>ООО "Фастрепорт"</p>
            </div>
            <div class="col-lg-2 b">
                    <a href="#">Сайт</a>
                </div>
                <div class="col-lg-2 b">
                        <a href="#">Форум</a>
                    </div>
                    <div class="col-lg-2 b">
                            <a href="#">Контакты</a>
                        </div>
                        <div class="col-lg-3 b">
                                <a href="#">Fast Report open source</a>
                            </div>
        </div>
    </div>
    <br>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    </body>
</html>