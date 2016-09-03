<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>


<body>
<?php $this->beginBody() ?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">Start Bootstrap</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="about.html">О нас</a>
				</li>
				<li>
					<a href="services.html">Сотрудничество</a>
				</li>
				<li>
					<a href="contact.html">Наши контакты</a>
				</li>
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="portfolio-1-col.html">1 Column Portfolio</a>
						</li>
						<li>
							<a href="portfolio-2-col.html">2 Column Portfolio</a>
						</li>
						<li>
							<a href="portfolio-3-col.html">3 Column Portfolio</a>
						</li>
						<li>
							<a href="portfolio-4-col.html">4 Column Portfolio</a>
						</li>
						<li>
							<a href="portfolio-item.html">Single Portfolio Item</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="blog-home-1.html">Blog Home 1</a>
						</li>
						<li>
							<a href="blog-home-2.html">Blog Home 2</a>
						</li>
						<li>
							<a href="blog-post.html">Blog Post</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="full-width.html">Full Width Page</a>
						</li>
						<li>
							<a href="sidebar.html">Sidebar Page</a>
						</li>
						<li>
							<a href="faq.html">FAQ</a>
						</li>
						<li>
							<a href="404.html">404</a>
						</li>
						<li>
							<a href="pricing.html">Pricing Table</a>
						</li>
					</ul>
				</li>-->
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<div class="fill" style="background-image:url('/img/slide1.png');"></div>
			<div class="carousel-caption">
				<h2>Caption 1</h2>
			</div>
		</div>
		<div class="item">
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
			<div class="carousel-caption">
				<h2>Caption 2</h2>
			</div>
		</div>
		<div class="item">
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
			<div class="carousel-caption">
				<h2>Caption 3</h2>
			</div>
		</div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="icon-next"></span>
	</a>
</header>

<!-- Page Content -->
<div class="container">

	<!-- Marketing Icons Section -->
	<div id="promo" class="row">
		<div class="col-md-4">
			<div class="panel-heading">
				<span class="promo-blocks"><i class="fi fi-fw fi-cert"></i>Официальный представитель Forwerk (Германия) в Украине </span>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel-heading">
				<span class="promo-blocks"><i class="fi fi-fw fi-hand-shake"></i> Работа напряму с производителем</span>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel-heading">
				<span class="promo-blocks"><i class="fi fi-fw fi-price-policy"></i>Гибкая ценовая политика </span>
			</div>
		</div>
	</div>
	<!-- /.row -->

	<!-- Portfolio Section -->
	<section id="portfolio" class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Каталог продукции Citinox</h2>
		</div>
		<div class="col-md-3 col-sm-6 portfolio-item">
			<a href="#">
				<div class="portfolio-caption">
					<i class="fi fi-fw fi-type-1"></i>
					<h4>Креплениe к стене</h4>
					<p class="text-muted">Для крепления табличек к стене с различной толщиной таблички и расстоянием от стены</p>
				</div>
			</a>
		</div>
		<div class="col-md-3 col-sm-6 portfolio-item">
			<a href="#">
				<div class="portfolio-caption">
					<i class="fi fi-fw fi-type-2"></i>
					<h4>Флажковое крепление</h4>
					<p class="text-muted">Для прямого крепления флажковых табличек</p>
				</div>
			</a>
		</div>
		<div class="col-md-3 col-sm-6 portfolio-item">
			<a href="#">
				<div class="portfolio-caption">
					<i class="fi fi-fw fi-type-3"></i>
					<h4>Стержневое крепление</h4>
					<p class="text-muted">Для крепления табличек к стене либо к потолку с помощью системы для стержней </p>
				</div>
			</a>
		</div>
		<div class="col-md-3 col-sm-6 portfolio-item">
			<a href="#">
				<div class="portfolio-caption">
					<i class="fi fi-fw fi-type-4"></i>
					<h4>Тросиковое крепление</h4>
					<p class="text-muted">Для крепления табличек к стене либо к потолку с помощью системы для тросиков</p>
				</div>
			</a>
		</div>
		<div class="col-md-3 col-sm-6 portfolio-item">
			<a href="#">
				<div class="portfolio-caption">
					<i class="fi fi-fw fi-type-5"></i>
					<h4>Свободностоящие</h4>
					<p class="text-muted">Держатель таблички для настольного размещения и свободнoстоящих табличек</p>
				</div>
			</a>
		</div>
		<div class="col-md-3 col-sm-6 portfolio-item">
			<a href="#">
				<div class="portfolio-caption">
					<i class="fi fi-fw fi-type-6"></i>
					<h4>Дополнительные детали</h4>
					<p class="text-muted">Стабилизирование и расширение стандартных деталей</p>
				</div>
			</a>
		</div>
		<div class="col-md-3 col-sm-6 portfolio-item">
			<a href="#">
				<div class="portfolio-caption">
					<i class="fi fi-fw fi-type-7"></i>
					<h4>Alinox</h4>
					<p class="text-muted">Держатели изготовлены из алюминия с защитным покрытием</p>
				</div>
			</a>
		</div>
	</section>
	<!-- /.row -->

	<!-- Features Section -->
	<div class="row features">
		<div class="col-md-6">
			<img class="img-responsive" src="/img/bakery.png" alt="">
		</div>
		<div class="col-md-6">
			<h2 class="page-header">Крепление к стене</h2>
			<p>Мы предлагаем большой выбор высококачественных креплений для изделий из стекла и табличек производства компании FORWERK (Германия)</p>
			<p>Мы предлагаем большой выбор высококачественных креплений для изделий из стекла и табличек производства компании FORWERK (Германия)</p>
			<p>Мы предлагаем большой выбор высококачественных креплений для изделий из стекла и табличек производства компании FORWERK (Германия)</p>
			<p>Мы предлагаем большой выбор высококачественных креплений для изделий из стекла и табличек производства компании FORWERK (Германия)</p>

		</div>
	</div>
	<!-- /.row -->
	<!-- Call to Action Section -->
	<div class="row">
		<div class="well">
			<div class="row">
				<div class="col-md-4 cta-1">
					<span class="cta-text">Звоните или оставляйте заявки</span>
				</div>
				<div class="col-md-4 cta-2">
					<span class="cta-text">(044) 466-60-40</span>
				</div>
				<div class="col-md-4 cta-3">
					<span class="cta-text"><a class="btn btn-lg btn-default btn-block consult" href="#">Заказать консультацию</a></span>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<span class="copyright">citinox.com.ua © 2016</span>
					<div class="copyright-mid">Мы предлагаем большой выбор высококачественных креплений для изделий из стекла и табличек производства компании FORWERK (Германия)</div>
					<span class="de">citinox.de</span>
				</div>
				<div class="col-md-4">
					<section class="row">
						<div class="col-lg-12">
							<h2 class="page-header">Каталог товаров</h2>
						</div>
						<div class="col-md-6 col-sm-6 portfolio-item">
							<a href="#">
								<div class="portfolio-caption">
									<i class="fi fi-fw fi-type-1"></i>
									К стене
								</div>
							</a>
						</div>
						<div class="col-md-6 col-sm-6 portfolio-item">
							<a href="#">
								<div class="portfolio-caption">
									<i class="fi fi-fw fi-type-2"></i>
									Флажковое
								</div>
							</a>
						</div>
						<div class="col-md-6 col-sm-6 portfolio-item">
							<a href="#">
								<div class="portfolio-caption">
									<i class="fi fi-fw fi-type-3"></i>
									Стержневое
								</div>
							</a>
						</div>
						<div class="col-md-6 col-sm-6 portfolio-item">
							<a href="#">
								<div class="portfolio-caption">
									<i class="fi fi-fw fi-type-4"></i>
									Тросиковое
								</div>
							</a>
						</div>
						<div class="col-md-6 col-sm-6 portfolio-item">
							<a href="#">
								<div class="portfolio-caption">
									<i class="fi fi-fw fi-type-5"></i>
									Свободностоящие
								</div>
							</a>
						</div>
						<div class="col-md-6 col-sm-6 portfolio-item">
							<a href="#">
								<div class="portfolio-caption">
									<i class="fi fi-fw fi-type-6"></i>
									Детали
								</div>
							</a>
						</div>
						<div class="col-md-6 col-sm-6 portfolio-item">
							<a href="#">
								<div class="portfolio-caption">
									<i class="fi fi-fw fi-type-7"></i>
									Alinox
								</div>
							</a>
						</div>
					</section>
				</div>
				<div class="col-md-4 adress">
					<span>г. Киев</span>
					<span>ул. Магнитогорская, 1Б, офис 219</span>
					<span>тел.: +380 44 466 60 44</span>
				</div>
			</div>
		</div>
	</footer>


<!-- /.container -->
<!-- Script to Activate the Carousel -->
<script>
	$('.carousel').carousel({
		interval: 5000 //changes the speed
	})
</script>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>