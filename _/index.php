<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Шаблон сайта со встроенным Bootstrap в среде разработки grunt.js</title>
		<meta name="description" content="Это всего лишь шаблон. Для реального сайта стоит добавить понятное описание.">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![if]-->
	</head>
	<body id="home">
		<section class="container">
			<?include('php/header.php');?>
			<div class="content row ">
				<section class="main col col-lg-12">
					<h2>Title</h2>
					<p><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, soluta, dicta! Odit perferendis possimus sint excepturi illum atque distinctio aliquam veniam neque, non cumque autem est ea soluta, id provident.</p>
				</section>
			</div>
		</section>	<!-- container -->
		<?include('php/footer.php');?>
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="http://localhost:35729/livereload.js"></script>
	</body>
</html>