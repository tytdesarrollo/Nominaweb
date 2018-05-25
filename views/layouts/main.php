<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
</head>
<body>
<?php $this->beginBody() ?>
<div class="full-h">
<div class="headerbar"></div>
<div class="navbar nav-fix">
	<div class="container-fluid">
		<div class="content__logo pull-left">
			<?= Html::img('@web/img/icon_t.png', ['alt' => 'Nómina', 'height' => '']) ?>
			<span>Talentos & Tecnología</span>
		</div>
		<div class="pull-right">
				<div class="content__icon-menu__aux">
					<div class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle menu-trigger">
							<i class="material-icons icon__24">&#xE5C3;</i>
						</a>
						<ul class="dropdown-menu menu-modul">
							<div class="vin"></div>
							<p class="txt-category fnt__Medium">Productos</p>
							<li class="modul">
								<a href="#">
									<img src="img/icon_nomina.png" alt="Nómina" class="icon-modul">
									<span class="title-modul">Nómina</span>
								</a>
							</li>
							<li class="modul">
								<a href="#">
									<img src="img/icon_awa.png" alt="Awa" class="icon-modul">
									<span class="title-modul">Awa</span>
								</a>
							</li>
							<li class="modul">
								<a href="#">
									<img src="img/icon_hims.png" alt="Hims" class="icon-modul">
									<span class="title-modul">Hims</span>
								</a>
							</li>
							<li class="divider"></li>
							<p class="txt-category fnt__Medium">Módulos</p>
							<li class="modul">
								<a href="#">
									<img src="img/icon_vacaciones.png" alt="Vacaciones" class="icon-modul">
									<span class="title-modul">Vacaciones</span>
								</a>
							</li>
							<li class="modul">
								<a href="#">
									<img src="img/icon_turnos.png" alt="Horas extras" class="icon-modul">
									<span class="title-modul">Horas extras</span>
								</a>
							</li>
							<li class="modul">
								<a href="#">
									<img src="img/icon_certlaboral.png" alt="Certificado laboral" class="icon-modul">
									<span class="title-modul">Certificado laboral</span>
								</a>
							</li>
							<li class="modul">
								<a href="#">
									<img src="img/icon_compago.png" alt="Comprobante de pago" class="icon-modul">
									<span class="title-modul">Comprobante de pago</span>
								</a>
							</li>
							<li class="modul">
								<a href="#">
									<img src="img/icon_certingreso.png" alt="Certificado de ingresos y retención" class="icon-modul">
									<span class="title-modul">Certificado de ingresos</span>
								</a>
							</li>
							<li class="divider"></li>
							<p class="txt-category fnt__Medium">Información</p>
							<li class="modul">
								<a href="#">
									<img src="img/icon_equipnomina.png" alt="Equipo de nómina" class="icon-modul">
									<span class="title-modul">Equipo de nómina</span>
								</a>
							</li>
							<li class="modul">
								<a href="#">
									<img src="img/icon_actlaboral.png" alt="Actualidad laboral" class="icon-modul">
									<span class="title-modul">Actualidad laboral</span>
								</a>
							</li>
							<li class="modul">
								<a href="#">
									<img src="img/icon_cronograma.png" alt="Cronograma cierre de nómina" class="icon-modul">
									<span class="title-modul">Cronograma cierre nómina</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="content__icon-menu__aux">
					<div id="avatar" class="content-avatar__nav hidden-xs">
						<?= Html::img('@web/img/avatar.png', ['alt' => 'avatar', 'class' => 'img-avatar img-circle']) ?>
					</div>
				</div>
				<div class="content__icon-menu__aux">
					<div class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle menu-trigger"><i class="btn-menu-profile glyphicon glyphicon-option-vertical icon__24"></i></a>
						<ul class="dropdown-menu menu-profile">
							<li>
								<div class="dis-inline-block">
									<p class="txt-name fnt__Medium">ususario</p>
									<p class="txt-email">john.doe@hello.com</p>
								</div>
								<div class="dis-inline-block pull-right">
									<div class="content-avatar__menu-profile">
										<?= Html::img('@web/img/avatar.png', ['alt' => 'avatar', 'class' => 'img-avatar img-circle']) ?>
									</div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<p class="txt-cargo fnt__Medium">Profesional Nómina</p>
								<p class="txt-info">C.C. 52513735</p>
								<p class="txt-info">BOGOTÁ</p>
							</li>
							<li>
								<p class="txt-subcat fnt__Medium">Jefe Inmediato:</p>
								<p class="txt-info">Luis Alejandro Galindo Ramirez</p>
							</li>
							<li>
								<p class="txt-subcat fnt__Medium">Regional:</p>
								<p class="txt-info">Administración Central</p>
							</li>
							<li class="divider"></li>
							<li>
								<div class="pull-left">
									<button class="btn btn-raised btn-default btn-sm">Actualizar</button>
								</div>
								<div class="pull-right">
								<?= Html::beginForm(['/site/salida'],
								'post', 
								['class' => 'form-inline']); ?>
								<?= Html::submitButton('Salir',['class' => 'btn btn-raised btn-default btn-sm']) ?>
								<?= Html::endForm() ?>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
	</div>
</div>
<div class="wrap full-h">
	<div class="pdg__top-60">
		<div class="mrg__top-10">
			<!--<?php
			NavBar::begin([
				'brandLabel' => 'My Company',
				'brandUrl' => Yii::$app->homeUrl,
				'options' => [
					'class' => 'navbar-inverse navbar-fixed-top',
				],
			]);
			echo Nav::widget([
				'options' => ['class' => 'navbar-nav navbar-right'],
				'items' => [
					['label' => 'Home', 'url' => ['/site/index']],
					['label' => 'About', 'url' => ['/site/about']],
					['label' => 'Contact', 'url' => ['/site/contact']],
					Yii::$app->user->isGuest ? (
						['label' => 'Login', 'url' => ['/site/login']]
					) : (
						'<li>'
						. Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
						. Html::submitButton(
							'Logout (' . Yii::$app->user->identity->username . ')',
							['class' => 'btn btn-link']
						)
						. Html::endForm()
						. '</li>'
					)
				],
			]);
			NavBar::end();
			?>-->

			<div class="container-fluid">
				<?= Breadcrumbs::widget([
					'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
				]) ?>
				<?= $content ?>
			</div>
		</div>
	</div>
</div>
<!--
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
-->
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<script>
	$(function () {
    $.material.init();
	});
</script>
<script>
	$(function () {
  
	// /////
	// MAD-SELECT
		var madSelectHover = 0;
		$(".mad-select").each(function() {
			var $input = $(this).find("input"),
				$ul = $(this).find("> ul"),
				$ulDrop =  $ul.clone().addClass("mad-select-drop");

			$(this)
			  .append('<i class="material-icons">arrow_drop_down</i>', $ulDrop)
			  .on({
			  hover : function() { madSelectHover ^= 1; },
			  click : function() { $ulDrop.toggleClass("show");}
			});

			// PRESELECT
			$ul.add($ulDrop).find("li[data-value='"+ $input.val() +"']").addClass("selected");

			// MAKE SELECTED
			$ulDrop.on("click", "li", function(evt) {
			  evt.stopPropagation();
			  $input.val($(this).data("value")); // Update hidden input value
			  $ul.find("li").eq($(this).index()).add(this).addClass("selected")
				.siblings("li").removeClass("selected");
			});
			// UPDATE LIST SCROLL POSITION
			$ul.on("click", function() {
			  var liTop = $ulDrop.find("li.selected").position().top;
			  $ulDrop.scrollTop(liTop + $ulDrop[0].scrollTop);
			});
		});

		$(document).on("mouseup", function(){
			if(!madSelectHover) $(".mad-select-drop").removeClass("show");
		});
		  
	});
</script>