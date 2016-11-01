<?php
namespace app\controllers;
use yii\web\controller;

class OrderController extends Controller{
	public $layout = 'layout1';
	public function actionIndex(){
		return $this->render('index.php');
	}
	public function actionCheck(){
		return $this->render('check.php');
	}
}