<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Level 1</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                
                <a class="navbar-brand" href="index.php">
                    PHP Level 1
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="#">PHP Level 2</a></li>                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#lesson1" data-toggle="tab">Урок 1</a></li>
            <li><a href="#lesson2" data-toggle="tab">Урок 2</a></li>            
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="lesson1">
                                
                <!-- Accordion -->
                <div id="ss_menu">
                    <div class="ss_button">Задание 1</div>
                    <div class="ss_content">
                        <div class="col-md-4">
                            <div class="panel panel-danger">
                                <div class="panel-heading">Условие</div>
                                <div class="panel-body">
                                    <p>С помощью оператора echo выведите на страницу:</p>
                                    <ol type="a">
                                        <li>Целочисленную переменную</li>
                                        <li>Переменную дробного типа</li>
                                        <li>Переменную булевского типа</li>
                                        <li>Строковую переменную</li>
                                        <li>Константу</li>
                                    </ol>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="panel panel-success">
                                <div class="panel-heading">Решение</div>
                                <div class="panel-body">
                                    <?php
                                        $int = 15;
                                        $fl = 23.65;
                                        $bool = true;
                                        $str = "Some random text";
                                        define("PI_CONST", 3.14);
                                    ?>
                                    <p>Вывод переменных и констант с помощью оператора echo в форме короткой записи:<br> &lt;?=$int;?&gt;</p>
                                    <ol type="a">
                                        <li><?=$int;?></li>
                                        <li><?=$fl;?></li>
                                        <li><?=$bool;?></li>
                                        <li><?=$str;?></li>
                                        <li><?=PI_CONST;?></li>
                                    </ol>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ss_button">Задание 2</div>
                    <div class="ss_content">
                        <div class="col-md-4">
                            <div class="panel panel-danger">
                                <div class="panel-heading">Условие</div>
                                <div class="panel-body">
                                    <p>Повторите вывод, заключив переменные в двойные кавычки (“). Посмотрите, что получится. Объясните результат.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="panel panel-success">
                                <div class="panel-heading">Решение</div>
                                <div class="panel-body">
                                    <p>Вывод переменных и констант в двойных (") кавычках:</p>
                                    <ol type="a">
                                        <li><?="$int";?></li>
                                        <li><?="$fl";?></li>
                                        <li><?="$bool";?></li>
                                        <li><?="$str";?></li>
                                        <li><?="PI_CONST";?></li>
                                    </ol>
                                    <p>При заключении переменных в двойные кавычки, выводятся их значения, т.к. они обрабатываются интерпретатором. При заключении в двойные кавычки константы, выводится только её имя.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ss_button">Задание 3</div>
                    <div class="ss_content">
                        <div class="col-md-4">
                            <div class="panel panel-danger">
                                <div class="panel-heading">Условие</div>
                                <div class="panel-body">
                                    <p>Повторите вывод, заключив переменные в одинарные кавычки (‘). Посмотрите, что получится. Объясните результат.</p>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="panel panel-success">
                                <div class="panel-heading">Решение</div>
                                <div class="panel-body">
                                    <p>Вывод переменных и констант в одинарных (') кавычках:</p>
                                    <ol type="a">
                                        <li><?='$int';?></li>
                                        <li><?='$fl';?></li>
                                        <li><?='$bool';?></li>
                                        <li><?='$str';?></li>
                                        <li><?='PI_CONST';?></li>
                                    </ol>
                                    <p>При заключении переменных в одинарные кавычки, выводятся их имена, т.к. переменные НЕ обрабатываются интерпретатором. Константы ведут себя так же, как при заключении в двойные качки.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ss_button">Задание 4</div>
                    <div class="ss_content">
                        <div class="col-md-5">
                            <div class="panel panel-danger">
                                <div class="panel-heading">Условие</div>
                                <div class="panel-body">
                                    <p>Выведите на экран любое четверостишие. Пример:<p>
                                    «Славная осень! Здоровый, ядреный<br>
                                    Воздух усталые силы бодрит;<br>
                                    Лед неокрепший на речке студеной<br>
                                    Словно как тающий сахар лежит.»<br>
                                    Н. А. Некрасов<br><br>
                                    <p>Для каждой новой строки используйте отдельный оператор echo. Каждая строчка должна быть отдельной строковой переменной. Также необходимо использовать переводы строки. После четверостишия поставьте инициалы автора и сделайте их подчёркнутыми.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="panel panel-success">
                                <div class="panel-heading">Решение</div>
                                <div class="panel-body">
                                    <?php
                                        $str1 = "Славная осень! Здоровый, ядреный";
                                        $str2 = "Воздух усталые силы бодрит;";
                                        $str3 = "Лед неокрепший на речке студеной";
                                        $str4 = "Словно как тающий сахар лежит.";
                                    ?>
                                    
                                    <?="&laquo; &raquo;"?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="lesson2">
                <p>Скоро будет!</p>
            </div>
        </div>
    </div>    

    <!-- JavaScripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
