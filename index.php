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
			</ul>
			
<?php
/***************************************
 * УРОК 1
 ***************************************/
?>
			<div id="my-tab-content" class="tab-content">
				<div class="tab-pane active" id="lesson1">
					
					<div id="ss_menu">
<?php
/***************************************
 * Задание 1
 ***************************************/
?>
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
						<div class="ss_content" style="height:475px">
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
													echo $a++ . '<br>';
												case '1':
													echo $a++ . '<br>';
												case '2':
													echo $a++ . '<br>';
												case '3':
													echo $a++ . '<br>';
												case '4':
													echo $a++ . '<br>';
												case '5':
													echo $a++ . '<br>';
												case '6':
													echo $a++ . '<br>';
												case '7':
													echo $a++ . '<br>';
												case '8':
													echo $a++ . '<br>';
												case '9':
													echo $a++ . '<br>';
												case '10':
													echo $a++ . '<br>';
												case '11':
													echo $a++ . '<br>';
												case '12':
													echo $a++ . '<br>';
												case '13':
													echo $a++ . '<br>';
												case '14':
													echo $a++ . '<br>';
												case '15':
													echo $a . '<br>';
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
										<p>Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполните одну из арифметических операций (используйте функции из пункта 4) и верните полученное значение (используйте switch).</p>
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
														return $arg1 + $arg2;
														break;
													case '-':
														return $arg1 - $arg2;
														break;
													case '*':
														return $arg1 * $arg2;
														break;
													case '/':
														return $arg1 / $arg2;
														break;
													case '%':
														return $arg1 % $arg2;
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
												if ($pow > 1)
												{
													return $val * power($val, $pow - 1);
												}
												return $val;
											}
										?>
										<p>Проверка:<br>
										2<sup>10</sup> = <?=power(2, 10);?>
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
