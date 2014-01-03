<?
$this->title = Yum::t('Users');
$this->breadcrumbs=array(Yum::t("Users"));
?>

<? $this->widget('bootstrap.widgets.TbGridView', array(
			'dataProvider'=>$dataProvider,
			'columns'=>array(
		array(
			'name' => 'username',
			'type'=>'raw',
			'value' => 'CHtml::link(CHtml::encode($data->username),
				array("//profile/profile/view","id"=>$data->id))',
			),
		array(
			'name' => 'createtime',
			'value' => 'date(UserModule::$dateFormat,$data->createtime)',
		),
		array(
			'name' => 'lastvisit',
			'value' => 'date(UserModule::$dateFormat,$data->lastvisit)',
		),
	),
)); ?>


