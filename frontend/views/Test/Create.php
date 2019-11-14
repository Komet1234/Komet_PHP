<?php

use\yii\grid\GridView;
use\yii\data\ArrayDataProvider;

$provider = new ArrayDataProvider([
    'allModels' => $data,
    'pagination' => [
        'pageSize' => 3,
    ],
    'sort'=>[
        'attributes'=> ['id','name'],
    ],
]);

 echo GridView::widget([
     'dataProvider'=> $provider,
     'columns'=> ['id','name']
 ]);
?> 