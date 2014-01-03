<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'brand_id'); ?>
		<?php echo $form->textField($model,'brand_id'); ?>
		<?php echo $form->error($model,'brand_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dosage_form'); ?>
		<?php echo $form->textField($model,'dosage_form',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dosage_form'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pack_size'); ?>
		<?php echo $form->textField($model,'pack_size',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pack_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'strength'); ?>
		<?php echo $form->textField($model,'strength',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'strength'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retail_price'); ?>
		<?php echo $form->textField($model,'retail_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'retail_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discounted_price'); ?>
		<?php echo $form->textField($model,'discounted_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'discounted_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'applicable_price'); ?>
		<?php echo $form->textField($model,'applicable_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'applicable_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'percentage_discount'); ?>
		<?php echo $form->textField($model,'percentage_discount',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'percentage_discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipping_charges'); ?>
		<?php echo $form->textField($model,'shipping_charges',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'shipping_charges'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_sold'); ?>
		<?php echo $form->textField($model,'item_sold'); ?>
		<?php echo $form->error($model,'item_sold'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_message'); ?>
		<?php echo $form->textArea($model,'customer_message',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'customer_message'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_version1'); ?>
		<?php echo $form->textField($model,'image_version1'); ?>
		<?php echo $form->error($model,'image_version1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_version2'); ?>
		<?php echo $form->textField($model,'image_version2'); ?>
		<?php echo $form->error($model,'image_version2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_version3'); ?>
		<?php echo $form->textField($model,'image_version3'); ?>
		<?php echo $form->error($model,'image_version3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_version4'); ?>
		<?php echo $form->textField($model,'image_version4'); ?>
		<?php echo $form->error($model,'image_version4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_version5'); ?>
		<?php echo $form->textField($model,'image_version5'); ?>
		<?php echo $form->error($model,'image_version5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'out_of_stock'); ?>
		<?php echo $form->textField($model,'out_of_stock'); ?>
		<?php echo $form->error($model,'out_of_stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta'); ?>
		<?php echo $form->textArea($model,'meta',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'meta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sync_status'); ?>
		<?php echo $form->textField($model,'sync_status'); ?>
		<?php echo $form->error($model,'sync_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->