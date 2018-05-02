<?php
/**
 * Created by PhpStorm.
 * User: Vinson Chan
 * Date: 2018/5/2
 * Time: 10:56
 */
    namespace app\controllers;
    use yii\web\Controller;

    class CartController extends Controller
    {
        //前台购物车页面
        public $layout = false;
        public function actionIndex()
        {
            return $this->render("index");
        }
    }