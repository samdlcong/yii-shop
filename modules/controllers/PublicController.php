<?php
namespace app\modules\controllers;
use yii\web\controller;

class PublicController extends Controller{
	public function actionLogin(){
		$this->layout = false;
		return $this->render("login");
	}
} 
