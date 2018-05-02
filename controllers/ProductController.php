<?php
/**
 * Created by PhpStorm.
 * User: Vinson Chan
 * Date: 2018/5/2
 * Time: 10:37
 */
    namespace  app\controllers;
    use yii\web\Controller;

    class ProductController extends Controller
    {
        public $layout = false;
        //前台商品分类页
        public function actionIndex()
        {
            //views/product/index

            return $this->render("index");
        }


        //前台商品详情页

        public function actionDetail()
        {

            return $this->render("detail");
        }
    }