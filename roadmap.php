<!doctype html>
<html lang="en-US">
<head>
<title>Контакты</title>
<meta charset="utf-8">

<?php include 'lib/module/sys-meta.php';?>
<?php include 'lib/module/sys-css.php';?>
<?php include 'lib/module/sys-js.php';?>
</head>
<body>
<?php include 'lib/module/sys-php.php';?>
<div class="page-con-content">
	<div class="banner-con-container darkmode-header">
		<div id="object-particles">
		</div>
		<div class="wavebar-con-container">
			<div class="wavebar-con-wrap">
				<div class="wavebar-svg-object">
				</div>
				<div class="wavebar-svg-object">
				</div>
			</div>
		</div>
		<div class="banner-con-backdrop darkmode-header">
		</div>
		<div class='banner-con-title fade-up-onstart'>
			<div class='banner-tx1-title fade-up-onstart pulsate'>
				<h1>Контакты</h1>
			</div>
			
			
		</div>
	</div>
	<div class="page-con-container">
		<div class="page-in-container">
			<form action="send.php" method="post">
   
<input type="text" name="ima" placeholder="Введите имя" required />
<input type="email" name="email" placeholder="Введите почту" required />
<input type="tel" name="tel" placeholder="Введите телефон" required />
 <input type="text" name="qvest" placeholder="Введите ваш вопрос" required />
		 <input type="submit" value="Отправить данные" />
</form>
			</div>
		</div>
	</div>
</div>
<?php include 'lib/module/inc-footer.php';?>
</body>
</html>





