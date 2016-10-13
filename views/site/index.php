<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\web\View;

$this->title = 'Registrarse';

?>

<!-- .front-side -->
<div class="front-side">
	<!-- .aqua-body -->
	<div class="aqua-body">
                           <?php $form = ActiveForm::begin(['id' => 'registro-form', 'options' => ['class' => 'form-login']]); ?>
	
				<?= $form->field($usuario, 'txt_nombre',['options'=>['class'=>'animated']])->textInput(['autofocus' => true]) -> label(false) -> textInput(["placeholder" => "Nombre"])?>
		
				<?= $form->field($usuario, 'txt_apellido_paterno',['options'=>['class'=>'animated']]) -> label(false) -> textInput(["placeholder" => "Apellido paterno", "class"=>"input-short animateds"])?>
		
				<?= $form->field($usuario, 'tel_numero_celular',['options'=>['class'=>'animated']]) -> label(false) -> textInput(["placeholder" => "Número celular"])?>
			
				<?= $form->field($usuario, 'num_esferas',['options'=>['class'=>'animated']]) -> label(false) -> textInput(["placeholder" => "Número de esferas"])?>
			
				<?= Html::submitButton('<span class="ladda-label">Registrar</span>', ['id'=>'js-submit-form', 'class' => 'btn btn-primary js-btn-registrar ladda-button animated', 'name' => 'contact-button', 'data-style'=>'zoom-out'])?>
			
				

	<?php ActiveForm::end(); ?>
                        </div>
	<!-- end - .aqua-body -->

	<!-- .aqua-body-succes -->
	<div class="aqua-body-succes">
		<!-- .aqua-body-succes-cont -->
		<div class="aqua-body-succes-cont">
			<!-- .aqua-body-succes-cont -->
			<div class="aqua-body-succes-cont-icon animated">
				<i class="ion ion-checkmark"></i>
			</div>
			<!-- end - .aqua-body-succes-cont -->
			<p class="animated">Registro Exitoso</p>
		</div>
		<!-- end - .aqua-body-succes-cont -->

		<!-- .aqua-body-succes-btn -->
		<button class="btn btn-primary aqua-body-succes-btn js-btn-continuar ladda-button animated" data-style="zoom-out">
			<span class="ladda-label">Continuar</span>
		</button>
		<!-- end - .aqua-body-succes-btn -->
	</div>
	<!-- end - .aqua-body-succes -->
</div>
<!-- end - .front-side -->

<!-- .back-side -->
<div class="back-side">
	<!-- .aqua-registros-body -->
	<div class="aqua-registros-body" id="js-contenedor-registros">
                            
							<?php
							foreach ( $registrados as $registrado ) {
								?>
                            <!-- .aqua-registros-item -->
		<div class="aqua-registros-item">
			<p><?=$registrado->txt_nombre.' '.$registrado->txt_apellido_paterno?></p>
			<p><?=$registrado->num_esferas?></p>
		</div>
		<!-- end - .aqua-registros-item -->
                            <?php
							}
							?>
                        </div>
	<!-- end - .aqua-registros-body -->
</div>
</div>
<!-- end - .flip-panel -->
