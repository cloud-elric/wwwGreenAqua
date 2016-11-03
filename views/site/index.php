<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\web\View;
use app\models\Utils;

$this->title = 'Registrarse';

$this->registerJsFile ( '@web/js/site.js', [
		'depends' => [
				\app\assets\AppAsset::className ()
		]
] );

?>

<!-- .front-side -->
<div class="front-side">
	<!-- .aqua-body -->
	<div class="aqua-body">
            <?php $form = ActiveForm::begin(['id' => 'registro-form', 'options' => ['class' => 'form-login']]); ?>

			<?= $form->field($usuario, 'txt_nombre',['options'=>['class'=>'animated']])->textInput(['autofocus' => true]) -> label(false) -> textInput(["placeholder" => "Nombre"])?>
	
			<?= $form->field($usuario, 'txt_apellido_paterno',['options'=>['class'=>'animated']]) -> label(false) -> textInput(["placeholder" => "Apellido paterno", "class"=>"input-short animateds"])?>
			
			<?= $form->field($usuario, 'num_edad',['options'=>['class'=>'animated']]) -> label(false) -> textInput(["placeholder" => "Edad", "class"=>"input-short animateds", 'maxlength'=>3])?>
	
			<?= $form->field($usuario, 'tel_numero_celular',['options'=>['class'=>'animated']]) -> label(false) -> textInput(["placeholder" => "Número celular", 'maxlength'=>10])?>
			
			<?= $form->field($usuario, 'txt_cp',['options'=>['class'=>'animated']]) -> label(false) -> textInput(["placeholder" => "C. P.", 'maxlength'=>5])?>
		
			<?= $form->field($usuario, 'txt_email',['options'=>['class'=>'animated']]) -> label(false) -> textInput(["placeholder" => "Email"])?>

			<div class="col-xs-12 col-sm-12 input-field terminos-condiciones">
				<ul class="list">
					<li class="list__item">
						<label class="label--checkbox">
						
							<div class="label--checkbox-row">
								<div class="label--checkbox-row-col">
									<input type="checkbox" id="checkbox" class="checkbox">
								</div>
								<div class="label--checkbox-row-col">
									<span>Acepta Terminos y condiciones</span>
								</div>
							</div>
						</label>
					</li>
				</ul>
				<div class="aceptar-mask"></div>
			</div>
			
			<?= Html::submitButton('<span class="ladda-label">Registrar</span>', ['id'=>'js-submit-form', 'class' => 'btn btn-primary js-btn-registrar ladda-button animated', 'name' => 'contact-button', 'data-style'=>'zoom-out'])?>
			
			<p id="message-error"></p>
				

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
			<p><?=Utils::changeFormatDate($registrado->fch_creacion)?></p>
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

<!-- <p class="message-error">Un mensaje de error</p> -->
