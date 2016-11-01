<?php
namespace app\controllers;
use yii\web\controller;

class MemberController extends Controller{
	public function actionAuth(){
		$this->layout = 'layout1';
		return $this->render('auth.php');
	}
}