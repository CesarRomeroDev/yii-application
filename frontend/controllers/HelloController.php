<?php

namespace frontend\controllers;

use yii\web\Controller;

class HelloController extends controller{

    public function actionIndex(){
        return $this->render('index');
    }
}