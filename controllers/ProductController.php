<?php

namespace app\controllers;
use yii\web\controller;

class ProductController extends Controller{
	public function actionIndex(){
		$this->layout = 'layout2';
		return $this->render('index.php');
	}

	public function actionDetail(){
		$this->layout = 'layout2';
		return $this->render('detail.php');
	}
} 