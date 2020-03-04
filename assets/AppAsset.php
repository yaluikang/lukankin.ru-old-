<?php
 namespace app\assets;

 use yii\web\AssetBundle;

 class AppAsset extends AssetBundle
 {
     public $basePath = 'var/www/lukankin.ru';
     public $baseUrl = 'web/';
     public $css = [

     ];
     public $js = [
         'js/test.js'
     ];
     public $depends = [
         'yii\web\YiiAsset',
         'yii\bootstrap\BootstrapAsset',
     ];
 }