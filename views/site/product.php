<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = $product->name;
?>

<?=Html::a('Go Back',['index'],['class'=>'btn btn-warning']);?>
<div class="row" style="margin:20px 0;">
    <div class="col-md-12">
    <ul class="list-group">
        <li class="list-group-item"><?= $product->name?></li>
        <li class="list-group-item"><?= $product->price?></li>
        <li class="list-group-item"><?= $product->description?></li>
    </ul>
    </div>
</div>