<?php

	if(isset($_POST["a"]) && isset($_POST["b"])) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $op = $_POST["op"];

		if (($a == "") || ($b == ""))
			$result = "Введите оба числа";         
		elseif (($b == 0) && ($op == '/'))
			$result = "На ноль делить нельзя";
		else 
			$result = eval("return $a$op$b;");
                                
    } else {
        $a = "";
        $b = "";
        $op = "";
        $result = "";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Урок 4 / Задание 2</title>
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
		<div class="panel panel-default">
            <div class="panel-heading">Урок 4 / Задание 2</div>
            <div class="panel-body">
				
				<!-- ФОРМА -->
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
	
</body>
</html>