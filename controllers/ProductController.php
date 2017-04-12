<?php

namespace app\controllers;

//use app\models\Category;
//use app\models\Product;
use Yii;
use yii\web\Controller;

class ProductController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionHello(){
        return 'hello';
    }

}
