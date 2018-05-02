<?php
/**
 * Created by PhpStorm.
 * User: Vinson Chan
 * Date: 2018/5/2
 * Time: 10:12
 */
    namespace  app\controllers;
    use yii\web\Controller;

    class IndexController extends Controller{
        //前台首页
        public function actionIndex()
        {
            //加载前台模板 views/index/index
            return $this->renderPartial("index");
        }

    }

