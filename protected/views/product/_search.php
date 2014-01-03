<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brand_id'); ?>
		<?php echo $form->textField($model,'brand_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dosage_form'); ?>
		<?php echo $form->textField($model,'dosage_form',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pack_size'); ?>
		<?php echo $form->textField($model,'pack_size',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'strength'); ?>
		<?php echo $form->textField($model,'strength',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'retail_price'); ?>
		<?php echo $form->textField($model,'retail_price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discounted_price'); ?>
		<?php echo $form->textField($model,'discounted_price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'applicable_price'); ?>
		<?php echo $form->textField($model,'applicable_price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'percentage_discount'); ?>
		<?php echo $form->textField($model,'percentage_discount',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipping_charges'); ?>
		<?php echo $form->textField($model,'shipping_charges',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_sold'); ?>
		<?php echo $form->textField($model,'item_sold'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer_message'); ?>
		<?php echo $form->textArea($model,'customer_message',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_version1'); ?>
		<?php echo $form->textField($model,'image_version1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_version2'); ?>
		<?php echo $form->textField($model,'image_version2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_version3'); ?>
		<?php echo $form->textField($model,'image_version3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_version4'); ?>
		<?php echo $form->textField($model,'image_version4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_version5'); ?>
		<?php echo $form->textField($model,'image_version5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'out_of_stock'); ?>
		<?php echo $form->textField($model,'out_of_stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meta'); ?>
		<?php echo $form->textArea($model,'meta',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sync_status'); ?>
		<?php echo $form->textField($model,'sync_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->