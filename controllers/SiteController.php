<?php
    namespace app\controllers;
    use yii\web\Controller;

    class SiteController extends Controller
    {
        public function actionIndex ()
        {
            return $this->render('index');
        }
        public function actionFilms ()
        {
            echo '123';
            return $this->render('index');
        }
        public function actionTvseries ()
        {
            echo '123';
            return $this->render('index');
        }
        public function actionNewItems ()
        {
            echo '123';
            return $this->render('index');
        }
    }