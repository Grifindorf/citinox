<?php
/**
 * Created by PhpStorm.
 * User: PC10
 * Date: 18.08.2016
 * Time: 10:32
 */

namespace frontend\controllers;
use yii\web\Controller;
use Yii;


class TestController extends Controller {
	public function actionIndex()
	{
		$var = 'Hello, Ruslan';
		$version = Yii::getVersion();
		return $this->render('index', ['var' => $var, 'version' => $version]);
	}
} 