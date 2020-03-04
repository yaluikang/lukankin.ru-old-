<?php
 namespace app\assets;

 use yii\web\AssetBundle;

 class AppAsset extends AssetBundle
 {
     public $sourcePath = 'var/www/lukankin.ru/web';
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