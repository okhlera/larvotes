<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<!-- Стили -->
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
	<!-- Заголовок вкладки -->
	<title>Голосование</title>
</head>

<body>
	<!-- НАЧАЛО: Навигация -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<!-- Логотип-ссылка на главную -->
			<a class="navbar-brand" href="/">
				<i class="fa fa-hand-paper-o" aria-hidden="true"></i> Голосования
			</a>

			<!-- Навигация из 1 элемента "Открыть голосование"  -->
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/vote/create">Открыть голосование</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- КОНЕЦ: Навигация -->

	<!-- НАЧАЛО: Хлебные крошки -->
	<nav class="breadcrumb">
		<div class="container">
			<ol class="breadcrumb my-0 py-0">
				<li class="breadcrumb-item">
					<a href="/"><i class="fa fa-home" aria-hidden="true"></i> Главная</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">
				
				</li>
			</ol>
		</div>
	</nav>
	<!-- КОНЕЦ: Хлебные крошки -->

	<!-- НАЧАЛО: Основное содержимое страницы -->
	<main class="mt-5">
		<div class="container">

			
			<hr>

			<div class="card border-info mb-4">
				<!-- НАЧАЛО: Шапка карточки -->
				<div class="card-header border-info">
					<h5 class="card-title mb-0">
						<a href="#">
							{{$vote->title}}
						</a>
					</h5>
				</div>
				<!-- КОНЕЦ: Шапка карточки -->
				<!-- НАЧАЛО: Тело карточки -->
				<div class="card-body">
					<!-- Текст описания -->
					<p class="card-text mb-4">
						{{$vote->text}}
					</p>
					<!-- Кнопки голосования -->
					<a href="#" class="btn btn-outline-success mr-3">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Я за!
						<span class="badge badge-pill badge-success">
							{{$vote->positive}}
						</span>
					</a>
					<a href="#" class="btn btn-outline-danger mr-3">
						<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> Я против!
						<span class="badge badge-pill badge-danger">
						{{$vote->negative}}
						</span>
					</a>
				</div>
			
			<div>
			</div>

		</div>
	</main>
	<!-- КОНЕЦ: Основное содержимое страницы -->

</body>

</html>
