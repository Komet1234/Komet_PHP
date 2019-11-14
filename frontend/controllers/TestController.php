<?php

namespace frontend\controllers;

use \yii\web\Controller;

class TestController extends controller{
// public $defaultAction ='create';

public function actionIndex(){
    $text = 'text from actionIndex';
    return $this -> render('index', [
        'text' => $text,
        'test' =>'test'
    ]);
}

    public function actionCreate(){

        $data = [
            ['id'=> 1, 'name'=> 'a'],
            ['id'=> 2, 'name'=> 'b'],
            ['id'=> 3, 'name'=> 'c']
        ];
        return $this->render('create',[
                'data' => $data,
                
          ]);

    }

    // public function actionCreate(){
    //     echo 'test/create';
    //     return $this->render('create');
  //}


}