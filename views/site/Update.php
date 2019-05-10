<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = $product->name;
?>

<?php $form = Html::beginForm();?>

<div class="form-row">


    <div class="col-sm-6">
    <?= Html::input('text', 'name', $product->name, ['class' => 'form-control']) ?>
    </div>


    <div class="col-sm-4">
    <?= Html::input('number', 'price', $product->price, ['class' => 'form-control']); ?>
    </div>



</div>


<div class="form-row">

    <div class="col-sm-12" style="margin:20px 0;">
    <?= Html::input('text', 'description', $product->description, ['class' => 'form-control']) ?>
    </div>

</div>




<?php Html::endForm()?>
