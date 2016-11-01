<?php
namespace app\controllers;
use yii\web\controller;

class CartController extends Controller{
	public function actionIndex(){
		$this->layout = 'layout1';
		return $this->render('index.php');
	}
}



