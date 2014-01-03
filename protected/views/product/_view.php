<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_id')); ?>:</b>
	<?php echo CHtml::encode($data->brand_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dosage_form')); ?>:</b>
	<?php echo CHtml::encode($data->dosage_form); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pack_size')); ?>:</b>
	<?php echo CHtml::encode($data->pack_size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('strength')); ?>:</b>
	<?php echo CHtml::encode($data->strength); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('retail_price')); ?>:</b>
	<?php echo CHtml::encode($data->retail_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discounted_price')); ?>:</b>
	<?php echo CHtml::encode($data->discounted_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('applicable_price')); ?>:</b>
	<?php echo CHtml::encode($data->applicable_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('percentage_discount')); ?>:</b>
	<?php echo CHtml::encode($data->percentage_discount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_charges')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_charges); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_sold')); ?>:</b>
	<?php echo CHtml::encode($data->item_sold); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_message')); ?>:</b>
	<?php echo CHtml::encode($data->customer_message); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_version1')); ?>:</b>
	<?php echo CHtml::encode($data->image_version1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_version2')); ?>:</b>
	<?php echo CHtml::encode($data->image_version2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_version3')); ?>:</b>
	<?php echo CHtml::encode($data->image_version3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_version4')); ?>:</b>
	<?php echo CHtml::encode($data->image_version4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_version5')); ?>:</b>
	<?php echo CHtml::encode($data->image_version5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('out_of_stock')); ?>:</b>
	<?php echo CHtml::encode($data->out_of_stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta')); ?>:</b>
	<?php echo CHtml::encode($data->meta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sync_status')); ?>:</b>
	<?php echo CHtml::encode($data->sync_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>