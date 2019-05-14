<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'My Products';
?>

<!-- Messages here for post -->

<?php if(Yii::$app->session->hasFlash('message')):?>

<div class="alert alert-success" style="margin:20px 0;">
<?php echo Yii::$app->session->getFlash('message');?>
</div>

<?php elseif(Yii::$app->session->hasFlash('fail')):?>

<div class="alert alert-danger" style="margin:20px 0;">
<?php echo Yii::$app->session->getFlash('fail');?>
</div>


<?php endif;?>






<?php $form = ActiveForm::begin()?>

        <div class="form-row">
<div class="col-md-6">
<?= $form->field($post,'name');?>
</div>
<div class="col-md-6">
<?= $form->field($post,'price')->textInput(['type'=>'number']);?>
</div>


</div>

<br><br><br>
<div class="form-row">
<div class="col-md-12">
<?= $form->field($post,'description');?>
</div>



</div>
<br><br><br>
      <div class="form-group">   
<?= Html::submitButton('Update Product',['class'=>'btn btn-success']);?>
      </div>  
        
        
      <?php ActiveForm::end()?>

