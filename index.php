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
	<div class="wrapper">
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
                <li><a href="#lesson3" data-toggle="tab">Урок 3</a></li>                           
				<li><a href="#lesson4" data-toggle="tab">Урок 4</a></li> 				           
			</ul>
			
<?php
/***************************************
 * УРОК 1
 ***************************************/
mb_internal_encoding("UTF-8");
?>
			<div id="my-tab-content" class="tab-content">
				<div class="tab-pane active" id="lesson1">
					
					<div id="ss_menu">
<?php
/***************************************
 * Задание 1
 ***************************************/
?>
						<h3>Основы PHP</h3>
						<div class="ss_button">Задание 1</div>
						<div class="ss_content" style="height:255px">
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
<?php
/***************************************
 * Задание 2
 ***************************************/
?>
						<div class="ss_button">Задание 2</div>
						<div class="ss_content" style="height:285px">
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
<?php
/***************************************
 * Задание 3
 ***************************************/
?>
						<div class="ss_button">Задание 3</div>
						<div class="ss_content" style="height:285px">
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
<?php
/***************************************
 * Задание 4
 ***************************************/
?>
						<div class="ss_button">Задание 4</div>
						<div class="ss_content" style="height:325px">
							<div class="col-md-8">
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
							<div class="col-md-4">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
										<?php
											$str1 = "Славная осень! Здоровый, ядреный";
											$str2 = "Воздух усталые силы бодрит;";
											$str3 = "Лед неокрепший на речке студеной";
											$str4 = "Словно как тающий сахар лежит.";
											$str5 = "Н. А. Некрасов";
										
											echo '&laquo;' . $str1 . '<br>';
											echo $str2 . '<br>';
											echo $str3 . '<br>';
											echo $str4 . '&raquo;' . '<br>';
											echo '<u>' . $str5 . '</u>';
										?>
									</div>
								</div>
							</div>
						</div>
<?php
/***************************************
 * Задание 5
 ***************************************/
?>
						<div class="ss_button">Задание 5</div>
						<div class="ss_content" style="height:195px">
							<div class="col-md-8">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>Выполните эти же действия, с помощью <strong>одного</strong> оператора echo.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
										<?php
											$str1 = "Славная осень! Здоровый, ядреный";
											$str2 = "Воздух усталые силы бодрит;";
											$str3 = "Лед неокрепший на речке студеной";
											$str4 = "Словно как тающий сахар лежит.";
											$str5 = "Н. А. Некрасов";
										
											echo '&laquo;' . $str1 . '<br>' 
												. $str2 . '<br>' 
												. $str3 . '<br>' 
												. $str4 . '&raquo;' . '<br>' 
												. '<u>' . $str5 . '</u>';
										?>
									</div>
								</div>
							</div>
						</div>
<?php
/***************************************
 * Задание 6
 ***************************************/
?>
						<div class="ss_button">Задание 6</div>
						<div class="ss_content" style="height:175px">
							<div class="col-md-6">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>Попробуйте в выражении использовать разные типы данных, например, сложите число «10» и строку «20 приветов». Что получится? Объясните результат.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
										<?php
											$int = 10;
											$str = "20 приветов";
										?>
										<p>10 + "20 приветов" = <?=$int + $str;?></p>
										<p>В данном случае, происходит неявное преобразование типов: строка "20 приветов" преобразуется в число 20.</p>
									</div>
								</div>
							</div>
						</div>
<?php
/***************************************
 * Задание 7
 ***************************************/
?>
						<div class="ss_button">Задание 7</div>
						<div class="ss_content" style="height:335px">
							<div class="col-md-5">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>Дайте ответ на вопрос, как работает оператор xor? В каких случаях он возвращает значение true, в каких – false? Для этого напишите скрипт, который выводит значения операций со всеми возможными вариантами операндов (4 варианта). Чему равно $a xor $a для любых значений $a?</p>
									</div>
								</div>
							</div>
							<div class="col-md-7">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
										<p>Исключающее ИЛИ (xor) возвращает <strong>true</strong> если $a или $b равна <strong>true</strong>, но не обе. Если обе переменные содержат <strong>false</strong>, xor также возвращает <strong>true</strong>. Примеры:</p>
										<?php
											$a = true;
											$b = false;
										?>
										<p>
											$a = true<br>
											$b = false<br>    
										</p>
										<ol>
											<li>
												$a xor $b = <?=$a xor $b;?>
											</li>
											<li>
												$b xor $a = <?=$b xor $a;?>
											</li>
											<li>
												$a xor $a = <?=(int)($a xor $a);?>
											</li>
											<li>
												$b xor $b = <?=(int)($b xor $b);?>
											</li>                                     
										</ol>                                    
										<p>При сравнении одной и той же переменной, xor всегда будет возвращать false (0), что видно из примера выше.</p>
									</div>
								</div>
							</div>
						</div>
<?php
/***************************************
 * Задание 8
 ***************************************/
?>
						<div class="ss_button">Задание 8 (*)</div>
						<div class="ss_content" style="height:300px">
							<div class="col-md-5">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>
											Дан фрагмент кода:<br>
<pre>
&lt;?php
  $x = 10;
  $y = 15;
?&gt;
</pre>
											Необходимо дописать несколько операций так, чтобы в итоге значения переменных поменялись местами. При этом, использовать другие переменные запрещается.
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-7">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
										<p>
											Этот трюк можно проделать с помощью функции list() следующим образом:<br>
											list($x, $y) = array($y, $x);<br>
											<a href="http://php.net/manual/ru/function.list.php" target="_blank">Ссылка</a> на официальную документацию.
										</p>
										<?php
											$x = 10;
											$y = 15;
											list($x, $y) = array($y, $x);
										?>
										<p>
											Значения пременных после использования приёма выше:<br>
											$x = <?=$x;?><br>
											$y = <?=$y;?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>			
<?php
/***************************************
 * УРОК 2
 ***************************************/
?>
				<div class="tab-pane" id="lesson2">
					<div id="ss_menu">
<?php
/***************************************
 * Задание 1
 ***************************************/
?>
						<h3>Ветвления и функции</h3>
						<div class="ss_button">Задание 1</div>
						<div class="ss_content" style="height:275px">
							<div class="col-md-6">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>Объявите две целочисленные переменные $a и $b и задайте им произвольные начальные значения. Затем напишите скрипт, который работает по следующему принципу:</p>
										<ol type="a">
											<li>если $a и $b положительные, выведите их разность;</li>
											<li>если $а и $b отрицательные, выведите их произведение;</li>
											<li>если $а и $b разных знаков, выведите их сумму.</li>									
										</ol>
										<p>Ноль можно считать положительным числом.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
										<p>Я решил расширить задание и написать функцию, которая принимает два параметра и в зависимости от условия, выводит на печать результат. Подробности реализации - в исходном коде (строка 402).</p>
										<?php
											function math_ops($a, $b)
											{
												if ($a >= 0 && $b >= 0)
													echo $a - $b;
												elseif ($a < 0 && $b < 0)
													echo $a * $b;
												elseif (($a >= 0 && $b < 0) ||
														 ($a < 0 && $b >= 0))
													echo $a + $b;
											}
										?>
										<p>Проверка работоспособности функции:</p>
										<?php
											math_ops(5, 9); echo ' ($a = 5, $b = 9)<br>';
											math_ops(-6, -3); echo ' ($a = -6, $b = -3)<br>';
											math_ops(-9, 5); echo ' ($a = -9, $b = 5)<br>';
											math_ops(9, -5); echo ' ($a = 9, $b = -5)<br>';
										?>
									</div>
								</div>
							</div>
						</div>
<?php
/***************************************
 * Задание 2
 ***************************************/
?>
						<div class="ss_button">Задание 2</div>
						<div class="ss_content" style="height:175px">
							<div class="col-md-6">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>Присвойте переменной $а значение в промежутке [0..15]. С помощью оператора switch организуйте вывод чисел от $a до 15;</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
										<p>Проверка:</p>
										<?php
											$a = 0;

											switch ($a) {
												case '0':
													echo $a++ . ' | ';
												case '1':
													echo $a++ . ' | ';
												case '2':
													echo $a++ . ' | ';
												case '3':
													echo $a++ . ' | ';
												case '4':
													echo $a++ . ' | ';
												case '5':
													echo $a++ . ' | ';
												case '6':
													echo $a++ . ' | ';
												case '7':
													echo $a++ . ' | ';
												case '8':
													echo $a++ . ' | ';
												case '9':
													echo $a++ . ' | ';
												case '10':
													echo $a++ . ' | ';
												case '11':
													echo $a++ . ' | ';
												case '12':
													echo $a++ . ' | ';
												case '13':
													echo $a++ . ' | ';
												case '14':
													echo $a++ . ' | ';
												case '15':
													echo $a;
											}
										?>
										<p>Подробности решения см. в исходном коде (строка 445).</p>
									</div>
								</div>
							</div>
						</div>
<?php
/***************************************
 * Задание 3
 ***************************************/
?>
						<div class="ss_button">Задание 3</div>
						<div class="ss_content" style="height:295px">
							<div class="col-md-6">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>Реализуйте основные 4 арифметические операции (+, -, *, %) в виде функций с двумя параметрами. Обязательно используйте оператор return.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
										<p>Скорее всего в условии опечатка, т.к. 4 основные арифметические операции - это +, -, *, /, а не %. Поэтому я реализовал 5 функций. Решение в исходном коде (строка 508).</p>
										<?php
											function sum($a, $b)
											{
												return $a + $b;
											}
											function difference($a, $b)
											{
												return $a - $b;
											}
											function multiply($a, $b)
											{
												return $a * $b;
											}
											function division($a, $b)
											{
												return $a / $b;
											}
											function module($a, $b)
											{
												return $a % $b;
											}
										?>
										<p>Проверка:<br>
										5 + 7 = <?=sum(5, 7);?><br>
										15 - 6 = <?=difference(15, 6);?><br>
										6 * 8 = <?=multiply(6, 8);?><br>
										45 / 9 = <?=division(45, 9);?><br>
										32 % 9 = <?=module(32,9);?>
										</p>
									</div>
								</div>
							</div>
						</div>
<?php
/***************************************
 * Задание 4
 ***************************************/
?>
						<div class="ss_button">Задание 4</div>
						<div class="ss_content" style="height:275px">
							<div class="col-md-6">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполните одну из арифметических операций (используйте функции из пункта 3) и верните полученное значение (используйте switch).</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
										<p>По аналогии с предыдущим заданием, реализовал 5 операций (строка 561).</p>
										<?php
											function mathOperation($arg1, $arg2, $operation)
											{
												switch ($operation) {
													case '+':
														return sum($arg1, $arg2);
														break;
													case '-':
														return difference($arg1, $arg2);
														break;
													case '*':
														return multiply($arg1, $arg2);
														break;
													case '/':
														return division($arg1, $arg2);
														break;
													case '%':
														return module($arg1, $arg2);
														break;											
												}
											}
										?>
										<p>Проверка:<br>
										8 + 15 = <?=mathOperation(8, 15, '+');?><br>
										23 - 15 = <?=mathOperation(23, 15, '-');?><br>
										13 * 24 = <?=mathOperation(13, 24, '*');?><br>
										46 / 12 = <?=mathOperation(46, 12, '/');?><br>
										29 % 13 = <?=mathOperation(29, 13, '%');?>
										</p>
									</div>
								</div>
							</div>
						</div>
<?php
/***************************************
 * Задание 5
 ***************************************/
?>
						<div class="ss_button">Задание 5</div>
						<div class="ss_content" style="height:175px">
							<div class="col-md-6">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>С помощью рекурсии организуйте функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
										<p>Подробности реализации на строке 614.</p>
										<?php
											function power($val, $pow)
											{
                                                if ($pow < 0)
                                                    return $val * power(1/$val, -$pow);
                                                if ($pow == 0)
                                                    return 1;
                                                return $val * power($val, $pow - 1);												
											}
										?>
										<p>Проверка:<br>
										2 <sup>-3</sup> = <?=power(2, -3);?>
										</p>
									</div>
								</div>
							</div>
						</div>
<?php
/***************************************
 * Задание 6
 ***************************************/
?>
						<div class="ss_button">Задание 6</div>
						<div class="ss_content" style="height:225px">
							<div class="col-md-7">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>Напишите функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:<br>
										22 часа 15 минут<br>
										21 час 43 минуты<br>
										и тд.<br>
										Подсказка: часы и минуты можно узнать с помощью встроенной функции PHP – date.</p>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
										<p>Реализацию функции см. в исходном коде (строка 655).</p>
										<?php
											function time_now()
											{
												$h = date('H');
												$m = date('i');
												$h_str = 'час';
												$m_str = 'минут';

												if ($h == 0 || $h >= 5 && $h < 21)
													$h_str .= 'ов';
												elseif ($h >= 2 && $h < 5 || $h >= 22 && $h < 24) {
													$h_str .= 'а';
												}

												if($m == 1 || $m == 21 || $m == 31 || $m == 41 || $m == 51 )
													$m_str .= 'а';
												elseif($m >= 2 && $m < 5 || $m >= 22 && $m < 25 ||
													   $m >= 32 && $m < 35 || $m >= 42 && $m < 45 ||
													   $m >= 52 && $m < 55)
													$m_str .= 'ы';

												return 'Сейчас ' . $h . ' ' . $h_str . ' '
																. $m . ' ' . $m_str;
											}
											
										?>
										<p>Проверка:<br>
										<?=time_now();?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

<?php
/***************************************
 * УРОК 3
 ***************************************/
?>
				<div class="tab-pane" id="lesson3">
					<div id="ss_menu">
<?php
/***************************************
 * Задание 1
 ***************************************/
?>
						<h3>Циклы и массивы</h3>
						<div class="ss_button">Задание 1</div>
						<div class="ss_content" style="height:165px">
							<div class="col-md-6">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>С помощью цикла while выведите все числа в промежутке от 0 до 100, которые делятся на 3 без остатка. </p>									
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
										<p>См. код (строка 721).</p>
										<?php
											$i = 0;
											while ($i <= 100) {
												$i++;
												if (!($i % 3))
													echo $i . ' | ';										
											}
										?>										
									</div>
								</div>
							</div>
						</div>
<?php
/***************************************
 * Задание 2
 ***************************************/
?>
						<div class="ss_button">Задание 2</div>
						<div class="ss_content" style="height:345px">
							<div class="col-md-6">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>С помощью цикла do…while напишите функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:<br>
										0 – это ноль<br>
										1 – нечетное число<br>
										2 – четное число<br>
										3 – нечетное число<br>
										…<br>
										10 – четное число</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
                                        <p>См. код (строка 759).</p>
										<?php
											$i = 0;
                                            do {
                                                if ($i == 0) {
                                                    echo $i . ' - это ноль<br>';
                                                } elseif (!($i % 2)) {
                                                    echo $i . ' - это четное число<br>';
                                                } else {
                                                    echo $i . ' - это нечетное число<br>';
                                                }
                                                $i++;                                                
                                            } while ($i <= 10);
										?>
									</div>
								</div>
							</div>
						</div>
<?php
/***************************************
 * Задание 3
 ***************************************/
?>
						<div class="ss_button">Задание 3 (*)</div>
						<div class="ss_content" style="height:145px">
							<div class="col-md-9">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>Выведите с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть должно вот так:<br>
										for(…){// здесь пусто}</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
                                        <p>См. код (строка 797).</p>										
										<?php
                                            for ($i = 0; $i < 10; print ($i . ' | '), $i++);
										?>										
									</div>
								</div>
							</div>
						</div>
<?php
/***************************************
 * Задание 4
 ***************************************/
?>
						<div class="ss_button">Задание 4</div>
						<div class="ss_content" style="height:325px">
							<div class="col-md-6">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>Объявите массив, где в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Выведите в цикле значения массива, чтобы результат был таким:<br>
										Московская область:<br>
										Москва, Зеленоград, Клин<br>
										Ленинградская область:<br>
										Санкт-Петербург, Всеволожск, Павловск, Кронштадт<br>
										Рязанская область<br>
										…<br>
										(названия городов можно найти на maps.yandex.ru)</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
                                        <p>См. код (строка 831).</p>
                                        <?php
											$array = [
                                                "Московская область" => [
                                                    "Москва",
                                                    "Балашиха",
                                                    "Долгопрудный",
                                                    "Пушкино",
                                                    "Клин"
                                                ],
                                                "Ленинградская область" => [
                                                    "Санкт-Петербург",
                                                    "Гатчина",
                                                    "Тосно",
                                                    "Кингисепп"
                                                ],
                                                "Рязанская область" => [
                                                    "Рязань",
                                                    "Кораблино",
                                                    "Захарово",
                                                    "Старожилово"
                                                ]
                                            ];

                                            foreach ($array as $key => $value) {
                                                echo '<b>' . $key . ':</b><br>'; 
                                                $n = 1;                                               
                                                foreach ($value as $city) {
                                                    if ($n == count($value)) { // убираем запятую после последнего города
                                                        echo $city . '<br>';                                                        
                                                    } else {
                                                        echo $city . ', ';
                                                    }
                                                    $n++;
                                                }
                                            }
										?>										
									</div>
								</div>
							</div>
						</div>
<?php
/***************************************
 * Задание 5
 ***************************************/
?>
						<div class="ss_button">Задание 5 (*)</div>
						<div class="ss_content" style="height:245px">
							<div class="col-md-6">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>Повторите предыдущее задание, но выводите на экран только города, начинающиеся с буквы «К».</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
                                        <p>См. код (строка 891).</p>
										<?php
											foreach ($array as $key => $value) {
                                                echo '<b>' . $key . ':</b><br>';
                                                foreach ($value as $city) {
                                                    if (mb_substr($city, 0, 1) == 'К')
                                                        echo $city . '<br>';                                   
                                                }
                                            }
										?>										
									</div>
								</div>
							</div>
						</div>
<?php
/***************************************
 * Задание 6
 ***************************************/
?>
						<div class="ss_button">Задание 6</div>
						<div class="ss_content" style="height:185px">
							<div class="col-md-7">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>Объявите массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).<br>
										Напишите функцию транслитерации строк.</p>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
                                        <p>См. код (строка 925).</p>
										<?php
                                            function rus2lat($string) 
                                            {
                                                $chars = [
                                                    "а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d",
                                                    "е" => "e", "ё" => "yo", "ж" => "zh", "з" => "z", "и" => "i",
                                                    "й" => "y", "к" => "k", "л" => "l", "м" => "m", "н" => "n",
                                                    "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t",
                                                    "у" => "u", "ф" => "f", "х" => "h", "ц" => "ts", "ч" => "ch",
                                                    "ш" => "sh", "щ" => "sch", "ъ" => "", "ы" => "y", "ь" => "",
                                                    "э" => "e", "ю" => "yu", "я" => "ya"
                                                ];
                                                $string = mb_strtolower($string);
                                                return strtr($string, $chars);
                                            }

                                            echo rus2lat('Каждый охотник желает знать где сидит фазан');
										?>										
									</div>
								</div>
							</div>
						</div>
<?php
/***************************************
 * Задание 7
 ***************************************/
?>
						<div class="ss_button">Задание 7</div>
						<div class="ss_content" style="height:145px">
							<div class="col-md-7">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>Напишите функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.</p>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
                                        <p>См. код (строка 968).</p>
										<?php
											function replace($str) 
                                            {
                                                return str_replace(' ', '_', $str);
                                            }

                                            echo replace('Каждый охотник желает знать где сидит фазан');
										?>										
									</div>
								</div>
							</div>
						</div>
<?php
/***************************************
 * Задание 8
 ***************************************/
?>
						<div class="ss_button">Задание 8</div>
						<div class="ss_content" style="height:185px">
							<div class="col-md-7">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>Объедините две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах). </p>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">
                                        <p>См. код (строка 1000).</p>
										<?php
											function translit_replace($s)
                                            {
                                                $chars = [
                                                    "а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d",
                                                    "е" => "e", "ё" => "yo", "ж" => "zh", "з" => "z", "и" => "i",
                                                    "й" => "y", "к" => "k", "л" => "l", "м" => "m", "н" => "n",
                                                    "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t",
                                                    "у" => "u", "ф" => "f", "х" => "h", "ц" => "ts", "ч" => "ch",
                                                    "ш" => "sh", "щ" => "sch", "ъ" => "", "ы" => "y", "ь" => "",
                                                    "э" => "e", "ю" => "yu", "я" => "ya"
                                                ];
                                                $s = mb_strtolower($s);
                                                $s = str_replace(' ', '_', $s);
                                                return strtr($s, $chars);
                                            }

                                            echo translit_replace('Каждый охотник желает знать где сидит фазан');
										?>										
									</div>
								</div>
							</div>
						</div>
						<?php
/***************************************
 * Задание 9
 ***************************************/
?>
						<div class="ss_button">Задание 9 (**)</div>
						<div class="ss_content" style="height:285px">
							<div class="col-md-7">
								<div class="panel panel-danger">
									<div class="panel-heading">Условие</div>
									<div class="panel-body">
										<p>Создать форму, в которую пользователь вводит сообщение, а скрипт анализирует введенный текст и, если находит "знакомые слова", то отправляет соответствующую картинку/картинки. Например, введено "Вишневый сад был написан А. П. Чеховым в 1903 году". На сервере есть массив значений array("Вишня", "Вишни", "Вишневый", "Вишневого", "Вишневому", ... ), к которому привязана картинка cherry.jpg, и массив array("Чехов", "Чехову", "Чехове", "Чеховым", "Чехова", ...), к которому привязана картинка chehov.jpg. На запрос пользователя индексируется вся строка и слова сверяются с массивом. В результате чего пользователь должен получить эти два изображения.</p>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="panel panel-success">
									<div class="panel-heading">Решение</div>
									<div class="panel-body">                                        
                                        <?php
                                            $cherry = [
                                                'img/cherry.jpg' => [
                                                    "Вишня",
                                                    "Вишни",
                                                    "Вишневый",
                                                    "Вишневого",
                                                    "Вишневому"
                                                ]       
                                            ];
                                            $chehov = [
                                                'img/chehov.jpg' => [
                                                    "Чехов",
                                                    "Чехову",
                                                    "Чехове",
                                                    "Чеховым",
                                                    "Чехова"
                                                ]
                                            ];

                                            if ($_SERVER['REQUEST_METHOD'] == 'GET') { 
                                        ?>
                                                <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']) ?>" method="POST">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="message">
                                                    </div>                                            
                                                    <button type="submit" class="btn btn-default">Отправить</button>
                                                </form>
                                        <?php 
                                            } else {
                                                $message_str = explode(' ', $_POST['message']);     
                                                
                                                foreach ($message_str as $msg) {
                                                    
                                                    foreach ($cherry['img/cherry.jpg'] as $chr) {

                                                        if ($msg == $chr) {
                                        ?>
                                            <img src="<?=key($cherry);?>" width="100px">
                                        <?php
                                                        }
                                                    }
                                                    foreach ($chehov['img/chehov.jpg'] as $chv) {
                                                        if ($msg == $chv) {
                                        ?>
                                            <img src="<?=key($chehov);?>" width="100px">
                                        <?php
                                                        }
                                                    }
                                                }
                                            }
                                        ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

<?php
/***************************************
 * УРОК 4
 ***************************************/
?>
                <div class="tab-pane" id="lesson4">
                    <div id="ss_menu">
<?php
/***************************************
 * Задание 1
 ***************************************/
?>
                        <h3>Запросы HTTP, параметры URL и формы HTML</h3>
                        <div class="ss_button">Задание 1</div>
                        <div class="ss_content" style="height:165px">
                            <div class="col-md-6">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">Условие</div>
                                    <div class="panel-body">
                                        <p>Обязательно сделайте скрипты, приведенные в качестве примеров в этом уроке.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-success">
                                    <div class="panel-heading">Решение</div>
                                    <div class="panel-body">
                                        <p>См. <a href="http://114010.selcdn.com/learning/teachers/141847/streams/483/C3-2016-02-29T21:54:40.pdf" target="_blank">методичку</a> ))</p>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php
/***************************************
 * Задание 2
 ***************************************/
?>
                        <div class="ss_button">Задание 2</div>
                        <div class="ss_content" style="height:245px">
                            <div class="col-md-4">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">Условие</div>
                                    <div class="panel-body">
                                        <p>Превратите получившийся сумматор в калькулятор с четырьмя операциями:
                                        сложение, вычитание, умножение, деление. Не забудьте обработать деление на ноль!<br>
                                        Выбор операции можно осуществлять с помощью тега &lt;select&gt;.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="panel panel-success">
                                    <div class="panel-heading">Решение</div>
                                    <div class="panel-body">
                                        <?php
                                            function mathOp($a, $b, $op) {
                                                if ($a == "" || $b == "")
                                                    return "Введите оба числа";
                                                switch ($op) {
                                                    case '+':
                                                        return $a + $b;
                                                        break;
                                                    case '-':
                                                        return $a - $b;
                                                        break;
                                                    case '*':
                                                        return $a * $b;
                                                        break;
                                                    case '/':
                                                        if ($b != 0)
                                                            return $a / $b;
                                                        else
                                                            return "На ноль делить нельзя";
                                                        break;
                                                }
                                            }

                                            if(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["op"])) {
                                                $a = $_POST["a"];
                                                $b = $_POST["b"];
                                                $op = $_POST["op"];
                                                $result = mathOp($a, $b, $op);
                                                
                                            } else {
                                                $a = "";
                                                $b = "";
                                                $op = "";
                                                $result = "";
                                            }
                                            
                                        ?>
                                        <form class="form-inline" action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']) ?>" method="POST">
                                            <div class="form-group">
                                                <input type="text" name="a" class="form-control" value="<?=$a?>">
                                            </div>
                                            <select name="op" class="form-control">
                                                <option value="+" <?=$op == '+' ? ' selected="selected"' : '';?> >+</option>
                                                <option value="-" <?=$op == '-' ? ' selected="selected"' : '';?> >-</option>
                                                <option value="*" <?=$op == '*' ? ' selected="selected"' : '';?> >*</option>
                                                <option value="/" <?=$op == '/' ? ' selected="selected"' : '';?> >/</option>
                                            </select>
                                            <div class="form-group">
                                                <input type="text" name="b" class="form-control" value="<?=$b?>">
                                            </div>
                                            <button type="submit" class="btn btn-default">=</button>
                                            <div class="form-group">
                                                <input class="form-control" type="text" value="<?=$result;?>" disabled>
                                            </div>                                                    
                                        </form>                                                
                                    </div>
                                </div>
                            </div>
                        </div>
<?php
/***************************************
 * Задание 3
 ***************************************/
?>
                        <div class="ss_button">Задание 3 (*)</div>
                        <div class="ss_content" style="height:285px">
                            <div class="col-md-4">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">Условие</div>
                                    <div class="panel-body">
                                        <p>Создайте калькулятор, который будет определять тип выбранной пользователем операции, ориентируясь на нажатую кнопку.<br>
                                        Данные, введённые пользователем в поля, должны сохраняться и выводиться вместе с результатом вычисления.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="panel panel-success">
                                    <div class="panel-heading">Решение</div>
                                    <div class="panel-body">
                                        <?php
                                            
                                        ?>
                                        <form class="form-inline" action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']) ?>" method="POST">
                                            <div class="form-group">
                                                <input type="text" name="a" class="form-control" value="<?=$a?>">
                                            </div>
                                            <div class="form-group"><?=$op;?></div>
                                            <div class="form-group">
                                                <input type="text" name="b" class="form-control" value="<?=$b?>">
                                            </div>
                                            <div class="form-group">= <?=$result;?></div><br><br>
                                            <button type="submit" name="op" value="+" class="btn btn-default" >+</button>
                                            <button type="submit" name="op" value="-" class="btn btn-default" >-</button>
                                            <button type="submit" name="op" value="*" class="btn btn-default" >*</button>
                                            <button type="submit" name="op" value="/" class="btn btn-default" >/</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

			</div>
		</div>
	</div>
	
	<footer>
        <div class="container">
            <p>&copy; 2016. Максим Киппа</p>
        </div>
    </footer>

	<!-- JavaScripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
