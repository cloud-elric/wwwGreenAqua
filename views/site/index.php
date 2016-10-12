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

	<?php $form = ActiveForm::begin(['id' => 'registro-form', 'options' => ['class' => 'form-login']]); ?>
	
				<?= $form->field($usuario, 'txt_nombre')->textInput(['autofocus' => true]) -> label(false) -> textInput(["placeholder" => "Nombre"])?>
		
				<?= $form->field($usuario, 'txt_apellido_paterno') -> label(false) -> textInput(["placeholder" => "Apellido paterno", "class"=>"input-short"])?>
		
				<?= $form->field($usuario, 'tel_numero_celular') -> label(false) -> textInput(["placeholder" => "Número celular"])?>
			
				<?= $form->field($usuario, 'num_esferas') -> label(false) -> textInput(["placeholder" => "Número de esferas"])?>
			
				<?= Html::submitButton('Continuar', ['class' => 'btn btn-primary', 'name' => 'contact-button'])?>
			
				

	<?php ActiveForm::end(); ?>
	