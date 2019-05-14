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

<!-- button modal create new product -->


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Create Product
</button>
<br><br><br>

<div class="row" style="margin:10px;">

<div class="col-sm-4">
<input type="search" placeholder='Search Here' class="form-control" name="" id="">

</div>
</div>


<table class="table table-hover">
    <tr>
        <th>Product ID</th>
        <th>Product</th>
        <th>Price</th>
        <th>Description</th>
        <th>Options</th>
    </tr>

<?php if(count($product)>0): ?>
<?php foreach($product as $pro) :?>
    <tr>
        <td><?=$pro->id?> </td>
        <td><?=$pro->name?></td>
        <td><?=$pro->price?></td>
        <td><?=$pro->description?></td>
        <td>
        <span><?= Html::a('View',['product','id'=>$pro->id],['class'=>'label label-primary']);?></span>
        <span><?= Html::a('Update',['update','id'=>$pro->id],['class'=>'label label-success']);?></span>
        <span><?= Html::a('Delete',['delete','id'=>$pro->id],['class'=>'label label-danger']);?></span>

        </td>
    </tr>
<?php endforeach;?>
<?php else:?>
<tr>
<td>
<h3>No Records Found</h3></td>
</tr>

<?php endif;?>
</table>





<!-- =================================================================
                        Create Product Modal                            
                        ============================================ -->



                        <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Product</h4>
      </div>
      <div class="modal-body">

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
<?= Html::submitButton('Create Post',['class'=>'btn btn-primary']);?>
      </div>  
        
        
      <?php ActiveForm::end()?>


      </div>
    </div>
  </div>
</div>