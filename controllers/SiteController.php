<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntUsuarios;
use yii\web\Response;
use app\models\Utils;
use yii\bootstrap\ActiveForm;

class SiteController extends Controller {
	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className (),
						'only' => [ 
								'logout' 
						],
						'rules' => [ 
								[ 
										'actions' => [ 
												'logout' 
										],
										'allow' => true,
										'roles' => [ 
												'@' 
										] 
								] 
						] 
				],
				'verbs' => [ 
						'class' => VerbFilter::className (),
						'actions' => [ 
								'logout' => [ 
										'post' 
								] 
						] 
				] 
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function actions() {
		return [ 
				'error' => [ 
						'class' => 'yii\web\ErrorAction' 
				],
				'captcha' => [ 
						'class' => 'yii\captcha\CaptchaAction',
						'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null 
				] 
		];
	}
	
	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionIndex() {
		$usuario = new EntUsuarios ();
		
		if ($usuario->load ( Yii::$app->request->post () )) {
			$usuario->txt_token = Utils::generateToken ( 'usr_' );
			Yii::$app->response->format = Response::FORMAT_JSON;
			
			if($validacion = $this->validarUsuario($usuario)){
				return $validacion;
			}
			
			if ($usuario->save ()) {
				
				return [ 
						'status' => 'success' 
				];
			} else {
				return [ 
						'status' => 'error' 
				];
			}
		}
		
		return $this->render ( 'index', [ 
				'usuario' => $usuario 
		] );
	}
	
	public function validarUsuario($usuario) {
		if (Yii::$app->request->isAjax && $usuario->load ( Yii::$app->request->post () )) {
				
			return  ActiveForm::validate ( $usuario );
		}
	}
	
	public function actionVerRegistros(){
		
		$query = EntUsuarios::find ();
		// Carga el dataprovider
		$dataProvider = new ActiveDataProvider ( [
				'query' => $query,
				'sort' => [
						'defaultOrder' => ['fch_creacion'=>SORT_DESC],
				],
				'pagination' => [
						'pageSize' => 30,
						'page' => 0
				]
		] );
		
		
		return $this->render ( 'usuarios', [
				'dataProvider' => $dataProvider
		] );
	}
	
	/**
	 * Descarga todos los registros de usuarios
	 */
	public function actionDescargarRegistros(){
		
		$registros = EntUsuarios::find()->all();
		$array = [];
		$i = 0;
		foreach($registros as $registro){
			$array[$i]['Nombre'] = $registro->txt_nombre;
			$array[$i]['Apellido'] = $registro->txt_apellido_paterno;
			$array[$i]['num_esferas']= $registro->num_esferas;
			$i++;
		}
		
		
		$this->downloadSendHeaders('registros.csv');
		
		$this->array2CSV($array);
		
		exit;
	}
	
	private function array2CSV($array){
		if (count($array) == 0) {
			return null;
		}
		
		$df = fopen("php://output", 'w');
		fputcsv($df, ['Nombre', 'Apellido paterno', 'Esferas']);
		foreach ($array as $row) {
			fputcsv($df, $row);
		}
		fclose($df);
		
	}
	
	private function downloadSendHeaders($filename) {
		// disable caching
		$now = gmdate("D, d M Y H:i:s");
		//header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
		header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
		header("Last-Modified: {$now} GMT");
	
		// force download
		header("Content-Type: application/force-download");
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");
	
		// disposition / encoding on response body
		header("Content-Disposition: attachment;filename={$filename}");
		header("Content-Transfer-Encoding: binary");
	}
	/**
	 * Login action.
	 *
	 * @return string
	 */
	public function actionLogin() {
		if (! Yii::$app->user->isGuest) {
			return $this->goHome ();
		}
		
		$model = new LoginForm ();
		if ($model->load ( Yii::$app->request->post () ) && $model->login ()) {
			return $this->goBack ();
		}
		return $this->render ( 'login', [ 
				'model' => $model 
		] );
	}
	
	/**
	 * Logout action.
	 *
	 * @return string
	 */
	public function actionLogout() {
		Yii::$app->user->logout ();
		
		return $this->goHome ();
	}
	
	/**
	 * Displays contact page.
	 *
	 * @return string
	 */
	public function actionContact() {
		$model = new ContactForm ();
		if ($model->load ( Yii::$app->request->post () ) && $model->contact ( Yii::$app->params ['adminEmail'] )) {
			Yii::$app->session->setFlash ( 'contactFormSubmitted' );
			
			return $this->refresh ();
		}
		return $this->render ( 'contact', [ 
				'model' => $model 
		] );
	}
	
	/**
	 * Displays about page.
	 *
	 * @return string
	 */
	public function actionAbout() {
		return $this->render ( 'about' );
	}
}
