<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'Update Product', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Product', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1>View Product #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'brand_id',
		'dosage_form',
		'pack_size',
		'strength',
		'description',
		'retail_price',
		'discounted_price',
		'applicable_price',
		'percentage_discount',
		'shipping_charges',
		'quantity',
		'item_sold',
		'customer_message',
		'image_version1',
		'image_version2',
		'image_version3',
		'image_version4',
		'image_version5',
		'out_of_stock',
		'meta',
		'status',
		'sync_status',
		'created_at',
		'updated_at',
	),
)); ?>
