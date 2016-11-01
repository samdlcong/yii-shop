<?php
namespace app\controllers;
use yii\web\controller;

class MemberController extends Controller{
	public function actionAuth(){
		$this->layout = false;
		return $this->render('auth.php');
	}
}