<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Урок 3 / Задание 9</title>
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
            <div class="panel-heading">Урок 3 / Задание 9</div>
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
	
</body>
</html>