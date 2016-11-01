<?php
/**
 * Created by PhpStorm.
 * User: samdlcong
 * Date: 2016/10/31
 * Time: 13:03
 */
namespace  app\controllers;
use yii\web\Controller;

class IndexController extends Controller{
    public function actionIndex(){
    	$this->layout='layout1';
        return $this->render('index.php');
    }
}