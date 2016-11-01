<?php

namespace app\controllers;
use yii\web\controller;

class ProductController extends Controller{
	public $layout = false;
	public function actionIndex(){
	
		return $this->render('index.php');
	}

	public function actionDetail(){
		return $this->render('detail.php');
	}
} 