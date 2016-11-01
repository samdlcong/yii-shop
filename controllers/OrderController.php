<?php
namespace app\controllers;
use yii\web\controller;

class OrderController extends Controller{
	public function actionCheck(){
		$this->layout=false;
		return $this->render('check.php');
	}
}