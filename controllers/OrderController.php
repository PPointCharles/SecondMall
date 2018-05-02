<?php
/**
 * Created by PhpStorm.
 * User: Vinson Chan
 * Date: 2018/5/2
 * Time: 11:06
 */
    namespace app\controllers;
    use yii\web\Controller;
    class OrderController extends Controller
    {
        //商城收银台页面
        public $layout = false;
        public function actionCheck()
        {
            return $this->render("check");
        }

    }